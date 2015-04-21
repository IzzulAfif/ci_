<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kegiatan extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_kegiatan');
		//$this->set_identity('unit', 'id', 'unit_model', 'Agama');
	}
	
	public function index()
	{
		$data['title']='Master Kegiatan';
		$data['data']=$this->m_kegiatan->index();
		$data['unit'] =  $this->m_kegiatan->get_unit();
		$data['sasaran'] =  $this->m_kegiatan->get_sasaran();
		$data['indikator'] =  $this->m_kegiatan->get_indikator();
		$this->template->load('admin', 'kegiatan/index', $data);
	}
	
	public function add(){
		$data['unit'] =  $this->m_kegiatan->get_unit();
		$data['sasaran'] =  $this->m_kegiatan->get_sasaran();
		$data['indikator'] =  $this->m_kegiatan->get_indikator();
		$this->template->load('admin', 'kegiatan/add', $data);
	}
	
    public function simpan_kegiatan() {
       
		$data['fields']['urian'] = $this->input->post('uraian');
		$data['fields']['indikator'] = $this->input->post('indikator');
		$data['fields']['target'] = $this->input->post('target');
		$data['fields']['satuan'] = $this->input->post('satuan');
		$data['fields']['realisasi'] = $this->input->post('realisasi');
		$data['fields']['sasaran'] = $this->input->post('sasaran');
		$data['fields']['indikatorsasaran'] = $this->input->post('indikatorsasaran');
		$data['fields']['tahun'] = $this->input->post('tahun');
		$data['fields']['unit'] = $this->input->post('unit');
	
	    $this->m_kegiatan->simpan_data_kegiatan($data); 
		$data['m_kegiatan'] = $this->m_kegiatan->index();
        redirect('kegiatan/index', 'refresh');
	}
	
	function edit_kegiatan($id = null) {
        if (is_null($id)) {
            show_404();
        } else {
            $data['m_kegiatan'] = $this->m_kegiatan->update_kegiatan($id)->result();
            $this->template->load('admin', 'kegiatan/edit', $data);
			}
    }
	
	function proses_edit_kegiatan(){
		
		$id=$this->uri->segment(3);
		$this->m_kegiatan->proses_update_data_kegiatan($id);
		redirect('kegiatan');
		
	}
	
	
    function hapus_kegiatan($id) {
        $id = $this->uri->segment(3);

        $this->m_kegiatan->hapus_data_kegiatan($id);
        $this->session->set_flashdata('hapus_sukses', TRUE);
        redirect('kegiatan/index/', 'refresh');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */