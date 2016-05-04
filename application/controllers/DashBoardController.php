<?php

class DashBoardController extends CI_Controller{
    var $username;
    var $designation;
    function index($name)
    {
        $this->DashBoardMainView($name);
        $this->load->view('DashboardBody');
    }
    
    function DashBoardMainView($name)		//loading the dynamic nvigation panel for each page
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
    
        function redirectToPages($page)				//function to redirect to home page
    {
        $this->username=$this->session->userdata('username');
        $this->DashBoardMainView($this->username);
        if($page=='home')
        {
        $this->load->view('DashBoardBody');
        }
    }
    
    
    //Managers functions
    
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
    

    
    //PM functions
    
    function PMViewProjects()
    {
        $this->load->model('ViewProjectsModel');
        $this->username=$this->session->userdata('username');
        $data['projectsqueue']=$this->ViewProjectsModel->PMViewProjects();
        $this->DashBoardMainView($this->username);
        $this->load->view('PMViewProjects',$data);
    }
    
    //Scrum Master functions
    
    function ScrumMasterViewProjects($status)
    { 
        $this->load->model('ViewProjectsModel');
        $this->username=$this->session->userdata('username');
        $data['projectsqueue']=$this->ViewProjectsModel->ScrumMasterViewProjects($status);
        $this->DashBoardMainView($this->username);
        $this->load->view('ScrumMasterViewProjects',$data);
    }
	
	//developer tasks 
	
public  function developerViewTasks(){
		$this->username=$this->session->userdata('username');
		$this->DashBoardMainView($this->username);
		$this->load->model('developer_model');
		//$name = $this->developer_model->getName($this->username);
		$data = array();
		$data['tasks'] = $this->developer_model->getDeveloperTasks($this->username);
		$this->load->view('viewAssignedDev',$data);
	}
	
	
	//genral user Settings 
	
public function userSettings() {
	$this->username=$this->session->userdata('username');
	$this->DashBoardMainView($this->username);
	$this->load->view('userSettings_View');
	}
	


	public function loadchangePassword(){		
		$this->username=$this->session->userdata('username');
		$this->DashBoardMainView($this->username);
		$this->load->view('ChangePwd');
		
		}
			
		
	public function changePassword(){  //user can change password here
		 $this->load->library('form_validation');
		 
		
		$this->username=$this->session->userdata('username');
		$usernm=$this->username;
		
		$pass=$this->input->post('oldpassword');
		$npass=$this->input->post('newpassword');
		$rpass=$this->input->post('rnewpassword');
		$this->form_validation->set_rules($npass,'Password','trim|required|min_length[8]');
		$this->form_validation->set_rules($rpass,'Password Confirmation','trim|required|matches[newpassword]');
		$this->load->model('developer_model');
		
		 if($this->form_validation->run()==false){
			$this->loadchangePassword();
		}
		else{
		
			
			$mdpass=md5($pass);
			$mdnpass=md5($npass);
			 $data = array(
									'pwd' => $mdnpass
									);
			
			if($npass=$rpass){
			if($this->developer_model->checkoldpwd($mdpass,$usernm)){
				
				$this->developer_model->changePwd($data,$usernm);
				
				$this->loadchangePassword();
				}
			}
		}
		
	
	}

	
	
	
	function logout(){
    $user_data = $this->session->all_userdata();
    foreach ($user_data as $key => $value) {
    if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
            $this->session->unset_userdata($key);
         }
      }
   $this->session->sess_destroy();
   redirect('LoginController');
}
    

function changeUserDetails()	//user can change the user details
{
	
        $this->username=$this->session->userdata('username');
        $this->DashBoardMainView($this->username);
	
        $this->username=$this->session->userdata('username');
		$usernm=$this->session->userdata('username');
  
		$this->load->model('developer_model');
        $this->load->view('editUserDetails');
		
		$data = array(
			'full_name'=> $this->input->post('name'),
			'user_name'=> $this->input->post('username'),
			'email'=> $this->input->post('email'),
		);
		
		
		if($this->input->post('submit') != '')
		{		
		$this->developer_model->saveUserDetails($usernm,$data);
	
		}
			

}





}