<?php

class DashBoardController extends CI_Controller{
    function index($name)
    {
        $this->DashBoardMainView($name);
        $this->load->view('DashboardBody');
    }
    
    function DashBoardMainView($name)
    {
        $this->load->model('MembershipModel');
        $des=$this->MembershipModel->getdes($name);
        $data['username']=$name;
        
        $this->load->view('DashBoardHeader',$data);
        if($des=='ceo'){
            $this->load->view('ManagerNavigation');
        }else if ($des=='pm'){
           $this->load->view('PMNavigation');
        }
         else if($des=='scrum'){
           $this->load->view('ScrumMasterNavigation');  
         }
        else {
           $this->load->view('DeveloperNavigation'); 
        }
    }
    
    //Managers functions
    
    function ManagerProjects()
    {
        
    }
    
    
    //PM functions
    
}