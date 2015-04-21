<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporan extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('laporan_model');
    }

    public function index() {
        $data['title'] = "Laporan";
        $data['data'] = $this->laporan_model->index();
        $data['tahun'] = $this->laporan_model->get_tahun();

        $this->template->load('admin', 'laporan/laporan_pkk', $data);
    }

    public function cetak_pkk() {
        // As PDF creation takes a bit of memory, we're saving the created file in /downloads/reports/
        ini_set("memory_limit", "64M");
        $h = "7"; // Hour for time zone goes here e.g. +7 or -4, just remove the + or -
        $hm = $h * 60;
        $ms = $hm * 60;
        $filename = "Laporan_Kinerja_Kegiatan_" . gmdate("D, d M Y H:i:s", time() + ($ms));

        $pdfFilePath = FCPATH . "assets/pdf/" . $filename . ".pdf";
        $data['header_1'] = $this->input->post('header_1');
        $data['header_2'] = $this->input->post('header_2');
        $data['nama_lampiran'] = $this->input->post('nama_lampiran');
        $data['tahun'] = $this->input->post('tahun');
        $data['tanggal'] = $this->input->post('tanggal');
        $data['nama'] = $this->input->post('nama_ttd');
//        $data['tempat'] = $this->input->post('tempat');
        $data['nrp'] = $this->input->post('nrp');
        $data['pangkat'] = $this->input->post('pangkat');
        $data['jabatan'] = $this->input->post('jabatan');
        
         $data['data'] = $this->laporan_model->index();
        $data['tahun_sasaran'] = $this->laporan_model->get_tahun();

        if (file_exists($pdfFilePath) == FALSE) {
            $html = $this->load->view('laporan/cetak_pkk', $data, true); // render the view into HTML
            $this->load->library('pdf');
            $param = '"en-GB-x","Legal","12pt","",10,6,8,5,6,3'; // Landscape 190mm wide x 236mm height 
            $pdf = $this->pdf->load($param);
            $pdf->SetFooter($_SERVER['HTTP_HOST'] . '|{PAGENO}|' . gmdate("D, d M Y H:i", time() + ($ms))); // Add a footer for good measure
            $pdf->AddPage('L'); // Adds a new page in Landscape orientation
            $pdf->WriteHTML($html); // write the HTML into the PDF
            $pdf->Output($pdfFilePath, 'I'); // save to file because we can
        }
    }

    public function cetak_pkk_download() {
        // As PDF creation takes a bit of memory, we're saving the created file in /downloads/reports/
        ini_set("memory_limit", "64M");
        $h = "7"; // Hour for time zone goes here e.g. +7 or -4, just remove the + or -
        $hm = $h * 60;
        $ms = $hm * 60;
        $filename = "Laporan_Kinerja_Kegiatan_" . gmdate("D, d M Y H:i:s", time() + ($ms));
        
        $pdfFilePath = FCPATH . "assets/pdf/" . $filename . ".pdf";
         $data['header_1'] = $this->input->post('header_1');
        $data['header_2'] = $this->input->post('header_2');
        $data['nama_lampiran'] = $this->input->post('nama_lampiran');
        $data['tahun'] = $this->input->post('tahun');
        $data['tanggal'] = $this->input->post('tanggal');
        $data['nama'] = $this->input->post('nama_ttd');
//        $data['tempat'] = $this->input->post('tempat');
        $data['nrp'] = $this->input->post('nrp');
        $data['pangkat'] = $this->input->post('pangkat');
        $data['jabatan'] = $this->input->post('jabatan');

        if (file_exists($pdfFilePath) == FALSE) {
            $html = $this->load->view('laporan/cetak_pkk', $data, true); // render the view into HTML
            $this->load->library('pdf');
            $param = '"en-GB-x","Legal","12pt","",10,6,8,5,6,3'; // Landscape 190mm wide x 236mm height 
            $pdf = $this->pdf->load($param);
            $pdf->SetFooter($_SERVER['HTTP_HOST'] . '|{PAGENO}|' . gmdate("D, d M Y H:i", time() + ($ms))); // Add a footer for good measure
            $pdf->AddPage('L'); // Adds a new page in Landscape orientation
            $pdf->WriteHTML($html); // write the HTML into the PDF
            $pdf->Output($pdfFilePath, 'D'); // save to file because we can
        }
    }

}
