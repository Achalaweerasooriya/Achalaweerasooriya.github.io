 <?php

class ViewProjectsModel extends CI_Model
{
    //Class variables for the username and designation
    var $username;
    var $designation;
    
    //set values for username and designation
    function index()
    {
        $this->load->controller('DashBoardController');
        $this->username=$this->DashBoardController->username;
        $this->designation=$this->DashBoardController->designation;   
    }
    
    //Managers project view funtion returning relevent tables for the status argument
    function ManagerViewProjects($status)
    {
        $this->db->select('*');
        $this->db->from('project');
        $query=$this->db->get();
        return $query;
    }
    
    
    //Project managers view project function
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
    
    
    //Scrum masters view project function returns table for the status in the argumnet
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
        $query=$this->db->get();
        
        return $query;
    }
}

