<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load PHPExcel dari third_party
require_once APPPATH . "/third_party/PHPExcel.php";

class Excel extends PHPExcel {
    public function __construct() {
        parent::__construct();
    }
}
