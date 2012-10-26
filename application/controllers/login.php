<?php

class Login extends Controller {
	
	function index()
	{
        $this->load->view('login_form');		
	}
	
	function validate_credentials()
	{		
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('welcome');
		}
		else // incorrect username or password
		{
            echo 'username and password did not match';
			$this->index();
		}
	}	
	
	function signup()
	{
		$this->load->view('signup_form');
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
    
    function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page.'.anchor('login','Login');	
			die();		
			//$this->load->view('login_form');
		}		
	}

}