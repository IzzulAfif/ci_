<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rules_c_model extends MY_Model{
	function __construct()
	{
		parent::__construct();
		$this->table_name = 'rules_user';
		$this->primary_key = 'id';
	}

	function getRules()
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->order_by($this->primary_key);
		$query = $this->db->get();

		return $query->result();
	}

	function attribute_labels()
	{
		return array(
			);
	}
}