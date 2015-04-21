<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chart extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('chart_model');
		$this->load->model('unit_model');
		//$this->set_identity('laporan', 'tahun', 'pelaporan', 'Agama');
	}
	
	public function index()
	{
		$data['unit']=$this->chart_model->unit();
		$unitye = '0';
		if(isset($_GET['unit1'])){
			$unitye=$_GET['unit1'];
		}
			$data['hasil']=$this->chart_model->filter_unit($unitye);
			$data['unitye'] = $unitye;
		$this->template->load('admin', 'chart/chart.php',$data);
	}
	public function indikator()
	{
		$id=$this->uri->segment(3);
		$data['data']=$this->kinerja_model->indikator($id);
		$data['sasaran']=$this->kinerja_model->sasaran_id($id);
		$this->template->load('admin', 'kinerja/indikator', $data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */