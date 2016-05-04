<?php 

class developer extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index(){
		
         $this->load->view('DashboardBody');
		 $this->load->view('DeveloperNavigation'); 
		
	}
	
	
	
	public function displayUserStory()
	{
		
         $this->load->view('DashboardBody');
		 $this->load->view('DeveloperNavigation'); 
		 //$this->load->view('DeveloperNavigation'); 
		//$this->load->model('developer_model');
	//	$data = array();
		
		//$data['tasks'] = $this->developer_model->(getContent);
		//$this->load->view('viewAssignedDev');
		
	}
	
	
}
