<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rpjm extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('rpjm_model');
		$this->set_identity('rpjm', 'tahunawal', 'pelaporan', 'Agama');
	}
	
	public function index()
	{
		//$id=$this->uri->segment(3);
		$data['title']='Data RPJM';
		$data['data']=$this->rpjm_model->rpjm();
		$this->template->load('admin', 'rpjm/rpjm', $data);
	}
	public function add()
	{
		$data['title']='Tambah Data RPJM';
		$this->template->load('admin', 'rpjm/add');
	}
	public function edit()
	{
		$id=$this->uri->segment(3);
		$data['title']='Ubah Data RPJM';
		$data['data']=$this->rpjm_model->rpjm_where($id);
		$this->template->load('admin', 'rpjm/edit',$data);
	}
	public function create()
	{
		$this->rpjm_model->create();
		redirect('rpjm');
	}
	public function update()
	{
		$id=$this->uri->segment(3);
		$this->rpjm_model->update($id);
		redirect('rpjm');
	}
	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->rpjm_model->delete($id);
		redirect('rpjm');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */