<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 
	function __construct(){
		parent::__construct();
		$this->load->helper('my_helper');
		no_cache();
		
		if ($this->session->userdata('login') != NULL) {
			redirect(site_url());
		}
		
		$this->load->model("login_model");
	}
	
	public function index()
	{

		$model = $this->login_model->get_data_fields();
		$data['data'] = $model;
		$data['title'] = 'Login Aplikasi';
// 		$this->load->view('login', $data);
		$this->template->load('login', 'login', $data);
		
	}
	
	public function cek()
	{
		$user = $this->input->post("user");
		$pass = $this->input->post("pass");
		
		$query = $this->login_model->cek_login($user, $pass);
		
		if($query)
		{
			foreach($query as $row){
				$sess = array(
					'login' => $user
				);
				
				$this->session->set_userdata($sess);
			}
			
			redirect(site_url());
		}
		else
		{
			redirect("login");
		}
		
	}
	
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */