<?php
class User_model extends CI_Model
{

    //get all the users in database
    public function get_all()
    {
        $this->db->select('user_id, full_name,email, user_name,designation');
        $query = $this->db->get('user');
            if ($query->num_rows() > 0) 
            {
                return $query->result_array();
            } 
                else
                {
                    return FALSE;
                }     
    }
    //get a specific user in database
    public function get_user($user_id) 
    {
	$this->db->select('user_id, full_name,email, user_name,designation');
	$this->db->where('user_id', $user_id);
	$query = $this->db->get('user');
            if ($query->num_rows() > 0) 
            {
               return $query->row_array();
            } 
                else
                {
                    return FALSE;
                } 
      
    }
    //update a specific user in database
    public function update_user($user_id, $data)
    {
	$this->db->where('user_id', $user_id);
	$this->db->update('user', $data);
    }
    //delete a specific user in database
    public function del_user($user_id)
    {
	$this->db->where('user_id', $user_id);
	$this->db->delete('user');
    }
    
    //Pm Adding a task to the database
    public function add_task(){             
        $new_task = array(
          'task' => $this->input->post('task')                           
        );
        
        $query = $this->db->insert('task',$new_task);
        return $query;
        
    }
    //get all the tasks in database
    public function get_allTask() 
    {
        $this->db->select('task_id, task,status,comments,created');
        $query = $this->db->get('task');
            if ($query->num_rows() > 0) 
            {
                return $query->result_array();
            } 
                else
                {
                    return FALSE;
                }  
        
    }
    //get a specific task in database
    public function get_task($taskid) 
    {
        $this->db->select('task_id, task,status,comments');
        $this->db->where('task_id', $taskid);
        $query = $this->db->get('task');
            if ($query->num_rows() > 0) 
            {
               return $query->row_array();
            } 
                else
                {
                    return FALSE;
                } 
        
    }
    //update a specific task in database by developer
    public function update_task($taskid, $data)
    {
        $this->db->where(' task_id ' , $taskid);
        $this->db->update('task', $data);
    }
    //show task list for specific user           
    public function show_all_data() 
    {
        $this->db->select('u_id,task');
        $this->db->from('task');
        $query = $this->db->get();
            if ($query->num_rows() > 0) 
            {
                return $query->result();
            } 
                else
                {
                    return FALSE;
                }
    }
    //show task details for a specific user
    public function show_data_by_id($id) 
    {
        $this->db->select('u_id,task_id,task,status,comments');
        $this->db->from('task');
        $this->db->where('u_id', $id);
        $query = $this->db->get(); //retieves all the records form the table
            if ($query->num_rows() > 0) 
            {
                return $query->result_array();
            } 
                else 
                {
                    return FALSE;
                }
    }
        
}

