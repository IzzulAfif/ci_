<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_kegiatan extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->table_name = 'kegiatan';
		$this->primary_key = 'id';
	}
	// Relations with other table
	public function index()
	{
		$query=$this->db->get('kegiatan');
		return $query;
	}
	public function data_where()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$query=$this->db->get('kegiatan');
		return $query;
	}
	
	public function simpan_data_kegiatan() {
        $data = array(
		'uraian' => $this->input->post('uraian'),
		'indikator' => $this->input->post('indikator'),
		'target' => $this->input->post('target'),
		'satuan' => $this->input->post('satuan'),
		'realisasi' => $this->input->post('realisasi'),
		'sasaran' => $this->input->post('sasaran'),
		'indikatorsasaran' => $this->input->post('indikatorsasaran'),
		'tahun' => $this->input->post('tahun'),
		'unit' => $this->input->post('unit')
		);
		 $this->db->insert('kegiatan', $data);
        
        }
	
	public function update_kegiatan($id){
        $this->db->where('id', $id);
        $get_data = $this->db->get('kegiatan');
            return $get_data;
    }
	
	public function get_unit() {
        $this->db->select('*');
		$this->db->from('unit');
        $this->db->order_by('id');
		$query = $this->db->get();
		
           return $query;
        
    }
	
	public function get_sasaran() {
        $this->db->select('*');
		$this->db->from('sasaran');
        $this->db->order_by('id');
		$query = $this->db->get();
		
           return $query;
        
    }
	
	public function get_indikator() {
        $this->db->select('*');
		$this->db->from('indikator');
        $this->db->order_by('id');
		$query = $this->db->get();
           return $query;
        
    }
	
	public function proses_update_data_kegiatan($id) {
        $data = array(
		'uraian' => $this->input->post('uraian'),
		'indikator' => $this->input->post('indikator'),
		'target' => $this->input->post('target'),
		'satuan' => $this->input->post('satuan'),
		'realisasi' => $this->input->post('realisasi'),
		'sasaran' => $this->input->post('sasaran'),
		'indikatorsasaran' => $this->input->post('indikatorsasaran'),
		'tahun' => $this->input->post('tahun'),
		'unit' => $this->input->post('unit')
		);
		$this->db->where('id');
		$query=$this->db->update("kegiatan",$data);
		return $query;
        
        }
	
	public function hapus_data_kegiatan($id) {
        $this->db->where('id', $id);
        $this->db->delete('kegiatan');
        
        }
	
	
}
?>