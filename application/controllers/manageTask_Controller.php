<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ManageTask_Controller extends CI_Controller
{

    public function __construct()
    {
	parent::__construct();

	$this->load->model('User_model');//loading database queries
	$this->load->library('form_validation'); //loading validation
    }
    
    public function index()
    {
        $this->data['tasks'] = $this->User_model->get_allTask();
        $this->data['title'] = 'Task Management';
	$this->data['message'] = $this->session->flashdata('message');
	$this->load->view('Task', $this->data);
    }
   /**
*	@author: PCG
*	@param: none
*
*	desc: developer edits task  in the database  
*	         

*/     
    public function edit_task($taskid)
    {
        $task1 = $this->User_model->get_task($taskid);
        $this->data['title'] = 'Edit Task';
        //validate form input
        $this->form_validation->set_rules('status','status','required');
        $this->form_validation->set_rules('comments','comments','required');        
            if (isset($_POST) && !empty($_POST))
            {		
		$data = array(                                         
			'task'=> $this->input->post('task'),                       
			'status'=> $this->input->post('status'),
			'comments'=> $this->input->post('comments'),                            				
			);

            if ($this->form_validation->run() === true)
            {
                $this->User_model->update_task($taskid, $data);                                
		$this->session->set_flashdata('message', "<p>Task updated successfully.</p>");				
		redirect(base_url().'ManageTask_Controller/edit_task/'.$taskid);
            }			                               
            }

	$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));		
	$this->data['task1'] = $task1;
        //display the edit form
	$this->data['task'] = array(
			'name'  	=> 'task',
			'id'    	=> 'disabledInput',
			'type'  	=> 'text',
			'style'		=> 'width:300px;',
                        'readonly'      => 'true',
			'value' 	=> $this->form_validation->set_value('task', $task1['task']),
		);
		
	$this->data['status'] = array(
			'name'  	=> 'status',
			'id'    	=> 'status',
			'type'  	=> 'dropdown',
			'style'		=> 'width:300px;',
			'value' 	=> $this->form_validation->set_value('status', $task1['status']),
		);

	$this->data['comments'] = array(
			'name'  	=> 'comments',
			'id'    	=> 'comments',
			'type'  	=> 'text',
			'style'		=> 'width:300px;',
			'value' 	=> $this->form_validation->set_value('comments', $task1['comments']),
		);
        $this->load->view('editTask', $this->data);
    }
}


