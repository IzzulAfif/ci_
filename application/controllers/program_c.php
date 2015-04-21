<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Program_c extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('program_c_model');
		$this->set_identity('program', 'tahun', 'program_c_model', 'Agama');
	}

	function index()
	{
		
		$data['title'] = 'Master Data Program';
		$data['program'] = $this->program_c_model->getProgram();
		$this->template->load('admin', 'master_program/index', $data);
	}

// 	function showPerRpjm()
// 	{
// 		$tahun = $this->uri->segment(3);
// 
// 		$data['title'] = 'Master Data Program';
// 		$data['program'] = $this->program_c_model->getProgramByRpjm($tahun);
// 		$this->template->load('admin', 'master_program/index', $data);
// 	}

	function addProgram()
	{
		$data['title'] = 'Tambah Data Master Program';
		$data['rpjm'] = $this->program_c_model->getRpjm();
		$this->template->load('admin', 'master_program/add', $data);
	}

	function createProgram()
	{
		$uraian = $this->input->post('uraian');
		$rpjm = $this->input->post('rpjm');
		
		$data = array('uraian' => $uraian, 'rpjm' => $rpjm);
		$this->program_c_model->insert($data);
		redirect('program_c');
	}

	function deleteProgram()
	{
		$id = $this->uri->segment(3);
		$this->program_c_model->delProgram($id);
		redirect('program_c');
	}

	function tujuan()
	{	
		$id = $this->uri->segment(3);
		if($id == NULL){ redirect('notfound'); }
		$data['title'] = 'Tujuan Program';
		$data['program'] = $this->program_c_model->getProgramById($id);
		$data['tujuan'] = $this->program_c_model->getTujuan($id);
		$data['idTujuan'] = $id;
		$this->template->load('admin', 'master_program/tujuan', $data);
	}

	function addTujuan()
	{
		$id = $this->uri->segment(3);

		if($id == NULL){ redirect('notfound'); }

		$data['title'] = 'Tambah Tujuan Program';
		$data['program'] = $this->program_c_model->getProgramById($id);
		$data['tujuan'] = $this->program_c_model->getTujuan($id);
		$data['idTujuan'] = $id;
		$this->template->load('admin', 'master_program/addTujuan', $data);
	}

	function createTujuan()
	{
		
		$programId = $this->input->post('program');
		$uraian = $this->input->post('uraian');
		$tahun = $this->input->post('tahun');
		
		foreach($uraian as $key => $value){
			
			if($value != NULL || $tahun[$key] != NULL){
				$data['program'] = $programId;
				$data['uraian'] = $value;
				$data['tahun'] = $tahun[$key];
				$vdata[] = $data;
				$data = array();
			}
		}
// 		echo "<pre>";
// 		var_dump($vdata);
// 		echo "</pre>";
		$this->program_c_model->insertTujuan($vdata);
		redirect('program_c/tujuan/'.$programId);
	}

	function editTujuan()
	{
		$id = $this->uri->segment(3);
		$data['title'] = 'Ubah Data Tujuan';
		$data['tujuan'] = $this->program_c_model->getTujuan2($id);
		$this->template->load('admin', 'master_program/editTujuan', $data);
	}
	
	function updateTujuan()
	{
		$data = array(
				'uraian'=>$this->input->post('uraian'),
				'tahun'=>$this->input->post('tahun'),
			      );
		$this->program_c_model->updateTujuan($data);
		redirect('program_c');
	}

	function deleteTujuan()
	{
		$id = $this->uri->segment(3);
		$this->program_c_model->delTujuan($id);
		redirect('program_c');
	}
}