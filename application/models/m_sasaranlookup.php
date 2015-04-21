<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_sasaranlookup extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->table_name = 'sasaranlookup';
		$this->primary_key = 'id';
	}
	// Relations with other table
	public function index()
	{
		$query=$this->db->get('sasaranlookup');
		return $query;
	}
	public function data_where()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$query=$this->db->get('sasaranlookup');
		return $query;
	}
	
	public function simpan_data_sasaranlookup() {
        $data = array(
		'uraian' => $this->input->post('uraian')
		);
		 $this->db->insert('sasaranlookup', $data);
        
        }
	
	public function update_sasaranlookup($id){
        $this->db->where('id', $id);
        $get_data = $this->db->get('sasaranlookup');
            return $get_data;
    }	
	
	public function proses_update_data_sasaranlookup($id) {
        $data = array(
		'uraian' => $this->input->post('uraian')
		);
		$this->db->where('id', $id);
		$query=$this->db->update("sasaranlookup",$data);
		return $query;
        
        }
	
	public function hapus_data_sasaranlookup($id) {
        $this->db->where('id', $id);
        $this->db->delete('sasaranlookup');
        
        }
	
	
}
?>