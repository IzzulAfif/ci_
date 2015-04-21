<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Program_c_model extends MY_Model{
	function __construct()
	{
		parent::__construct();
		$this->table_name = 'program';
		$this->primary_key = 'id';
	}
    
	function getRpjm()
	{
		$this->db->select("*");
		$this->db->from('rpjm');
		$this->db->order_by('tahunawal');
		$query = $this->db->get();
		return $query->result();
	}

	function getProgram()
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->order_by($this->primary_key);
		$query = $this->db->get();
		return $query->result();
	}

	function getProgramByRpjm($tahun)
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->where('rpjm', $tahun);
		$query = $this->db->get();
		return $query->result();
	}

	function getProgramById($id)
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->where($this->primary_key, $id);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
  
	function getTujuan($id)
	{
		$this->db->where('program',$id);
		$query = $this->db->get('tujuan');
		return $query->result();
	}

	function getTujuan2($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('tujuan');
		return $query->result();
	}

	function insertTujuan($data)
	{
		$this->db->insert_batch('tujuan', $data);
	}

	function insertProgram($data)
	{
		$this->db->insert_batch('program', $data);
	}

	public function delProgram($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('program'); 
	}

	public function delTujuan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tujuan'); 
	}

	function updateTujuan($data)
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->update('tujuan', $data);
	}
}