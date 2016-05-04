<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');

class SearchTask_Controller extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sprint_model');//loading database queries
        $this->load->library('form_validation'); //loading validation
    }
    
    public function index() 
    {
        $data['show_table'] = $this->view_table_task();
        $this->data['message'] = $this->session->flashdata('message');
        $this->load->view('searchTask', $data);
    }
    
    //getting user id and the task to the table view
    public function view_table_task()
    {
        $result = $this->Sprint_model->show_sprint_id();
        if ($result != false) {
            return $result;
        } else {
            return 'Database is empty !';
        }
    }
    
    //getting task details of a specific employee by user id
    public function search_sprint_task() 
    {
        $id = $this->input->post('sprint_id');
            if ($id != "") 
            {
                $result = $this->Sprint_model->show_task_by_sid($id);
                if ($result != false)
                {
                    $data['result_display'] = $result;
                } 
                    else
                    {
                        $data['result_display'] = "No record found !";
                    }
            } 
                else
                {
                    $data = array(
                    'id_error_message' => "Id field is required"
                    );
                }
        $data['show_table'] = $this->view_table_task();
        $this->load->view('searchTask', $data);
    }
    
}
