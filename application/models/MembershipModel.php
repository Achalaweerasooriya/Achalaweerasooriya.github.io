<?php

class MembershipModel extends CI_Model
{
    //Validate user
    function validate($user,$pass)
    {
        $passw=md5($pass);
        $this -> db -> select('user_name, pwd');
        $this -> db -> from('user');
        $this->db->where('user_name',$user);
        $this->db->where('pwd',$passw);
        $query=$this->db->get();

        //Check for query number
        if($query->num_rows()==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    //Create a new member on the database
    function create_member()
    {
        $username=$this->input->post('user_name');
        
        //passing a array to the database
        $new_member=array(
            'full_name' => $this->input->post('full_name'),
            'email' => $this->input->post('email'),
            'company' => $this->input->post('company'),
            'user_name' => $this->input->post('user_name'),
            'pwd' => md5($this->input->post('password')),
            'designation' => $this->input->post('des')
        );
        
        $insert=$this->db->insert('user',$new_member);
        return $insert;
    }
    
    //Model of the call back function for mail exists
    function check_mail_Exists($email)
    {
        $this->db->where('email',$email);
        $result=$this->db->get('user');
        
        //check for return query
        if($result->num_rows>0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    
     //Model of the call back function for user exists
    function check_user_Exists($username)
    {
        $this->db->where('user_name',$username);
        $result=$this->db->get('user');
        
        //Check for return query
        if($result->num_rows>0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    
    
    //Get the designation of a perticular user from the database
    function getdes($user)
    {
        $this->db->select('designation');
        $this->db->where('user_name',$user);
        $this->db->from('user');
        $query = $this->db->get();
        $q1=$query->row();
        return $q1->designation;
    }
	
	

	
}
