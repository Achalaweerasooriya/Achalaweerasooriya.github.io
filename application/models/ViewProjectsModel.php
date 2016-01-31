<?php

class ViewProjectsModel extends CI_Model{
    var $username;
    var $designation;
    
    function index()
    {
        $this->load->controller('DashBoardController');
        $this->username=$this->DashBoardController->username;
        $this->designation=$this->DashBoardController->designation;
        
        
    }
    
    function ManagerViewProjects($status)
    {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('status',$status);
        $query=$this->db->get();
        return $query;
    }
    
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
        $this->db->where('status',$status);
        $query=$this->db->get();
        
        return $query;
    }
}

