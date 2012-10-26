<?php

class Membership_model extends Model {

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('member');
		
		if($query->num_rows == 1)
		{
			return true;
		}
		
	}
	
	function create_member()
	{
		
		$new_member_insert_data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'email' => $this->input->post('email'),						
		);
		
		$insert = $this->db->insert('member', $new_member_insert_data);
		return $insert;
	}
    
	function update_member($id){
		$update_member = array(
				'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
						'email' => $this->input->post('email')						
				);
		$this->db->where('id',$id);				
		$this->db->update('member',$update_member);
	}
	
    function get_members()
    {
        $query = $this->db->get('member');
        return $query->result();
            
    }
    
    function get_member_by_id($id)
    {
        $query = $this->db->get_where('member', array('id' => $id));
        return $query->result();
    }
    
    function delete_member($id)
    {
        $this->db->delete('member',array('id' => $id));
    }
}