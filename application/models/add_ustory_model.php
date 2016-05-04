<?php
class add_ustory_model extends CI_Model{
function __construct() {
parent::__construct();
}

public function addUserStory($data){	//add user story to database 

$this->db->insert('developer', $data);
}


public function get_developers(){		//retrive the list of developers
$query = $this -> db -> query('Select * FROM user WHERE designation = "dev" ');

return $query -> result();

}

public function getProjects(){			//retrive the list of assigned projects
	$query= $this->db->query('Select name from project');
	return $query->result();
	
}




}
?>