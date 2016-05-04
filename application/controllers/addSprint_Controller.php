<?php

class AddSprint_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sprint_model');
    }

    public function index()
    {
        $data['message']="";
        $this->load->helper('form');
        $data['dropdown'] = $this->Sprint_model->get_dropdown(); //loading the project ids to database
        $this->load->view('addSprint',$data);                               
    }
   /**
*	@author: PCG
*	@param: none
*
*	desc: add a sprint to a project and dislpay success message, if not suceess show error message                     
*	         

*/	
    public function add_sprint()
    {
        if (isset($_POST) && !empty($_POST)) {	                
		$data = array(
                    
                    'project'  => $this->input->post('p_id')
            );}
                        
        $data['dropdown'] = $this->Sprint_model->get_dropdown();
            
        $this->load->library('form_validation');
        $this->form_validation->set_rules('project','Project name', 'trim|required|callback_check_if_project_selected');
        $this->form_validation->set_rules('name', 'Sprint Name', 'trim|required|alpha_numeric|is_unique[sprint.name]');
        $this->form_validation->set_rules('start_date','Start Date', 'trim|required');
        $this->form_validation->set_rules('end_date','End date', 'trim|required|callback_check_end_date');

                                   
            if ($this->form_validation->run() == FALSE)
            {
                $data['message']="";
                $this->load->helper('form');                    
                $this->load->view("addSprint",$data);
            }
                else
                {
                    $this->load->model('sprint_model');              
                    if($this->sprint_model->add_sprint())
                    {                    
                    $data['message']='Sprint has been added successfully';
                    $this->load->helper('form');
                    $this->load->view('addSprint',$data);
                    }                
                        else
                    {
                        $this->load->helper('form');
                        $this->load->view('addSprint',$data);
                    }
                }
    }
 /**
*	@author: PCG
*	@param: none
*
*	desc: check if end date is earlier than start date           
*	         

*/
   public function check_end_date()
        {
            
            $start = date('Y-m-d', strtotime($this->input->post('start_date')));
            $end = date('Y-m-d', strtotime($this->input->post('end_date')));
            if($start>$end)
            {
                $this->form_validation->set_message('check_end_date', 'End date is prior to Start Date.!!');
                return false;
            }
            else
            {
                return true;
            }
        }
  /**
*	@author: PCG
*	@param: none
*
*	desc: check if project is selected

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
*	desc: check if end date is earlier than start date           
*	         

*/       
    public function check_if_start_date_is_correct()
        {
            $this->load->model('Sprint_model');
    
            if ($this->Sprint_model->check_if_start_date_is_correct() == false) {
                return false;
            } else {
                return true;
            }
        } 
     /**
*	@author: PCG
*	@param: none
*
*	desc: check if deadline  iscorrect  
*	         

*/       
        
     public function check_if_deadline_is_correct()
        {
            $this->load->model('Sprint_model');
    
            if ($this->Sprint_model->check_if_deadline_is_correct() == false) {
                return false;
            } else {
                return true;
            }
        } 
  
}       
?>            
    


