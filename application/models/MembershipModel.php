<?php

class MembershipModel extends CI_Model{
    function validate($user,$pass){
        $passw=md5($pass);
        $this -> db -> select('user_name, pwd');
        $this -> db -> from('user');
        $this->db->where('user_name',$user);
        $this->db->where('pwd',$passw);
        $query=$this->db->get();

        if($query->num_rows()==1){
            return true;
        }else{
            return false;
        }
    }
    
    function create_member(){
        $username=$this->input->post('user_name');
        
        $new_member=array(
            'full_name' => $this->input->post('full_name'),
            'e-mail' => $this->input->post('email'),
            'company' => $this->input->post('company'),
            'user_name' => $this->input->post('user_name'),
            'pwd' => md5($this->input->post('password')),
            'designation' => $this->input->post('des')
        );
        
        $insert=$this->db->insert('user',$new_member);
        return $insert;
    }
    
    function check_mail_Exists($email){
        $this->db->where('e-mail',$email);
        $result=$this->db->get('user');
        
        if($result->num_rows>0){
            return false;
        }else{
            return true;
        }
    }
    
        function check_user_Exists($username){
        $this->db->where('user_name',$username);
        $result=$this->db->get('user');
        
        if($result->num_rows>0){
            return false;
        }else{
            return true;
        }
    }
    
    function getdes($user){
        $this->db->select('designation');
        $this->db->where('user_name',$user);
        $this->db->from('user');
        $query = $this->db->get();
        $q1=$query->row();
        return $q1->designation;
    }
}
