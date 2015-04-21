<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unit extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('unit_model');
		$this->set_identity('unit', 'id', 'unit_model', 'Agama');
	}
	
	public function index()
	{
		$data['title']='Master Unit';
		$data['data']=$this->unit_model->index();
		$this->template->load('admin', 'unit/index', $data);
	}
	public function Profil()
	{
		$data['title']='Master Profil';
		$data['data']=$this->unit_model->index();
		$this->template->load('admin', 'unit/profil', $data);
	}
	public function Administrator()
	{
		$data['title']='Master Administrator';
		$data['data']=$this->unit_model->administrator();
		$this->template->load('admin', 'unit/administrator', $data);
	}
	public function insert(){
		$data = $this->unit_model->get_data_fields();
		$model = get_object_vars($data);
		$this->unit_model->insert($model);
		redirect('unit');
	}
	public function add(){
		$this->template->load('admin', 'unit/add');
	}

	function edit(){
		$data['title'] = 'Ubah Data Unit';
		$data['unit'] = $this->unit_model->data_where();
		$this->template->load('admin', 'unit/edit', $data);
	}
	public function edit_profil(){
		$data['title'] = 'Ubah Data Profil';
		$data['data']=$this->unit_model->data_where();
		// var_dump($data);
		// die();
		$this->template->load('admin', 'unit/edit_profil',$data);
	}
	public function update(){
		$data = $this->unit_model->get_data_fields();
		$data->id = $this->uri->segment(3);
		$model = get_object_vars($data);
		
		$this->unit_model->update($model);
		
// 		var_dump($model);
// 		die();
// 		redirect(site_url('unit/profil'));
		redirect('unit/profil');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */