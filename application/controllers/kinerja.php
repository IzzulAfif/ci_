<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kinerja extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kinerja_model');
		$this->load->model('unit_model');
		$this->load->model('program_c_model');
		//$this->set_identity('laporan', 'tahun', 'pelaporan', 'Agama');
	}
	
	public function index()
	{
		$data['data']=$this->kinerja_model->sasaran();
		$this->template->load('admin', 'kinerja/kinerja', $data);
	}
	public function getTujuan($id)
	{
		$data['tujuan']=$this->program_c_model->getTujuan($id);
		$this->template->load('ajax', 'kinerja/getTujuan', $data);
	}
	public function indikator()
	{
		$id=$this->uri->segment(3);
		$data['data']=$this->kinerja_model->indikator($id);
		$data['sasaran']=$this->kinerja_model->sasaran_id($id);
		$this->template->load('admin', 'kinerja/indikator', $data);
	}
	
	public function insert(){
		$data = $this->kinerja_model->get_data_fields();
		$model = get_object_vars($data);
		$this->pelaporan_model->insert($model);
	}
	public function add_kinerja(){
		
		$data['program'] = $this->program_c_model->getProgram();
		$data['unit'] = $this->unit_model->index();
		$this->template->load('admin', 'kinerja/add_kinerja', $data);
	}
	public function edit_kinerja(){
		$id=$this->uri->segment(3);
		$data['unit'] = $this->unit_model->index();
		$data['data']=$this->kinerja_model->sasaran_id($id);
		$this->template->load('admin', 'kinerja/edit_kinerja', $data);
	}
	public function update_kinerja()
	{
		$id=$this->uri->segment(3);
		$this->kinerja_model->update_kinerja($id);
		redirect('kinerja');
	}
	public function add_indikator(){
		$id=$this->uri->segment(3);
		$data['sasaran']=$this->kinerja_model->sasaran_id($id);
		$this->template->load('admin', 'kinerja/add_indikator',$data);
	}
	public function edit_indikator(){
		
		$id=$this->uri->segment(3);
		$sasaran=$this->uri->segment(4);
		$data['data']=$this->kinerja_model->indikator_where($id);
		$data['sasaran']=$this->kinerja_model->sasaran_id($sasaran);
		$this->template->load('admin', 'kinerja/edit_indikator',$data);
	}
	public function update_indikator($id,$sasaran)
	{
		$this->kinerja_model->update_indikator($id);
		redirect('kinerja/indikator/'.$sasaran);
	}
	public function insert_indikator($id){
		$this->kinerja_model->insert_indikator($id);
		redirect('kinerja/indikator/'.$id);
	}
	public function insert_kinerja(){
		$this->kinerja_model->insert_kinerja();
		redirect('kinerja');
	}
	public function delete_indikator($id,$sasaran){
		$this->kinerja_model->delete_indikator($id);
		redirect('kinerja/indikator/'.$sasaran);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */