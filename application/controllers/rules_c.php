<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rules_c extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') == NULL) {
			redirect(site_url('login'));
		}

		$this->load->model('group_c_model');
		$this->load->model('menu_c_model');
		$this->load->model('rules_c_model');
		$this->set_identity('rules_user', 'id', 'rules_c_model', 'Group');
	}

	function index()
	{
		$data['title'] = 'Master Hak Akses';
		$data['rules'] = $this->rules_c_model->getRules();
		$this->template->load('admin', 'master_rules/index', $data);
	}

	function add()
	{
		$data['title'] = 'Tambah Data Master Rules Pengguna';
		$data['group'] = $this->group_c_model->getGroup();
		$data['menu'] = $this->menu_c_model->getMenu();

		$this->template->load('admin', 'master_rules/add', $data);
	}

	function create()
	{
		echo "<pre>";
		var_dump($_POST);
		echo "</pre>";
	}
}