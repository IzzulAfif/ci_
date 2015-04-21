<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Pelaporan_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->table_name = 'laporan';
		$this->primary_key = 'tahun';
	}
	// Relations with other table
	public function index()
	{
		$query=$this->db->get('laporan');
		return $query;
	}
	public function aktifasi_tahun($id)
	{
		$this->db->query("update laporan set status=1 where tahun='".$id."' ");
		$this->db->query("update laporan set status=0 where tahun!='".$id."' ");
	}

	function updateStatus($data, $tahun)
	{
		$this->db->where($this->primary_key, $tahun);
		$this->db->update($this->table_name, $data);
	}

	function delete($thn)
	{
		$this->db->where($this->primary_key, $thn);
		$this->db->delete($this->table_name);
	}

	public function attribute_labels()
	{
		return array(
			'tahun' => 'tahun',
			'tahun' => 'tahun'
		);
	}
	
}
?>