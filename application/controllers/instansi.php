<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instansi extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_instansi');
		//$this->set_identity('unit', 'id', 'unit_model', 'Agama');
	}
	
	public function index()
	{
		$data['title']='Master Instansi';
		$data['data']=$this->m_instansi->index();
		$this->template->load('admin', 'instansi/index', $data);
	}
	
	public function add(){
		$this->template->load('admin', 'instansi/add');
	}
	
    public function simpan_instansi() {
       
		$data['fields']['nama'] = $this->input->post('nama');
	
	    $this->m_instansi->simpan_data_instansi($data); 
		$data['m_instansi'] = $this->m_instansi->index();
        redirect('instansi/index', 'refresh');
	}
	
	function edit_instansi($id = null) {
        if (is_null($id)) {
            show_404();
        } else {
            $data['m_instansi'] = $this->m_instansi->update_instansi($id)->result();
            $this->template->load('admin', 'instansi/edit', $data);
			}
    }
	
	function proses_edit_instansi(){
		
		$obj['data_edit_intansi']['nama'] = $this->input->post('nama');
		$data['m_intansi'][0] = (Object) $obj['data_edit_intansi'];
        $id = $this->uri->segment(3);
		
		$this->load->model('m_instansi', '', TRUE);
        $this->m_instansi->proses_update_data_instansi($id);
        $this->session->set_flashdata('update_sukses', TRUE);
                redirect('instansi/index', 'refresh');
		
	}
	
	
    function hapus_instansi($id) {
        $id = $this->uri->segment(3);

        $this->m_instansi->hapus_data_instansi($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('instansi/index/', 'refresh');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */