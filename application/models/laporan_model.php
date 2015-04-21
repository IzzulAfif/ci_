<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Laporan_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->table_name = 'laporan';
        $this->primary_key = 'tahun';
    }

    // Relations with other table
    public function index() {
        $query = $this->db->query("
                SELECT a . * , b.uraian, b.program, b.tahun
                FROM daftariku a
                LEFT OUTER JOIN sasaran b ON a.sasaran_id = b.id;");
        return $query;
    }
    
    public function get_tahun() {
        $query = $this->db->query("
                SELECT a . * , b.uraian, b.program, b.tahun
                FROM daftariku a
                LEFT OUTER JOIN sasaran b ON a.sasaran_id = b.id
                GROUP BY b.tahun;");
        return $query;
    }

}

?>