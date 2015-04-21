<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pelaporan extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('pelaporan_model');
		$this->set_identity('laporan', 'tahun', 'pelaporan', 'Agama');
	}
	
	public function tahun_pelaporan()
	{
		$data['title']="Tahun Pelaporan";
		$data['data']=$this->pelaporan_model->index();
		$this->template->load('admin', 'pelaporan/tahun_pelaporan', $data);
	}
	public function aktifasi_tahun()
	{
		$this->unit_model->aktifasi_tahun();
		//$this->template->load('admin', 'Pelaporan/index', $data);
	}
	
	public function insert(){
		$data = $this->unit_model->get_data_fields();
		$model = get_object_vars($data);
		$this->pelaporan_model->insert($model);
	}

	function ubahStatus(){
		$tahun = $this->input->post('tahun');
		$status = $this->input->post('status');
		$data = array('status'=>$status);
		$this->pelaporan_model->updateStatus($data, $tahun);
		redirect('pelaporan/tahun_pelaporan');
	}

	function delete($thn){
		$this->pelaporan_model->delete($thn);
		redirect('pelaporan/tahun_pelaporan');
	}


	public function add(){
		$this->load->view('pelaporan/add');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */