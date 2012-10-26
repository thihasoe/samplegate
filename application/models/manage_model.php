<?php
class Manage_model extends Model {
	
	var $gallery_path;
	var $gallery_path_url;
	
	function Manage_model() {
		parent::Model();
		
		$this->gallery_path = realpath(APPPATH . '../images');
		$this->gallery_path_url = base_url().'images/';
	}
	
	function do_upload() {
		
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 2000
		);
		
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();
		
		$config = array(
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path . '/thumbs',
			'maintain_ration' => true,
			'width' => 150,
			'height' => 100
		);
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
	}
	
	function get_images() 
	{
		
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'thumbs'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
			);
		}
		
		return $images;
	}
	
	function add_record($data) 
	{
		$this->db->insert('ebook', $data);
		return;
	}
	
	function get_all_records(){
		$query = $this->db->get('ebook');
		return $query->result();
	}
	
	function get_records($per_page,$segment)
	{  
		$this->db->order_by("id","desc");
        $query = $this->db->get('ebook', $per_page, $segment);
        
		return $query->result();
	}
    
    function get_record_by_id($id)
    {
        $query = $this->db->get_where('ebook', array('id' => $id));
        return $query->result();    
    }
    
    function delete_record($id){
        $this->db->delete('ebook', array('id' => $id)); 
    }
    
    function update_record($id,$data){
        $this->db->where('id', $id);
        $this->db->update('ebook', $data);
    }
    
    function get_categories()
    {
        $query = $this->db->get('category');
        return $query->result();
    }
    
    function get_by_category_id($id,$per_page,$segment)
    {
        $this->db->order_by("id","desc");
        $query = $this->db->get_where('ebook', array('category_id' => $id),$per_page,$segment);
        return $query->result();
    }
    
    function search_by_title_pagination($title,$per_page,$segment){
    	$this->db->like('title',$title);
		$query = $this->db->get('ebook',$per_page,$segment);    	
		return $query->result();
    }
    
    function search_by_title_actual($title){
    	$this->db->like('title',$title);
		$query = $this->db->get('ebook');    	
		return $query;
    }
    
    
}



