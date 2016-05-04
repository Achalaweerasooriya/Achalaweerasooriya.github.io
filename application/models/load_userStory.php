<?php 

class load_userStory extends CI_model{
	
	function __construct(){
		parent::__construct();
		
		
		$this->tableName = "content";
		$this->caption ="content";
		$this->controllerName="addstories";
		 $this->recordsPerPage = 25;
	
	
	
	
	$this->add = true;
    $this->update = true;
    $this->view = true;
    $this->printView = true;
    $this->delete = true;
    $this->allowQuickSearch = true;
	
	

	}
	
		
public function getContent() {		//retrive all the details about the developer
    $this->db->select( '*' );
    $this->db->from('developer');
    $query = $this->db->get();
    return  $query;
	
		}
		
		
public function showStory($data){	//retrive the user stories
	$this->db->select('*');
	$this->db->from('developer');
	$this->db->where('devid',$data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	
	
	
}
		
		
public function deleteRow($id){		//delete a selected userStroy
			
	$this->db->where('devid',$id);
	$this->db->delete('developer');
}
		
		
		
public function editUserStory($id){	//load user stroy details to edit

    $this->db->select( '*' );
    $this->db->from('developer');
	$this->db->where('devid',$id);
    $query = $this->db->get();
	$result = $query->result();
    return  $result;
		
		
}
	
	public function saveEdited($id,$save){	//save a new edited user stroy details
		
		$this->db->where('devid', $id);
		$this->db->update('developer', $save);
		
		
	}
		
		
public function getSelectedProject($selectedProject)  //get the details of the selected project
{
		$this->db->select('*');
		$this->db->from('developer');
		$this->db->where('project',$selectedProject);
		$query = $this->db->get();
		return $query;
	
	
	
}
		
		
}