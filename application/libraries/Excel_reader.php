<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_reader {
    
    public function read_excel($file_path) {
        // Baca file Excel sebagai CSV (format sederhana)
        $data = array();
        
        // Deteksi tipe file
        $file_type = pathinfo($file_path, PATHINFO_EXTENSION);
        
        if ($file_type === 'csv') {
            return $this->read_csv($file_path);
        } else {
            // Untuk file Excel, coba konversi ke CSV dulu
            return $this->read_excel_file($file_path);
        }
    }
    
    private function read_csv($file_path) {
        $data = array();
        
        if (($handle = fopen($file_path, "r")) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $data[] = $row;
            }
            fclose($handle);
        }
        
        return $data;
    }
    
    private function read_excel_file($file_path) {
        // Jika ekstensi zip tersedia, coba ekstrak dan baca file
        if (extension_loaded('zip')) {
            return $this->read_excel_with_zip($file_path);
        } else {
            // Fallback: gunakan fungsi sederhana
            return $this->read_excel_fallback($file_path);
        }
    }
    
    private function read_excel_with_zip($file_path) {
        $data = array();
        
        try {
            $zip = new ZipArchive;
            if ($zip->open($file_path) === TRUE) {
                // Cari file sharedStrings.xml dan sheet1.xml
                $sharedStrings = array();
                
                // Baca shared strings
                if (($sharedStringsIndex = $zip->locateName('xl/sharedStrings.xml')) !== FALSE) {
                    $sharedStringsXml = $zip->getFromIndex($sharedStringsIndex);
                    $sharedStrings = $this->parse_shared_strings($sharedStringsXml);
                }
                
                // Baca sheet data
                if (($sheetIndex = $zip->locateName('xl/worksheets/sheet1.xml')) !== FALSE) {
                    $sheetXml = $zip->getFromIndex($sheetIndex);
                    $data = $this->parse_sheet_data($sheetXml, $sharedStrings);
                }
                
                $zip->close();
            }
        } catch (Exception $e) {
            // Jika gagal, gunakan fallback
            $data = $this->read_excel_fallback($file_path);
        }
        
        return $data;
    }
    
    private function parse_shared_strings($xml) {
        $strings = array();
        $pattern = '/<t[^>]*>(.*?)<\/t>/s';
        
        if (preg_match_all($pattern, $xml, $matches)) {
            $strings = $matches[1];
        }
        
        return $strings;
    }
    
    private function parse_sheet_data($xml, $sharedStrings) {
        $data = array();
        $rowPattern = '/<row[^>]*>(.*?)<\/row>/s';
        $cellPattern = '/<c[^>]*>(.*?)<\/c>/s';
        $valuePattern = '/<v[^>]*>(.*?)<\/v>/s';
        
        if (preg_match_all($rowPattern, $xml, $rowMatches)) {
            foreach ($rowMatches[1] as $rowContent) {
                $rowData = array();
                
                if (preg_match_all($cellPattern, $rowContent, $cellMatches)) {
                    foreach ($cellMatches[1] as $cellContent) {
                        if (preg_match($valuePattern, $cellContent, $valueMatch)) {
                            $value = $valueMatch[1];
                            
                            // Cek jika nilai merujuk ke shared strings
                            if (strpos($cellContent, 't="s"') !== FALSE && isset($sharedStrings[$value])) {
                                $rowData[] = $sharedStrings[$value];
                            } else {
                                $rowData[] = $value;
                            }
                        } else {
                            $rowData[] = '';
                        }
                    }
                    
                    $data[] = $rowData;
                }
            }
        }
        
        return $data;
    }
    
    private function read_excel_fallback($file_path) {
        // Fallback: konversi Excel ke CSV menggunakan shell_exec jika memungkinkan
        $csv_path = tempnam(sys_get_temp_dir(), 'excel_csv');
        
        if (function_exists('shell_exec')) {
            // Coba konversi menggunakan unoconv (Linux)
            $command = "unoconv -f csv -o " . escapeshellarg($csv_path) . " " . escapeshellarg($file_path);
            @shell_exec($command);
            
            if (file_exists($csv_path)) {
                $data = $this->read_csv($csv_path);
                unlink($csv_path);
                return $data;
            }
            
            // Coba konversi menggunakan ssconvert (GNOME)
            $command = "ssconvert " . escapeshellarg($file_path) . " " . escapeshellarg($csv_path);
            @shell_exec($command);
            
            if (file_exists($csv_path)) {
                $data = $this->read_csv($csv_path);
                unlink($csv_path);
                return $data;
            }
        }
        
        // Jika semua gagal, return array kosong
        return array();
    }
}