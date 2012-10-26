<?php
	/**
	* 
	*/
	class Feed extends Controller
	{
		
		function Feed()
		{
			parent::Controller();	
		}
		
		function index(){
			$this->load->library('parser');
			$this->load->model('Manage_model');
			$query = $this->Manage_model->get_all_records();
			
			$data = array(
					'page_entries'=> $query
					);
			$this->parser->parse('rss', $data);
		}
	}
	

?>