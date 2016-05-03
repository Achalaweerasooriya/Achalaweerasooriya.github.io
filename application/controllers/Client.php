<?php

    class Client extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ClientModel');
        }
        
        public function index()
        {
            $client = $this->session->username;
            $this->data['projects'] = $this->ClientModel->get_projects($client);
            $this->load->view('client_view',$this->data);
        }
        
    /*
    * Function for View Details of a specicfic Project
    * @param       integer  $project_id  Input integer  
    */
        public function view_project($project_id)
        {
            //get project details
            $this->load->model('ProjectModel');
            $pro = $this->ProjectModel->get_specific_project($project_id);
            $projectmanager = $this->ProjectModel->get_project_manager($pro['project_id']);
            
            //get project manger's user name
            $project_manager = $this->ClientModel->get_project_manager($projectmanager['user_id']);
            
            //get team details
            $this->load->model('CreateTeamModel');
            $member = $this->CreateTeamModel->view_team_details($pro['team_id']);
            $team_member = $this->CreateTeamModel->view_team_members($pro['team_id']);
            $scrum_master = $this->ClientModel->get_scrum_master($member['scrum_master']);
  
            $this->load->view('client_project_view',  compact("pro","project_manager","scrum_master","member","team_member"));
        }
    }
