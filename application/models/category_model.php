<?php
class Category_model extends Model {
	
	function add_category($data) 
	{
		$this->db->insert('category', $data);
	}
	
	function get_categories()
	{  
        $query = $this->db->get('category');
		return $query->result();
	}
    
    function get_category_by_id($id)
    {
        $query = $this->db->get_where('category', array('categoryid' => $id));
        return $query->result();    
    }
    
    function delete_category($id){
        $this->db->delete('category', array('categoryid' => $id)); 
    }
    
    function update_category($id,$data)
    {
        $this->db->where('categoryid', $id);
        $this->db->update('category', $data);
    }
    
 }



