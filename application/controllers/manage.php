<?php
class Manage extends Controller {
	
	function index() 
    {   
        $this->is_logged_in();
        $this->load->library('pagination');
        $config['base_url'] = 'http://samplegate.co.cc/index.php/manage/index/';
		$config['total_rows'] = $this->db->get('ebook')->num_rows();
		$config['per_page'] = 3;
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(3);
               
        
		$this->load->model('Manage_model');
		$categories = $this->Manage_model->get_categories();
		$data = array();
		
		if($query = $this->Manage_model->get_records($config['per_page'],$segment))
		{
			$data = array(
					'page_title'=>'Manage Ebooks',
		            'page_entries' => $query,
			        'categories'=> $categories
		            );
		}
		
		$this->parser->parse('manage_view', $data);
	}
    
    function create()
    {
        $this->is_logged_in();
        $this->load->model('Manage_model');
		
		
		if ($this->input->post('upload')) {
			$this->Manage_model->do_upload();
		}
		
		$data['images'] = $this->Manage_model->get_images();
        
        if($query = $this->Manage_model->get_categories())
		{
            $data = array(
            		'page_title'=>'New book',
            		'title'=>'',
            		'author'=>'',
            		'download_url'=>'',
            		'contents'=>'',
            		'categories'=>$query,
            		'categories1'=>$query
            	);
        }
        
        $this->parser->parse('new',$data);
        
        if ($this->input->post('save')) {
			$data = array('title' => $this->input->post('title'),
	            			'author' => $this->input->post('author'),
	            			'download_url' => $this->input->post('download_url'),
	            			'contents' => $this->input->post('contents'),
                            'category_id' => $this->input->post('category'));
			
			$this->Manage_model->add_record($data);
		}
    }
    
    function edit($id)
    {
        $this->is_logged_in();
        $this->load->model('Manage_model');
        
        if ($this->input->post('upload')) {
			$this->Manage_model->do_upload();
		}
		
		$data['images'] = $this->Manage_model->get_images();
       
        $records = $this->Manage_model->get_record_by_id($id);
        $data = array(
        		'page_title'=>'Edit book',
	        	'page_entries'=> $records,
	        	'categories' => $this->Manage_model->get_categories(),
	        	'categories1' => $this->Manage_model->get_categories(),
        	);
        $this->parser->parse('edit',$data);
        
    }
    
    function update(){
        $this->is_logged_in();
        $id = $this->input->post('id');
        $data = array('title' => $this->input->post('title'),
            			'author' => $this->input->post('author'),
            			'download_url' => $this->input->post('download_url'),
            			'contents' => $this->input->post('contents'),
                            'category_id' => $this->input->post('category'));
        $this->load->model('Manage_model');
        
        $this->Manage_model->update_record($id,$data);
        $this->index();
    }
    
    function delete($id)
    {
        $this->is_logged_in();
        $this->load->model('Manage_model');
        
        $this->Manage_model->delete_record($id);
        redirect('manage');
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
