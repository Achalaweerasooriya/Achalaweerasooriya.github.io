<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ManageUser_Controller extends CI_Controller
{

    public function __construct()
    {
	parent::__construct();
	$this->load->model('User_model');//loading database queries
	$this->load->library('form_validation'); //loading validation
    }

    public function index()
    {
        $this->data['title'] = 'User Management';
	$this->data['message'] = $this->session->flashdata('message');
    }
    /**
*	@author: PCG
*	@param: none
*
*	desc: view users    
*	         

*/        
    public function view_users()
    {
        $this->data['users'] = $this->User_model->get_all();
        $this->data['message'] = $this->session->flashdata('message');
        $this->load->view('users', $this->data);
    }
   
    public function edit_user($user_id)
    {
        $user = $this->User_model->get_user($user_id);
        $this->data['title'] = 'Edit User';	
        //validate form input
        $this->form_validation->set_rules('full_name', 'Full name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('user_name', 'User name', 'trim|required|alpha_numeric');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
              
            if (isset($_POST) && !empty($_POST))
		{		
                    $data = array(
			'full_name'=> $this->input->post('full_name'),
			'email'=> $this->input->post('email'),
			'user_name'=> $this->input->post('user_name'),
                        'designation'=> $this->input->post('designation'),				
			);

			if ($this->form_validation->run() ===TRUE)
			{
				$this->User_model->update_user($user_id, $data);                               
				$this->session->set_flashdata('message', "<p>User updated successfully.</p>");				
				redirect(base_url().'ManageUser_Controller/edit_user/'.$user_id);
			}			
		}
	$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));		
	$this->data['user'] = $user;	
	//display the edit form
	$this->data['full_name'] = array(
			'name'  	=> 'full_name',
			'id'    	=> 'full-name',
			'type'  	=> 'text',
			'style'		=> 'width:300px;',
                        'readonly'      => 'true',
			'value' 	=> $this->form_validation->set_value('full_name', $user['full_name']),
		);
		
	$this->data['email'] = array(
			'name'  	=> 'email',
			'id'    	=> 'email',
			'type'  	=> 'text',
			'style'		=> 'width:300px;',
			'value' 	=> $this->form_validation->set_value('email', $user['email']),
		);

	$this->data['user_name'] = array(
			'name'  	=> 'user_name',
			'id'    	=> 'user_name',
			'type'  	=> 'text',
			'style'		=> 'width:300px;',
			'value' 	=> $this->form_validation->set_value('user_name', $user['user_name']),
		);
        $this->data['designation'] = array(
			'name'  	=> 'designation',
			'id'    	=> 'designation',
			'type'  	=> 'text',
			'style'		=> 'width:300px;',
			'value' 	=> $this->form_validation->set_value('designation', $user['designation']),
		);	
	$this->load->view('editUsers', $this->data);
    }

    function delete_user($user_id) 
    {
	$this->User_model->del_user($user_id);		
	$this->session->set_flashdata('message', '<p>user is  successfully deleted!</p>');		
        redirect(base_url().'ManageUser_Controller/view_users/');
    }
}
                        
	

