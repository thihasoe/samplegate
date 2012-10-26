<?php
class Category extends Controller {
	
	function index() 
    {
        $this->is_logged_in();
        $this->load->model('Category_model');
        
        $data = array();
		
		if($query = $this->Category_model->get_categories())
		{
			$data = array(
					'page_title' => 'Category Management',
					'categories' => $query,
					'categories1' => $query,
				);
				
		}
		
		$this->parser->parse('category_view', $data);
	}
    
    function create()
    {
        $this->is_logged_in();
        $this->load->view('new_category');
    }
    
    function insert()
    {
        $this->is_logged_in();
        $this->load->model('Category_model');
        $data = array('name' => $this->input->post('name'));
        $this->Category_model->add_category($data);
        $this->index();
    }
    
    function edit($id)
    {
        $this->is_logged_in();
        $this->load->model('Category_model');
        $query = $this->Category_model->get_category_by_id($id);
        $data = array(
        		'page_title'=>'Edit Category',
        		'categories'=> $query,
        		'categories1'=> $query,
        		);
        $this->parser->parse('edit_category',$data);
    }
    
    function update()
    {
        $this->is_logged_in();
        $id = $this->input->post('categoryid');
        $this->load->model('Category_model');
        $data = array('name' => $this->input->post('name'));
        $this->Category_model->update_category($id,$data);
       	redirect('category');
    }
    
    function delete($id)
    {
        $this->is_logged_in();
        $this->load->model('Category_model');
        
        $this->Category_model->delete_category($id);
        redirect('category');
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
