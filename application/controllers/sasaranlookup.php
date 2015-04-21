<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sasaranlookup extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_sasaranlookup');
		//$this->set_identity('unit', 'id', 'unit_model', 'Agama');
	}
	
	public function index()
	{
		$data['title']='Master Sasaranlookup';
		$data['data']=$this->m_sasaranlookup->index();
		$this->template->load('admin', 'sasaranlookup/index', $data);
	}
	
	public function add(){
		$this->template->load('admin', 'sasaranlookup/add');
	}
	
    public function simpan_sasaranlookup() {
		$data['fields']['uraian'] = $this->input->post('uraian');
	
	    $this->m_sasaranlookup->simpan_data_sasaranlookup($data); 
		$data['m_sasaranlookup'] = $this->m_sasaranlookup->index();
        redirect('sasaranlookup', 'refresh');
	}
	
	function edit_sasaranlookup($id = null) {
        if (is_null($id)) {
            show_404();
        } else {
            $data['m_sasaranlookup'] = $this->m_sasaranlookup->update_sasaranlookup($id)->result();
            $this->template->load('admin', 'sasaranlookup/edit', $data);
			}
    }
	
	function proses_edit_sasaranlookup(){
		
		$id=$this->uri->segment(3);
		$this->m_sasaranlookup->proses_update_data_sasaranlookup($id);
		redirect('sasaranlookup');
		
	}
	
	
    function hapus_sasaranlookup($id) {
        $id = $this->uri->segment(3);

        $this->m_sasaranlookup->hapus_data_sasaranlookup($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('sasaranlookup/index', 'refresh');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */