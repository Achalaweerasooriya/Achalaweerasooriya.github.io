<?php

    class CreateProject extends CI_Controller
    {
        public $str;
        var $username;
        
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load->helper('form');
            $this->load->model('MembershipModel');
            $des=$this->MembershipModel->getdes($this->session->userdata('username'));
            
            if($des=="ceo"){
                $this->load->model('CreateProjectModel');
                $project_manager = $this->CreateProjectModel->load_project_manager();
                $this->load->view('create_project_view_manager',compact("project_manager"));           
            }else{
                $this->load->view('create_project_view'); 
            }
        }
        
        /*
        * Function for Adding new project 
        */       
     
        public function add_project()
                
        {
            $this->load->library('form_validation');
            
            //validate form input
            
            $this->form_validation->set_rules('name', 'Project Name', 'trim|required|alpha_numeric|is_unique[project.name]');
            $this->form_validation->set_rules('start_date','Start Date', 'trim|required|callback_check_if_start_date_is_correct');
            $this->form_validation->set_rules('deadline','Deadline', 'trim|required|callback_check_if_deadline_is_correct|callback_check_if_deadline_is_before_start_date');
            $this->form_validation->set_rules('description','Description', 'trim|required|alpha');
            $this->form_validation->set_rules('language', 'Language', 'required|callback_check_if_language_selected');
            $this->form_validation->set_rules('framework', 'Framework', 'required|callback_check_if_framework_selected');
            $this->form_validation->set_rules('client','Client', 'trim|required|alpha');            
            $this->form_validation->set_rules('project_manager', 'Project_manager');
            
            if ($this->form_validation->run() == false) {
                
                $this->index();
                
            } else {
                
                $this->load->model('CreateProjectModel');
                if ($this->CreateProjectModel->add_project()) {
                    
                    echo '<script>alert("Project has been added successfully!");</script>';
                    $this->index();
                } else {
                    
                    echo '<script>alert("Project creation Failed!");</script>';                    
                    $this->index();
                    
                }
            }
        }
    
    /*
    * Callback function for checking earlier dates in start date and deadline fields
    * @return      bool  
    */
    
    // start date //    
        public function check_if_start_date_is_correct()
        {
            $this->load->model('CreateProjectModel');
    
            if ($this->CreateProjectModel->check_if_start_date_is_correct() == false) {
                return false;
            } else {
                return true;
            }
        }
        
    // deadline //    
        public function check_if_deadline_is_correct()
        {
            $this->load->model('CreateProjectModel');
    
            if ($this->CreateProjectModel->check_if_deadline_is_correct() == false) {
                return false;
            } else {
                return true;
            }
        }
    
    /*
    * Callback function for checking deadline field whether it is prior to start date
    * @return      bool
    */
    
        public function check_if_deadline_is_before_start_date()
        {
            $this->load->model('CreateProjectModel');
    
            if ($this->CreateProjectModel->check_if_deadline_is_before_start_date() == false) {
                return false;
            } else {
                return true;
            }
        }
    
    /*
    * Callback function for checking whether a language is selected 
    * @param       string  $str    Input string 
    * @return      bool
    */       
        public function check_if_language_selected($str)
        {
            $this->load->model('CreateProjectModel');
    
            if ($this->CreateProjectModel->check_if_language_selected($str) == false) {
                return false;
            } else {
                return true;
            }
        }
        
    /*
    * Callback function for checking whether a framework is selected 
    * @param       string  $str    Input string 
    * @return      bool
    */       
        public function check_if_framework_selected($str)
        {
            $this->load->model('CreateProjectModel');
    
            if ($this->CreateProjectModel->check_if_framework_selected($str) == false) {
                return false;
            } else {
                return true;
            }
        }
        
    }       
           
    


