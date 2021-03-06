<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();

		$this->load->helper('my_helper');
		no_cache();

		if ($this->session->userdata('login') == NULL) {
			redirect(site_url('login'));
		}
	}

	public function index()
	{
// 		$this->load->view('home');
		$data['title'] = 'Ini Home Admin';
		$data['data'] = '';

		$this->template->load('admin', 'home/home', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url("login"));
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
