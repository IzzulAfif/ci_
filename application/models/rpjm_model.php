<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class rpjm_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
		// $this->table_name = 'laporan';
		// $this->primary_key = 'tahun';
	}
	// Relations with other table
	public function rpjm()
	{
		$query=$this->db->get("rpjm");
		return $query;
	}
	public function rpjm_where($id)
	{
		$this->db->where('tahunawal', $id);
		$query=$this->db->get("rpjm");
		return $query;
	}
	public function create()
	{
		$data=array(
			'tahunawal'=>$this->input->post('tahunawal'),
			'tahunakhir'=>$this->input->post('tahunakhir')
		);	
		$query=$this->db->insert("rpjm",$data);
		return $query;
	}
	public function update($id)
	{
		$data=array(
			'tahunakhir'=>$this->input->post('tahunakhir')
		);	
		$this->db->where('tahunawal', $id);
		$query=$this->db->update("rpjm",$data);
		return $query;
	}
	public function delete($id)
	{
		$this->db->where('tahunawal', $id);
		$query=$this->db->delete("rpjm");
		return $query;
	}
	
	public function attribute_labels()
	{
		return array(
			'tahunawal' => 'tahunawal',
			'tahunakhir' => 'tahunakhir'
		);
	}
	
	
}
?>