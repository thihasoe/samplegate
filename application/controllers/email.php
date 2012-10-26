<?php
/**
* 
*/
class Email extends Controller
{
	
	function send()
	{
		$this->load->model('Manage_model');
				$categories = $this->Manage_model->get_categories();
		if($this->input->post('submit'))
		{
			$this->load->helper('email');
			if($this->input->post('name') == '' ){
				$data = array(
						'page_title'=>'Contact us!',
						'title'=> 'Contact to samplegate!',
			            'about_contents' => 'Pleasse submit the below data , then I will recieve and then will contact you soon.',
				        'categories'=> $categories,
				        'message'=>'The name field is required.'
			            );
				
				$this->parser->parse('contact_view', $data);
			}
			
			
			if (valid_email($this->input->post('email')))
			{
				$data = array(
						'page_title'=>'Contact us!',
						'title'=> 'Contact to samplegate!',
			            'about_contents' => 'Thank for submitting to me.Your request will be processed. Wait for my reply.',
				        'categories'=> $categories,
				        'message'=>''
			            );
				
				$this->parser->parse('contact_view', $data);
			}
			else
			{
				$data = array(
						'page_title'=>'Contact us!',
						'title'=> 'Contact to samplegate!',
			            'about_contents' => 'Pleasse submit the below data , then I will recieve and then will contact you soon.',
				        'categories'=> $categories,
				        'message'=>'The email is not valid.'
			            );
				
				$this->parser->parse('contact_view', $data);
			}
			
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to('brthiha@gmail.com');		
			$this->email->subject($this->input->post('name').' is contacting you. His mail address is '.$this->input->post('email'));		
			$this->email->message('Contacting us!');
		}
		
	}
}

