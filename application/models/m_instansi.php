<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_instansi extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->table_name = 'instansi';
		$this->primary_key = 'id';
	}
	// Relations with other table
	public function index()
	{
		$query=$this->db->get('instansi');
		return $query;
	}
	public function data_where()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$query=$this->db->get('instansi');
		return $query;
	}
	
	public function simpan_data_instansi() {
        $data = array(
		'nama' => $this->input->post('nama')
		);
		 $this->db->insert('instansi', $data);
        
        }
	
	public function update_instansi($id){
        $this->db->where('id', $id);
        $get_data = $this->db->get('instansi');
        if ($get_data->num_rows() > 0) {
            return $get_data;
        } else {
            return FALSE;
        }
    }
	
	public function proses_update_data_instansi($id) {
        $data = array(
		'nama' => $this->input->post('nama')
		);
		$this->db->where('id', $id);
        $this->db->update('instansi', $data);
        
        }
	
	public function hapus_data_instansi($id) {
        $this->db->where('id', $id);
        $this->db->delete('instansi');
        
        }
	
	
}
?>