<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PmTask_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('User_model');//loading database queries
		$this->load->library('form_validation'); //loading validation
	}

	public function index()
	{                       
            $this->data['tasks'] = $this->User_model->get_allTask();		
            $this->data['message'] = $this->session->flashdata('message');		
            $this->load->view('addTask', $this->data);                           
	}
        
        /**
*	@author: PCG
*	@param: none
*
*	desc: fetch data from task table and dislpay detailed task list in page, if there                       
*	         arn't any data, redirect to error page

*/	

        
        public function view_tasks()
        {

              $this->data['tasks'] = $this->User_model->get_allTask();
              $this->load->view('TaskPm', $this->data);
        }
        
        /**
*	@author: PCG
*	@param: none
*
*	desc: add data from task table and dislpay success message, if not suceess show error message                     
*	         

*/	     
          public function add_task()
        {
             
	    if (isset($_POST) && !empty($_POST)) {
   
            $this->load->library('form_validation');            
            $this->form_validation->set_rules('task', 'Task Name', 'trim|required|is_unique[task.task]');    
            if ($this->form_validation->run() == FALSE)
            {
                $data['message']="";
                $this->load->helper('form');
             
                $this->load->view("addTask",$data);
                
            }
            else
            {
                $this->load->model('User_model');

                if($this->User_model->add_task())
                {
                  
                    $data['message']='Task has been added successfully';
                    $this->load->helper('form');
                    $this->load->view('addTask',$data);

                }
                
                else
                {
                    $this->load->helper('form');
                    $this->load->view('addTask',$data);
                }
            }
        }
        }
        /**
*	@author: PCG
*	@param: taskid
*
*	desc: edit data in task table and dislpay success message, if not suceess show error message                     
*	         

*/	   
          public function edit_task_pm($taskid)
        {
            $task2 = $this->User_model->get_task($taskid);

		$this->data['title'] = 'Edit Task';
                $this->form_validation->set_rules('task', 'task', 'required');
                $this->form_validation->set_rules('task', 'Task Name', 'trim|required|is_unique[task.task]');
                
                if (isset($_POST) && !empty($_POST))
		{		
			$data = array(
                            
                              
				'task'=> $this->input->post('task')
                                );
                        
            if ($this->form_validation->run() === true)
			{
				$this->User_model->update_task($taskid, $data);
                               
                    

				$this->session->set_flashdata('message', "<p>Task updated successfully.</p>");
                               
				
				redirect(base_url().'PmTask_Controller/edit_task_pm/'.$taskid);
			}			
		}
                
                $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
		
		$this->data['task2'] = $task2;
                
		$this->data['task'] = array(
			'name'  	=> 'task',
			
			'type'  	=> 'text',
			'style'		=> 'width:300px;',
                       
			'value' 	=> $this->form_validation->set_value('task', $task2['task']),
		);
                
                $this->load->view('editTaskPm', $this->data);
        
        }
      /**
*	@author: PCG
*	@param: none
*
*	desc: upload files to upload folder and dislpay success message, if not suceess show error message                     
*	         

*/	    
        public function upload_files()
        {
            if ($_FILES["myuploader"]["error"] > 0)
            {
                //echo "Return Code: " . $_FILES["myuploader"]["error"] ;
                 $this->session->set_flashdata('message', "<p>error occured while uploading the file.</p>");
                 redirect(base_url().'PmTask_Controller/index');
                
            }
                else
                {   
                    if (file_exists("upload/" . $_FILES["myuploader"]["name"]))
                     {
                        // echo $_FILES["myuploader"]["name"] . " already exists. ";
                            $this->session->set_flashdata('message', "<p>file already exists.</p>");
                            redirect(base_url().'PmTask_Controller/index');
                     }
                        else
                        {
                            move_uploaded_file($_FILES["myuploader"]["tmp_name"],
                            "upload/" . $_FILES["myuploader"]["name"]);
                            //echo "Your File has been Stored in: " . "upload/" . $_FILES["myuploader"]["name"];
                               //$data['message']='file has been uploaded successfully';
                               
                               $this->session->set_flashdata('message', "<p>file updated successfully.</p>");
                               
				
				redirect(base_url().'PmTask_Controller/index');
                        }
                }
        }
}

