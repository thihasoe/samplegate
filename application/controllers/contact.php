<?php
	/**
	* 
	*/
	class Contact extends Controller
	{
		function index(){
			
			$this->load->model('Manage_model');
			$categories = $this->Manage_model->get_categories();
			
			{    
				$data = array(
						'page_title'=>'Contact us!',
						'title'=> 'Contact to samplegate!',
			            'about_contents' => 'Pleasse submit the below data , then I will recieve and then will contact you soon.',
				        'categories'=> $categories,
				        'message'=>''
			            );
			}
			
			$this->parser->parse('contact_view', $data);
		}
	}
	
?>