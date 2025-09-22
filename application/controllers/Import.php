<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('excel'); // load PHPExcel
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('import_view'); // form upload
    }

    public function upload() {
        if (isset($_FILES["file"]["name"])) {
            $path = $_FILES["file"]["tmp_name"];

            // Tentukan reader otomatis (xls/xlsx)
            $objPHPExcel = PHPExcel_IOFactory::load($path);

            $sheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

            $numrow = 1;
            foreach ($sheet as $row) {
                if ($numrow > 1) { // lewati baris header
                    $nisn   = trim($row["A"]);
                    $nama   = trim($row["B"]);
                    $kelas  = trim($row["C"]);

                    if ($nisn != "" && $nama != "" && $kelas != "") {
                        $data = array(
                            'nisn'   => $nisn,
                            'nama'   => $nama,
                            'kelas'  => $kelas,
                            'status' => '0',
                            'kunci'  => substr(md5(uniqid()), 0, 6) // random key
                        );
                        $this->db->insert("t_pemilih", $data);
                    }
                }
                $numrow++;
            }

            $this->session->set_flashdata('success', 'Data pemilih berhasil diimport!');
            redirect('import');
        } else {
            $this->session->set_flashdata('error', 'Tidak ada file yang diupload');
            redirect('import');
        }
    }
}
