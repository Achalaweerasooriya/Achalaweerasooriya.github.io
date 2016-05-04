<?php

class Feedback_Controller extends CI_Controller
{  
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sprint_model');
        //$data['dropdown'] = $this->Sprint_model->get_dropdown();
    }

    public function index()
    {
        $data['message']="";
        $this->load->helper('form');
        $data['dropdown'] = $this->Sprint_model->get_dropdown(); //loading the project ids to database
        $data['Sdropdown'] = $this->Sprint_model->get_Sdropdown();
        $this->load->view('sprintFeedback',$data);                               
    }
     /**
*	@author: PCG
*	@param: none
*
*	desc: add feedback to the database     
*	         

*/  
    public function add_Feedback()
    {
        if (isset($_POST) && !empty($_POST)) {	                
		$data = array(
                    //Get the value from the form.
                    'project'  => $this->input->post('pr_id')
            );}
            
       
                        
        $dropdown= $this->Sprint_model->get_dropdown();
        if (isset($_POST) && !empty($_POST)) {	                
		$data = array(
                    
                    'sprint'  => $this->input->post('sp_id')
            );}
            
        $Sdropdown = $this->Sprint_model->get_Sdropdown();
 
        $this->load->library('form_validation');
        $this->form_validation->set_rules('project','Project name', 'trim|required|callback_check_if_project_selected');
        $this->form_validation->set_rules('sprint', 'Sprint Name', 'trim|required|callback_check_if_sprint_selected');
        //$this->form_validation->set_rules('workload','Work load', 'trim|required');
        $this->form_validation->set_rules('comments','Comments', 'trim|required');

                                   
            if ($this->form_validation->run() == FALSE)
            {
                $message="";
                $this->load->helper('form');                    
                $this->load->view("sprintFeedback",  compact('message','dropdown','Sdropdown'));
            }
                else
                {
                    $this->load->model('sprint_model');              
                    if($this->sprint_model->add_Feedback())
                    {                    
                    $message='Feed back has been added successfully';
                    $this->load->helper('form');
                    $this->load->view('sprintFeedback',compact('message','dropdown','Sdropdown'));
                    }                
                        else
                    {
                        $this->load->helper('form');
                        $this->load->view('sprintFeedback',compact('message','dropdown','Sdropdown'));
                    }
                }
    }
   /**
*	@author: PCG
*	@param: none
*
*	desc: check if project selected       
*	         

*/  
    public function check_if_project_selected($str)
        {
            $this->load->model('Sprint_model');
    
            if ($this->Sprint_model->check_if_project_selected($str) == false) {
                return false;
            } else {
                return true;
            }
        }
    /**
*	@author: PCG
*	@param: none
*
*	desc: check if sprint selected       
*	         

*/        
    public function check_if_sprint_selected($str)
        {
            $this->load->model('Sprint_model');
    
            if ($this->Sprint_model->check_if_sprint_selected($str) == false) {
                return false;
            } else {
                return true;
            }
        }    

}       
?>            
    


