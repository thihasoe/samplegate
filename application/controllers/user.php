<?php
/**
* 
*/
class User extends Controller
{
	
	function index()
	{
		$this->is_logged_in();
        $this->load->model('membership_model');
		$query = $this->membership_model->get_members(); 
        $this->load->model('Category_model');
        $categories = $this->Category_model->get_categories();
        $data = array(
    			'page_title'=>'User management',
        		'users' => $query,
        		'categories' => $categories
        	); 
		$this->parser->parse('user_view', $data);
	}
	
	function create_member()
	{
		$this->is_logged_in();
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('signup_form');
		}
		
		else
		{			
			$this->load->model('membership_model');
			
			if($query = $this->membership_model->create_member())
			{
				redirect('user');
			}
			
		}
		
	}
	
	 function edit($id)
	 {
	 	$this->is_logged_in();
        $this->load->model('membership_model');
        $query = $this->membership_model->get_member_by_id($id); 
        $this->load->model('Category_model');
        $categories = $this->Category_model->get_categories();
        $data = array(
	        	'page_title' => 'Edit User',
		        	'users' => $query,
				        'categories' => $categories
        	);
        $this->parser->parse('edit_user',$data);
        if ($this->input->post('update')) 
        {
			$this->membership_model->update_member($id);    
			redirect('user');    	
        }
        
    }
    
     function delete($id)
    {
    	$this->is_logged_in();
        $this->load->model('membership_model');
        $this->membership_model->delete_member($id);
        redirect('user');
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

?>