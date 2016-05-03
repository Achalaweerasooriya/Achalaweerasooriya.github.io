<?php

    class CreateTeam extends CI_Controller
    {
        public $result;
        public $team_id;
        public $user_id;
        public $tm;
        public $data;
        public  $str;


        public function __construct()
        {
            parent::__construct();
            $this->load->model('CreateTeamModel');
            $this->load->library('form_validation');
        }

        public function index()
        {
            $this->data['teams'] = $this->CreateTeamModel->get_teams();
            
            $this->load->helper('form');
            $this->load->view('create_team_view',$this->data);
        }
    
    /*
    * Function for Create New Team
    */    
      
        public function create_team()
        {
            $this->form_validation->set_rules('name', 'Team Name', 'trim|required|alpha_numeric|is_unique[team.name]');
                            
            if ($this->form_validation->run() == false) {
                
                $this->data['teams'] = $this->CreateTeamModel->get_teams();
                $this->load->view('create_team_view',$this->data);
            } else {
                $this->load->model('CreateTeamModel');
                if ($result = $this->CreateTeamModel->create_team()) {
                    
                    echo '<script>alert("Team has been created successfully!");</script>';
                    $this->data['teams'] = $this->CreateTeamModel->get_teams();
                    $this->load->view('create_team_view',$this->data);
                } else {
                    echo '<script>alert("Team creation failed!");</script>';
                    $this->data['teams'] = $this->CreateTeamModel->get_teams();
                    $this->load->view('create_team_view',$this->data);
                }
            }
        }
    
    /*
    * Function for View Team Details 
    */    
          
        public function view_team($team_id)
        {
            $tm = $this->CreateTeamModel->view_team_details($team_id);
            $this->data['tm'] = $tm;
            
            $name = array(
		'name'  	=> 'name',
		'id'    	=> 'name',
		'type'  	=> 'text',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('name', $tm['name'])
            );
          
            $project_id = $this->CreateTeamModel->get_project($team_id);
            
            $this->data['project'] = array(
                'name'  	=> 'project',
		'id'    	=> 'project',
		'type'  	=> 'select',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('project', $project_id['project_id'])
            ); 
            
            $member = $this->CreateTeamModel->view_team_details($team_id);
            $team_member = $this->CreateTeamModel->view_team_members($team_id);
            $team= $this->CreateTeamModel->load_team_members($team_id);
            $developer= $this->CreateTeamModel->get_developers();
            $project = $this->CreateTeamModel->load_projects($team_id);
            $this->load->view('add_members_view',compact("member","team_member","team","developer","project","project_id","name"));
        }   
    
    /*
    * Function for Getting Developers who has not been appointed for a team 
    */    
        public function get_developers()
        {
            $this->data['developer'] = $this->CreateTeamModel->get_developers();
            $this->load->view('add_member_view',$this->data);
        }
   
    /*
    * Function for Adding Member for a team 
    */
       
        public function add_member($team_id,$user_id){
            if ($this->CreateTeamModel->add_member($team_id,$user_id)) {
                echo '<script>alert("Team Member has been added successfully!");</script>';
                redirect(base_url().'team/view/'.$team_id);
            } else {
                echo '<script>alert("Team Member addition failed!");</script>';
                redirect(base_url().'team/view/'.$team_id);
            }
        }  
    
    /*
    * Function for Removing a Member from a team 
    */    
         
        public function remove_member($team_id,$user_id,$project_id)
        {
            if ($this->CreateTeamModel->remove_member($team_id,$user_id,$project_id)== 1) {

                echo '<script>alert("Team Member has been removed successfully!");</script>';
                redirect(base_url().'team/view/'.$team_id);
                
            } else {
                echo '<script>alert("Team Member removal failed!");</script>';
                redirect(base_url().'team/view/'.$team_id);
            }
        }
    
    /*
    * Function for Edit Team details
    * @param       integer  $team_id  Input integer
    */    
           
        public function edit_team($team_id) 
        {
            $tm = $this->CreateTeamModel->view_team_details($team_id);
            
            //validate form input
            
            $this->form_validation->set_rules('name', 'Team Name', 'trim|required|alpha_numeric');
            $this->form_validation->set_rules('scrum', 'scrum', 'required|callback_check_if_scrum_master_selected');
	    if (isset($_POST) && !empty($_POST)) {	
                
		$data = array(
                    'name'        => $this->input->post('name'),
                    'scrum_master'  => $this->input->post('scrum'),
                    
                );
                
                if ($this->form_validation->run() == false) {
                } else {
                    if ($this->CreateTeamModel->update_team($team_id, $data)) {
//                        if($this->input->post('project')!= 0){
                            if($this->CreateTeamModel->insert_team($team_id)) {
                            } 
//                        }
                        echo '<script>alert("Team has been updated successfully!");</script>';
                    }else{
                        echo '<script>alert("Team updation failed!");</script>';
                    }
                }
            
            $this->data['tm'] = $tm;

            $name = array(
		'name'  	=> 'name',
		'id'    	=> 'name',
		'type'  	=> 'text',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('name', $tm['name'])
            );
            $this->data['scrum_master'] = array(
                'name'  	=> 'scrum',
		'id'    	=> 'scrum',
		'type'  	=> 'select',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('scrum', $tm['scrum_master'])
            );
            $project_id = $this->CreateTeamModel->get_project($team_id);
            $this->data['project'] = array(
                'name'  	=> 'project',
		'id'    	=> 'project',
		'type'  	=> 'select',
		'style'		=> 'width:300px;',
		'value' 	=> $this->form_validation->set_value('project', $project_id['project_id'])
            );
            
            $member = $this->CreateTeamModel->view_team_details($team_id);
            $team_member = $this->CreateTeamModel->view_team_members($team_id);
            $team= $this->CreateTeamModel->load_team_members($team_id);
            $developer= $this->CreateTeamModel->get_developers();
            $project = $this->CreateTeamModel->load_projects($team_id);
            $this->load->view('add_members_view',compact("member","team_member","team","developer","project","project_id","name"));
            
        }
        
    }
    
    /*
    * Function for Remove a team
    * @param       integer  $team_id  Input integer
    */
         
        public function remove_team($team_id)
        {
            if ($this->CreateTeamModel->remove_team($team_id)) {
                echo '<script>alert("Team has been deleted successfully!");</script>';
                $this->data['teams'] = $this->CreateTeamModel->get_teams();
                $this->load->view('create_team_view',$this->data);
            } else {
                echo '<script>alert("Team deletion failed!");</script>';
                $this->data['teams'] = $this->CreateTeamModel->get_teams();
                $this->load->view('create_team_view',$this->data);
            }
        }
    
    /*
    * Callback function for checking whether a scrum master is selected
    * @return      bool
    */    
            
        public function check_if_scrum_master_selected($str)
        {
            $this->load->model('CreateTeamModel');
    
            if ($this->CreateTeamModel->check_if_scrum_master_selected($str)==false) {
                return false;
            } else {
                return true;
            }
        }

    }
    


