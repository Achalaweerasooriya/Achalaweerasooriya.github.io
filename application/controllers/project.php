<?php 

    class Project extends CI_Controller
    {
        public $project_id;
        public $pro;
        public $data;
        public $start;
        public $deadline;
        public $des;        
        public $name,$start_date,$status,$description,$language,$framework,$client,$project_manager,$projectmanager,$team_id,$project_progress;
        public $stat;
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ProjectModel');
            $this->load->library('form_validation');
        }

        public function index()
        {
            $this->data['projects'] = $this->ProjectModel->get_projects();            
            $this->load->view('project_view',$this->data);            
            $this->load->helper('form');          
        }

    /*
    * Callback function for Edit Project details and load specific project's details to form
    * @param       integer  $project_id    Input integer
    */
               
        public function edit_project($project_id) 
        {
            $pro = $this->ProjectModel->get_specific_project($project_id);
            $this->data['pro'] = $pro;
         
            //if new project can edit following fields
            if(strcmp($pro['status'],'New')==0){
                
                $name = array(
                    'name'  	=> 'name',
                    'id'    	=> 'name',
                    'type'  	=> 'text',
                    'style'	=> 'width:300px;',
                    'value' 	=> $this->form_validation->set_value('name', $pro['name'])
                );

                $start_date = array(
                    'name'  	=> 'start_date',
                    'id'    	=> 'start_date',
                    'type'  	=> 'date',
                    'style'	=> 'width:300px;',
                    'value' 	=> $this->form_validation->set_value('start_date', $pro['start_date'])
                );
                
                $client = array(
                    'name'  	=> 'client',
                    'id'    	=> 'client',
                    'type'  	=> 'text',
                    'style'	=> 'width:300px;',
                    'value' 	=> $this->form_validation->set_value('client', $pro['client'])
                );
            }else{
                //if the project is in progress project can not edit following fields
                
                $name = array(
		'name'  	=> 'name',
		'id'    	=> 'name',
		'type'  	=> 'text',
		'style'		=> 'width:300px;background-color:#72A4D2;',
                'readonly'      =>'readonly',
		'value' 	=> $this->form_validation->set_value('name', $pro['name'])
                );
                
                $start_date = array(
                    'name'  	=> 'start_date',
                    'id'    	=> 'start_date',
                    'type'  	=> 'date',
                    'style'	=> 'width:300px;background-color:#72A4D2;',
                    'readonly'  =>'readonly',
                    'value' 	=> $this->form_validation->set_value('start_date', $pro['start_date'])
                );
                
                $client = array(
		'name'  	=> 'client',
		'id'    	=> 'client',
		'type'  	=> 'text',
		'style'		=> 'width:300px;background-color:#72A4D2;',
                'readonly'      =>'readonly',
		'value' 	=> $this->form_validation->set_value('client', $pro['client'])
                );
            
            }
            
            $deadline = array(
		'name'  	=> 'deadline',
		'id'    	=> 'deadline',
		'type'  	=> 'date',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('deadline', $pro['deadline'])
            );
            
            $status = array(
		'name'  	=> 'status',
		'id'    	=> 'status',
		'type'  	=> 'select',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('status', $pro['status'])
            );
            
            $description = array(
		'name'  	=> 'description',
		'id'    	=> 'description',
		'type'  	=> 'text',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('description', $pro['description'])
            );
            
            $language = array(
		'name'  	=> 'language',
		'id'    	=> 'language',
		'type'  	=> 'select',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('language', $pro['language'])
            );
            
            $framework = array(
		'name'  	=> 'framework',
		'id'    	=> 'framework',
		'type'  	=> 'select',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('framework', $pro['framework'])
            );
            
            $team_id = array(
		'name'  	=> 'team_id',
		'id'    	=> 'team_id',
		'type'  	=> 'text',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('team_id', $pro['team_id'])
            );
            
            $project_progress = array(
		'name'  	=> 'project_progress',
		'id'    	=> 'project_progress',
		'type'  	=> 'radio',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('team_id', $pro['project_progress'])
            );
            
            //validate form input
            
            $this->form_validation->set_rules('name', 'Project Name', 'trim|required|alpha_numeric');
            $this->form_validation->set_rules('start_date','Start Date', 'trim|required|callback_check_if_start_date_is_correct['.$pro['start_date'].']');
            $this->form_validation->set_rules('deadline','Deadline', 'trim|required|callback_check_if_deadline_is_before_start_date');
            $this->form_validation->set_rules('status','Status', 'trim|required');
            $this->form_validation->set_rules('description','Description', 'trim|required|alpha');
            $this->form_validation->set_rules('language', 'Language', 'required');
            $this->form_validation->set_rules('framework', 'Framework', 'required');
            $this->form_validation->set_rules('client','Client', 'trim|required|alpha');
            
            $stat = $this->ProjectModel->get_status($project_id);
            $this->load->model('MembershipModel');
            $des=$this->MembershipModel->getdes($this->session->userdata('username'));
            
            //if the project is in progress and user is ceo needs to check whether a project manager has been appointed
            if(strcmp($stat['status'],'InProgress')==0 && $des=="ceo"){
                
                $this->form_validation->set_rules('project_manager', 'project_manager', 'required|callback_check_if_project_manager_selected');
            }
            if (isset($_POST) && !empty($_POST)) {		
            
                $data = array(
                    'name'        => $this->input->post('name'),
                    'start_date'  => date('Y-m-d', strtotime($this->input->post('start_date'))),
                    'deadline'    => date('Y-m-d', strtotime($this->input->post('deadline'))),
                    'status'      => $this->input->post('status'),
                    'description' => $this->input->post('description'),
                    'language'    => $this->input->post('language'),
                    'framework'   => $this->input->post('framework'),
                    'client'      => $this->input->post('client'),
                    'project_progress'      => $this->input->post('project_progress'),
                    
		);
		
                if ($this->form_validation->run() == false) {
                    echo '<script>alert("Project validation failed!");</script>';
                }else{
                    
                    if ($this->ProjectModel->update_project($project_id, $data)) {
                        echo '<script>alert("Project has been updated successfully!");</script>';
                    } else {
                        echo '<script>alert("Project updation failed!");</script>';
                    }
                }
            }
            
            $this->load->model('MembershipModel');    
            $des=$this->MembershipModel->getdes($this->session->userdata('username'));          
            
            //load project managers and select appointed person if already appointed
            if($des=="ceo"){
                $projectmanager = $this->ProjectModel->load_project_manager();
                $project_manager = $this->ProjectModel->get_project_manager($pro['project_id']);
                $this->data['$projectmanager'] = array(
                    'name'  	=> 'project_manager',
                    'id'    	=> 'project_manager',
                    'type'  	=> 'select',
                    'style'     => 'width:300px;',
                    'value' 	=> $this->form_validation->set_value('project_manager', $project_manager['user_id'])
                );

                $this->load->view('edit_projects_manager', compact("pro","name","start_date","deadline","status","description","language","framework","client","project_manager","projectmanager","team_id","project_progress"));           
            }else{
                $this->load->view('edit_projects', compact("pro","name","start_date","deadline","status","description","language","framework","client","team_id","project_progress"));
            }
            
        }
        
    /*
    * Callback function for checking earlier dates in start date
    * @param       string  $str, string $date     Input string    *   
    * @return      bool  
    */    
        
        public function check_if_start_date_is_correct($str,$date)
        {
            $start = date('Y-m-d', strtotime($this->input->post('start_date')));
            if ($start < date('Y-m-d', strtotime($date))) {
                $this->form_validation->set_message('check_if_start_date_is_correct', 'Date is an earlier date.Please Re-select!!');
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
            $start = date('Y-m-d', strtotime($this->input->post('start_date')));
            $deadline = date('Y-m-d', strtotime($this->input->post('deadline')));
            
            if ($start > $deadline) {
                $this->form_validation->set_message('check_if_deadline_is_before_start_date', 'Deadline is prior to start date. Please Reselect!!');
                return false;
            } else {
                return true;
            }
        }
    
    /*
    * Callback function for checking whether a Project Manager is selected 
    * @param       string  $str    Input string 
    * @return      bool
    */
                
        public function check_if_project_manager_selected($str)
        {
            if ($this->ProjectModel->check_if_project_manager_selected($str) == false) {
                return false;
            } else {
                return true;
            }
        }
        
    /*
    * Function for Remove a Project 
    * @param       integer  $project_id    Input integer
    */    
        
        
        public function remove_project($project_id)
        {
            if ($this->ProjectModel->remove_project($project_id)) {
                
                echo '<script>alert("Project has been deleted successfully!");</script>';
                $this->data['projects'] = $this->ProjectModel->get_projects();
                $this->load->view('project_view',$this->data);
            } else {
                echo '<script>alert("Project deletion Failed!");</script>';
                $this->data['projects'] = $this->ProjectModel->get_projects();
                $this->load->view('project_view',$this->data);
            }
        }  
        
        
    }
