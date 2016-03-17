<?php

class Create_project_model extends CI_Model{
        var $username;
    var $designation;
    
    function index()
    {
        $this->load->controller('DashBoardController');
        $this->username=$this->DashBoardController->username;
        $this->designation=$this->DashBoardController->designation;
        
        
    }
    /////////////////////////// Add Project /////////////////////////////////
    public function add_project(){
        
        $str = $this->input->post('language');

        $new_project = array(
                'name'        => $this->input->post('name'),
                'start_date'  => date('Y-m-d', strtotime($this->input->post('start_date'))),
                'deadline'    => date('Y-m-d', strtotime($this->input->post('deadline'))),
                'description' => $this->input->post('description'),
                'language'   => $this->input->post('language'),
                'client'   => $this->input->post('client'),
        );
        
        $query = $this->db->insert('project',$new_project);
        return $query;
        
    }
    
    /////////////////////////// Callback function for framework selection ///////////////////////////////// 
    public function check_if_framework_selected($str)
    {
        if(strcmp($str,'Select')===0)
        {
            $this->form_validation->set_message('check_if_framework_selected', 'Please select a framework');
            return false;
        }
        else{
            return true;
        }
    }
}
?>
