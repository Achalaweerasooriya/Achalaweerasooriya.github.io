<?php

class CreateProject extends CI_Controller{
     public function __construct()
       {
            parent::__construct();
       }

    public function index(){
            $data['message']="";
            $this->load->helper('form');
            $this->load->view('admin/create_project_view',$data);
    }
           
    /////////////////////////// Add Project /////////////////////////////////
        public function add_project()
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name', 'Project Name', 'trim|required|alpha_numeric|is_unique[project.name]');
            $this->form_validation->set_rules('start_date','Start Date', 'trim|required');
            $this->form_validation->set_rules('deadline','Deadline', 'trim|required');
            $this->form_validation->set_rules('description','Description', 'trim|required|alpha');
            $this->form_validation->set_rules('language', 'Language', 'required');
            $this->form_validation->set_rules('framework', 'Framework', 'required|callback_check_if_framework_selected');
            $this->form_validation->set_rules('client','Client', 'trim|required');
            
            if ($this->form_validation->run() == FALSE)
            {
               // print_r("qqqqqq");
                $data['message']="";
                //$this->load->helper('form');
                //$this->load->controller('DashBoardController');
                //$this->username=$this->DashBoardController->username;
                //$this->DashBoardController->index($name);
                //$this->load->file('DashBoardController');
                //$this->DashBoardController->index($name);
                //$this->createproject->DashBoardMainView($name);
                $this->load->view("create_project_view",$data);
                
              
            }
            else
            {
                $this->load->model('Create_project_model');
                if($this->Create_project_model->add_project())
                {
                    print_r("qqqqqq");
                    $data['message']='Project has been added successfully';
                    $this->load->helper('form');
                    $this->load->view('admin/create_project_view',$data);
                    
                }
                else
                {
                    $this->load->helper('form');
                    $this->load->view('admin/create_project_view',$data);
                }
            }
        }
    
    /////////////////////////// Callback function for framework selection /////////////////////////////////        
        public function check_if_framework_selected($str)
        {
            $this->load->model('Create_project_model');
    
            if($this->Create_project_model->check_if_framework_selected($str)==false){
            return false;
            }
            else{
                return true;
            }
        }
        
        function DashBoardMainView($name)
    {
        $this->load->model('MembershipModel');
        $des=$this->MembershipModel->getdes($name);
        $data['username']=$name;
        $this->username=$name;
        $this->designation=$des;
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
        $this->load->view('DashboardBody');
    }
}       
?>            
    


