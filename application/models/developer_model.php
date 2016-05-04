<?php 

class developer_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	
	public function getDeveloperTasks($user){	//retrive tasks of developers
		
		$this->db->select('*');
		$this->db->from('developer');
		$this->db->where('name',$user);
		$query = $this->db->get();
		return $query;
	}
	
	public function getName($username){		//retrive usernames of developers
		
		$this->db->select('full_name');
		$this->db->from('user');
		$this->db->where('user_name',$username);
		$query=$this->db->get();
		$result = $query->row();
		return $result->full_name;
		}
	
	public function checkoldpwd($mdpass,$usernm){		//fuction to check old password and new password
		
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_name',$usernm);
        $this->db->where('pwd',$mdpass);
        $query = $this->db->get();
        if($query->num_rows()==1){
			return true;
		}
		else{
			return false;
		}
		
	}
	
	public function changePwd($data,$usernm){		//save new password in database
		
		$this->db->where('user_name', $usernm);
        $this->db->update('user', $data); 
		
	}
	
public function saveUserDetails($usernm,$data){		//save new user details in database
	
	
		$this->db->where('user_name', $usernm);
        $this->db->update('user', $data); 
		
	
	
	}
	
}