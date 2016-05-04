<?php 
class projectManagerTasks extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}


public function index(){
		$this->load->model('ViewProjectsModel');
        $this->username=$this->session->userdata('username');
        $data['projectsqueue']=$this->ViewProjectsModel->PMViewProjects();
        $this->DashBoardMainView($this->username);
	
	
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

public function addU(){     //add and save userstories
		$this->load->model('ViewProjectsModel');
        $this->username=$this->session->userdata('username');
        $data['projectsqueue']=$this->ViewProjectsModel->PMViewProjects();
        $this->DashBoardMainView($this->username);

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
			
		$this->load->model('ViewProjectsModel');
        $this->username=$this->session->userdata('username');
        $data['projectsqueue']=$this->ViewProjectsModel->PMViewProjects();
        $this->DashBoardMainView($this->username);
			
			
			$this->load->helper('form');
			$data = array();
			$this->load->model('load_userStory');
			$data[ 'story' ] = $this->load_userStory->getContent();
			$this->load->view('ViewUserStories',$data);
			
			}
			
			
public function viewBacklog(){		//function to view project backlog

     $this->username=$this->session->userdata('username');
	 $this->DashBoardMainView($this->username);
	
	$this->load->model('load_userStory');
	$this->load->model('add_ustory_model');
	$pro = array();
	$pro['projects'] = $this->add_ustory_model->getProjects();
	$selectedProject=$this->input->post('DropProjects');
	$details = array();
	$details['story']=$this->load_userStory->getSelectedProject($selectedProject);
	

	$compData = $details + $pro;
	
	$this->load->view('backlog',$compData);

	
	
}	
	

}