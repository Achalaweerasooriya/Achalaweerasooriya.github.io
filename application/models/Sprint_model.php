<?php

class Sprint_model extends CI_Model
{    
    // Adding a sprint to the database
    public function add_sprint()
    {       
        $new_sprint = array(
            'p_id'        => $this->input->post('project'),
            'name'        => $this->input->post('name'),
            'start_date'  => date('Y-m-d', strtotime($this->input->post('start_date'))),
            'end_date'    => date('Y-m-d', strtotime($this->input->post('end_date'))),
             
        );        
        $query = $this->db->insert('sprint',$new_sprint);
        return $query;       
    }

    //get project ids to the dropdown
    public function get_dropdown()
    {
        $this->db->select('project_id,name');
        $query = $this->db->get('project');
        return $query->result();
     }
     //show sprint id and sprint name 
    public function show_sprint_id()
    {
        $this->db->select('sprint_id,name');
        $this->db->from('sprint');
        $query = $this->db->get();
            if ($query->num_rows() > 0) 
            {
                return $query->result();
            }
            else
            {
                return false;
            }
    }
    //show tasks for a specific srint
    public function show_task_by_sid($id) 
    {
        $this->db->select('u_id,s_id,task_id,task');
        $this->db->from('task');
        $this->db->where('s_id', $id);
        $query = $this->db->get();
            if ($query->num_rows() > 0) 
            {
                    return $query->result_array();
            } 
                else 
                {
                     return FALSE;
                }
    } 
     public function add_Feedback()
    {       
        $new_feedback = array(
            'pr_id'        => $this->input->post('project'),
            'sp_id'        => $this->input->post('sprint'),
            'workload'     => $this->input->post('complete'),
            'comments'     => $this->input->post('comments'),
            
        );        
        $query = $this->db->insert('feedback',$new_feedback);
        return $query;       
    }
    
       public function get_Sdropdown()
        {
            $this->db->select('sprint_id,name');
            $this->db->where( 'end_date < NOW()', NULL, FALSE);
            $query = $this->db->get('sprint');
            return $query->result();
	}
        
        
        

               
    public function check_if_project_selected($str)
        {
            if ($str == 0) {
                $this->form_validation->set_message('check_if_project_selected', 'Please select a project');
                return false;
            } else {
                return true;
            }
        }  
        
    public function check_if_sprint_selected($str)
        {
            if ($str == 0) {
                $this->form_validation->set_message('check_if_sprint_selected', 'Please select a sprint');
                return false;
            } else {
                return true;
            }
        }
        
         
        
    
        
        
        
        
}
?>
