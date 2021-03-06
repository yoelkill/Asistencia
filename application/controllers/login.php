<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	public function index()
	{	
	

//	$this->load->model('login_model');
//	print_r($this->login_model->prueba_hora());
//exit();
		$this->form_validation->set_rules('user_name', 'Username', 'strip_tags|trim|valid_email|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'strip_tags|trim|required|md5');

		$data['title'] = "Login";
		$data['view']  = "login";

		if ($this->form_validation->run() === false){

			$data['error_message'] = "Inserte su nombre de usuario y contraseña por favor";
			$this->load->view('template', $data);

		} else {

			$name     = $this->input->post('user_name');
			$password = $this->input->post('password');
			$type     = $this->input->post('type');
			
			$this->load->model('login_model');
			$result = $this->login_model->get_user($name, $password, $type);

			if ($result === true){
				
				redirect(base_url().'welcome');

			}else{

				$data['error_menssage'] = 'Usuario y/o constraseña invalido';
				$this->load->view('template', $data);

			}
		}
	}

	public function logout()
	{
		redirect(base_url().'login');
	}

}
