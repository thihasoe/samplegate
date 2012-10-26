<?php
	/**
	* 
	*/
	class About extends Controller
	{
		
		function index(){
			
			$this->load->model('Manage_model');
			$categories = $this->Manage_model->get_categories();
			
			{    
				$data = array(
						'page_title'=>'About',
						'title'=> 'About samplegate!',
			            'about_contents' => 'I tend this site will help to someone who want to get a right reference Book.',
				        'categories'=> $categories
			            );
			}
			
			$this->parser->parse('about_view', $data);
		}
	}
	

?>