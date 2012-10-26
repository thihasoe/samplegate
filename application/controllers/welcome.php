<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
	   	$this->load->library('pagination');
        $config['base_url'] = 'http://samplegate.co.cc/index.php/welcome/index/';
		$config['total_rows'] = $this->db->get('ebook')->num_rows();
		$config['per_page'] = 3;
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(3);
    	$this->load->library('parser');    
        $this->load->model('Manage_model');
		$data = array();
		$categories = $this->Manage_model->get_categories();
		if($query = $this->Manage_model->get_records($config['per_page'],$segment))
		{    
			$data = array(
					'page_title'=>'Home',
		            'page_entries' => $query,
			        'categories'=> $categories
		            );
		}
		
		$this->parser->parse('welcome_message', $data);
		
	}
	
	function category_view($id)
    {
        $this->load->library('pagination');
        $config['base_url'] = 'http://samplegate.co.cc/index.php/welcome/category_view/'.$id;
		$config['total_rows'] = $this->db->get_where('ebook', array('category_id' => $id))->num_rows();
		$config['per_page'] = 3;
        $config['uri_segment'] = 4;
        $this->pagination->initialize($config);
        $segment = $this->uri->segment(4);
        $this->load->library('parser');  
        $this->load->model('Manage_model');
        $query = $this->Manage_model->get_by_category_id($id,$config['per_page'],$segment);
        $categories = $this->Manage_model->get_categories();
        $data = array(	
				 	'page_title'=>'Category View',
		              'page_entries' => $query,
			          	'categories'=> $categories
		            );
		
		$this->parser->parse('welcome_message', $data);
    }
    
	function search(){
		$this->load->model('Manage_model');
		$title = $this->input->post('title');	
		
		if($title != "")
			{
				$this->session->set_userdata('a',$title);
			}
		else
			 	$title = $this->session->userdata('a');
			 	
			 	
		$this->load->library('pagination');
        $config['base_url'] = 'http://samplegate.co.cc/index.php/welcome/search';
		
		$config['per_page'] = 3;
		$segment = $this->uri->segment(3);
		$config['total_rows'] =$this->Manage_model->search_by_title_actual($title)->num_rows();
		$this->pagination->initialize($config);
		$this->load->library('parser');
		$categories = $this->Manage_model->get_categories();
		if ($query = $this->Manage_model->search_by_title_pagination($title, $config['per_page'],$segment))
		{
			$data = array(
					'page_title'=> 'Search the ebook with : '.$title,
		              'page_entries' => $query,
			          'categories'=> $categories
		            );
			
			$this->parser->parse('welcome_message', $data);	
		}
		else{
			$data = array(
					  'page_title'=> 'Search the ebook with : '.$title,
		              'page_entries' => '',
					  'title'=>'',
					  'contents'=>'',
					  'author'=>'',
					  'download_url'=>'',
					  'image_url'=>'',
			          'categories'=> $categories
		            );
			
			$this->parser->parse('welcome_message', $data);	
			
		}
		
	}
	
	function view_detail($id){
		$this->load->model('Manage_model');
		$query = $this->Manage_model->get_record_by_id($id);
		$categories = $this->Manage_model->get_categories();
		$this->load->library('parser');
		
		$data = array(
		              'page_entries' => $query,
			          'categories'=> $categories
		            );
		
		$this->parser->parse('view_detail', $data);
		
	}
}

