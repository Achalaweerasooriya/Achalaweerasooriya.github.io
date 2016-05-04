<?php

    class addstories extends CI_Controller{    
     public function __construct()
       {
            parent::__construct();
				$this->load->model('load_userStory');	
       }

		public function index(){
			
		$this->addU();
		$this->load->library('form_validation');
		
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
    }
		
		
		public function addU()   //add user stories 
		{
			$this->load->helper('form');
  			$this->load->model('add_ustory_model');		
     		$dev['developers']=$this->add_ustory_model->get_developers();
			$pro['projects']=$this->add_ustory_model->getProjects();
			$data=array(
							'userstory' => $this -> input ->post('userstory'),
							'datetocomplete' => $this -> input -> post('datecomplete'),
						     'name'=>$this->input->post('developer'),
							 'project'=>$this->input->post('projects'),
			);
			$prondata= $pro + $dev;
			$this->load->view('addUstory',$prondata); 
			
			if($this->input->post('submit') != '')
			{		
			$this->add_ustory_model->addUserStory($data);

			}
		}
		
		public function viewUStory() {   //function to view added user stories 
			
				$this->load->helper('form');
			
			$data = array();
			//$this->load->model('load_userStory');
			$data[ 'story' ] = $this->load_userStory->getContent();
			//$this->load->view('admin/ViewUserStories',$data);
			
			$this->load->view('ViewUserStories',$data);
			
			}
		
	public function deleteStory(){   //delete a user story
			 $this->username=$this->session->userdata('username');
        $this->DashBoardMainView($this->username);
		
			$id = $this->uri->segment(3);
			$this->load_userStory->deleteRow($id);
			$this->viewUStory();
			
		}
		
		public function redirect(){
			
			$this->load->view('addUstory');
		}
		
		public function editStory() {  //function to edit a added user story
			//getting data
			 $this->username=$this->session->userdata('username');
        $this->DashBoardMainView($this->username);
			
			$this->load->helper('form');
	        $id = $this->uri->segment(3); 		
			$data= array();
			$this->load->model('add_ustory_model');	
			$dev['developers']=$this->add_ustory_model->get_developers();
			$data['story'] = $this->load_userStory->editUserStory($id);
			
			$details = $data + $dev; 
			
			$this->load->view('editUStory',$details);
			
			
		}
		public function saveEdit() {  //function to save a edited user story
			
			$this->load->helper('form');
			
			$id = $this->uri->segment(3); 
			
			$save=array(
							'userstory' => $this->input->post('userstoryarea'),
							'datetocomplete' => $this-> input->post('datecomplete'),
						    'name'=> $this->input->post('developer')
			);
           
			$this->load_userStory->saveEdited($id,$save);
			$this->viewUStory();


		}
		
		public function userSettings(){
			
			$this->load->view("UserSettings");
			
		}
					
		public function changepwd(){  //function to change password 
			$this->load->helper('form');
			$this->load->view("changepwd");
			$this->load_userStory->changePassword($oldpwd,$newpwd);
			
			}
		
	}