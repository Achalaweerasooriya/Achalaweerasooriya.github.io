<?php

class DashBoardController extends CI_Controller
{
    //class variables to store user name and designation
    var $username;
    var $designation;
    
    //Load dashboard of the user
    function index($name)
    {
        $name=$this->session->userdata('username');
       $this->load->view('DashboardBody');
        $this->DashBoardMainView($name);
    }
    
    //view the dynamic part of the dashboard
    function DashBoardMainView($name)
    {
        $this->load->model('MembershipModel');
        $des=$this->MembershipModel->getdes($name);
        $data['username']=$name;
        $this->username=$name;
        $this->designation=$des;
        $this->load->view('DashBoardHeader',$data);
        
        //load view as per the designation
        if($des=='ceo')
        {
            $this->load->view('ManagerNavigation');
        }
        else if ($des=='pm')
        {
           $this->load->view('PMNavigation');
        }
         else if($des=='scrum')
        {
           $this->load->view('ScrumMasterNavigation');  
        }
        else 
        {
           $this->load->view('DeveloperNavigation'); 
        }       
    }
    
    
    //Redirect to pages
    function redirectToPages($page)
    {
        $this->username=$this->session->userdata('username');
        $this->DashBoardMainView($this->username);
        if($page=='home')
        {
        $this->load->view('DashBoardBody');
        }
    }
    
    
    //----Managers functions
    
    //1. View Projects
    function ManagerProjects()
    {
        $this->load->model('ViewProjectsModel');
        $new=$this->ViewProjectsModel->ManagerViewProjects('new');
        $ongoing=$this->ViewProjectsModel->ManagerViewProjects('inprogress');
        $completed=$this->ViewProjectsModel->ManagerViewProjects('completed');
        $data=array('new'=>$new, 'inprogress'=> $ongoing,'completed'=>$completed);
        $this->username=$this->session->userdata('username');
        $this->DashBoardMainView($this->username);
        $this->load->view('ManagerViewProjectDatabase',$data);
    }
    

    
    //----PM functions
    
    //1. View Projects
    function PMViewProjects()
    {
        $this->load->model('ViewProjectsModel');
        $this->username=$this->session->userdata('username');
        $data['projectsqueue']=$this->ViewProjectsModel->PMViewProjects();
        $this->DashBoardMainView($this->username);
        $this->load->view('PMViewProjects',$data);
    }
    
    //----Scrum Master functions
    
    //1.View Projects
    function ScrumMasterViewProjects($status)
    {
        $this->load->model('ViewProjectsModel');
        $this->username=$this->session->userdata('username');
        $data['projectsqueue']=$this->ViewProjectsModel->ScrumMasterViewProjects($status);
        $this->DashBoardMainView($this->username);
        $this->load->view('ScrumMasterViewProjects',$data);
    }
    
        function ViewTask()
        {
        $this->load->model('User_Model');
        $new=$this->User_Model->get_all('new');
        
        $data=array('new'=>$new);
        $this->username=$this->session->userdata('username');
        $this->DashBoardMainView($this->username);
        $this->load->view('Task',$data);
        }
        function ViewUser()
        {
        $this->load->model('User_Model');
        $this->username=$this->session->userdata('username');
        $data['users']=$this->User_model->get_all();
        $this->DashBoardMainView($this->username);
        $this->load->view('users', $this->data);
        }
    
}