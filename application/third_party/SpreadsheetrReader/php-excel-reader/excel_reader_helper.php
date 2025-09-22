<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('read_excel_file')) {
    function read_excel_file($file_path) {
        require_once APPPATH . 'third_party/SpreadsheetReader/SpreadsheetReader.php';
        
        try {
            $Reader = new SpreadsheetReader($file_path);
            $data = array();
            
            foreach ($Reader as $row) {
                $data[] = $row;
            }
            
            return $data;
        } catch (Exception $e) {
            throw new Exception('Error reading Excel file: ' . $e->getMessage());
        }
    }
}