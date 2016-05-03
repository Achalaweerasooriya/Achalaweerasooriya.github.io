<<<<<<< HEAD
<?php

class ViewProjectsModel extends CI_Model{
    var $username;
    var $designation;
    
=======
 <?php

class ViewProjectsModel extends CI_Model
{
    //Class variables for the username and designation
    var $username;
    var $designation;
    
    //set values for username and designation
>>>>>>> 58b73cf64c0ba1ef7e6939291a9fbc4545cd09d3
    function index()
    {
        $this->load->controller('DashBoardController');
        $this->username=$this->DashBoardController->username;
<<<<<<< HEAD
        $this->designation=$this->DashBoardController->designation;
        
        
    }
    
=======
        $this->designation=$this->DashBoardController->designation;   
    }
    
    //Managers project view funtion returning relevent tables for the status argument
>>>>>>> 58b73cf64c0ba1ef7e6939291a9fbc4545cd09d3
    function ManagerViewProjects($status)
    {
        $this->db->select('*');
        $this->db->from('project');
<<<<<<< HEAD
        $this->db->where('status',$status);
=======
>>>>>>> 58b73cf64c0ba1ef7e6939291a9fbc4545cd09d3
        $query=$this->db->get();
        return $query;
    }
    
<<<<<<< HEAD
=======
    
    //Project managers view project function
>>>>>>> 58b73cf64c0ba1ef7e6939291a9fbc4545cd09d3
    function PMViewProjects()
    {
        $this->db->select('project_id');
        $this->db->from('projectmanager');
        $this->db->where('user_name',$this->session->username);
        $subQ=$this->db->get()->row()->project_id;
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('project_id',$subQ);
        $query=$this->db->get();
        return $query;
    }
    
<<<<<<< HEAD
=======
    
    //Scrum masters view project function returns table for the status in the argumnet
>>>>>>> 58b73cf64c0ba1ef7e6939291a9fbc4545cd09d3
    function ScrumMasterViewProjects($status)
    {
        $this->username=$this->session->username;
        $this->db->select('team_id');
        $this->db->from('user');
        $this->db->where('user_name',$this->username);
        $teamid=$this->db->get()->row()->team_id;
        
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('team_id',$teamid);
<<<<<<< HEAD
        $this->db->where('status',$status);
=======
>>>>>>> 58b73cf64c0ba1ef7e6939291a9fbc4545cd09d3
        $query=$this->db->get();
        
        return $query;
    }
}

