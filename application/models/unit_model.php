<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Unit_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->table_name = 'unit';
		$this->primary_key = 'id';
	}
	// Relations with other table
	public function index()
	{
		$query=$this->db->get('unit');
		return $query;
	}
	public function data_where()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$query=$this->db->get('unit');
		return $query;
	}
	public function administrator()
	{
		$query=$this->db->query('select *from unit where userlevel=-1 ');
		return $query;
	}
	public function attribute_labels()
	{
		return array(
			'nama' => 'nama',
			'singkatan' => 'singkatan',
			'username' => 'username',
			'password' => 'password',
			'userlevel' => 'userlevel',
			'tugas' => 'tugas',
			'fungsi' => 'fungsi',
			'visi' => 'visi',
			'misi' => 'misi'
		);
	}
	
}
?>