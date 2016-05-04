<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');

class SearchEmp_Controller extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');//loading database queries
        $this->load->library('form_validation'); //loading validation
    }
    public function index() 
    {
        $data['show_table'] = $this->view_table();
        $this->data['message'] = $this->session->flashdata('message');
        $this->load->view('searchEmp', $data);
    }
    //getting user id and the task to the table view
    public function view_table()
    {
        $result = $this->User_model->show_all_data();
        if ($result != FALSE)
        {
            return $result;
        } 
            else 
            {
                return 'Database is empty !';
            }
    }
    
    //getting task details of a specific employee by user id
    public function search_task() 
    {
        $id = $this->input->post('u_id');
            if ($id != "")
            {
                $result = $this->User_model->show_data_by_id($id);
                if ($result != FALSE)
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
        $data['show_table'] = $this->view_table();
        $this->load->view('searchEmp', $data);
    }
    
}
