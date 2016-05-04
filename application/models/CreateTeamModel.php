<?php

    class CreateTeamModel extends CI_Model
    {
        public $query;
        public $new_member;
        public $team_id;
        public $user_id;
        public $new_team;
        public $data;
        public $q;
        public $qu;
        public $str;

    /*
    * Function for Create New Team
    * @return      bool  
    */    
    
        public function create_team()
        {
            $new_team = array(    
                'name'        => $this->input->post('name')
            );
            $query = $this->db->insert('team',$new_team);
            return $query;
        }
    
    /*
    * Function for Get all Team details 
    * @return      result array  
    */    
    
        public function get_teams()
        {
            $this->db->select('team_id,name');
            $query = $this->db->get('team');
            return $query->result_array();
        }
    
    /*
    * Function for View specific Team Details
    * @param       integer  $team_id  Input integer
    * @return      row array  
    */
    
        public function view_team_details($team_id)
        {
            $this->db->select('team_id,name,no_of_members,scrum_master');
            $this->db->where('team_id', $team_id);
            $query = $this->db->get('team');
            return $query->row_array();
        }
    
    /*
    * Function for Get Project of  specific Team
    * @param       integer  $team_id  Input integer
    * @return      row array  
    */
        
   
        public function get_project($team_id)
        {
            $this->db->select('project_id,name');
            $this->db->where('team_id', $team_id);
            $query = $this->db->get('project');
            return $query->row_array();
        }
    
    /*
    * Function for View Team Members 
    * @param       integer  $team_id  Input integer
    * @return      result array  
    */    
    
        public function view_team_members($team_id)
        {
            $this->db->select('user_id,full_name,user_name');
            $this->db->where('team_id',$team_id);
            $query = $this->db->get('user');
            return $query->result_array();
        }
    
    /*
    * Function for Load Team Members to dropdown list
    * @param       integer  $team_id  Input integer
    * @return      result  
    */

        public function load_team_members($team_id)
        {
            $this->db->select('user_id,user_name');
            $this->db->where('team_id',$team_id);
            $query = $this->db->get('user');
            return $query->result();
        }
    
    /*
    * Function for Load Projects to dropdown list
    * @param       integer  $team_id  Input integer
    * @return      result  
    */
    
        public function load_projects($team_id)
        {
            $this->db->select('project_id,name');
            $where = "team_id=0 OR team_id='$team_id' AND status!='Completed'";
            $this->db->where($where);
            $query = $this->db->get('project');
            return $query->result();
        }    
    
    /*
    * Function for Get Developers who has not been appointed for a team
    * @return      result_array  
    */    
    
        public function get_developers()
        {  
            $this->db->select('user_id,full_name,user_name');
            $this->db->where('team_id',0);
            $this->db->where('designation','developer');
            $query = $this->db->get('user');
            return $query->result_array();
        }
    
    /*
    * Function for Add Member for a specific team
    * @param       integer  $team_id,integer $user_id   Input integer,Input integer
    * @return      bool  
    */
    
        public function add_member($team_id,$user_id)
        {
            $new_member = array(
                'team_id'        => $team_id,
                'user_id'        => $user_id
            );
            $query = $this->db->insert('team_member',$new_member);
            
            if ($query == true) {
                $data = array(
                    'team_id'   => $team_id  
                );
                $this->db->where('user_id',$user_id);
                $q=$this->db->update('user', $data);

                if ($q == true) {
                    $this->db->where('team_id', $team_id);
                    $this->db->from('team_member');
                    $count = $this->db->count_all_results();
                    
                    $data = array(
                        'no_of_members' => $count,
                    );
                    $this->db->where('team_id', $team_id);
                    $q=$this->db->update('team', $data);
                
                }
                return $query;
            }
        }  
    
    /*
    * Function for Remove Member from a specific team
    * @param       integer  $team_id,integer $user_id,integer $project_id   Input integer,Input integer,Input integer
    * @return      integer  
    */
    
        public function remove_member($team_id,$user_id,$project_id)
        {
         
            $this->db->where('user_id', $user_id);
            $query = $this->db->delete('team_member');
            if ($query == true) {
                
                $data = array(
                    'team_id' => 0,
                );
                
                $this->db->where('user_id',$user_id);
                $q=$this->db->update('user', $data);
                
                if ($q == true) {
                    $this->db->where('team_id', $team_id);
                    $this->db->from('team_member');
                    $count = $this->db->count_all_results();
                    
                    $data = array(
                        'no_of_members' => $count,
                        'scrum_master'  => 0
                    );
                    
                    $this->db->where('scrum_master',$user_id);
                    $this->db->where('team_id', $team_id);
                    $qu=$this->db->update('team', $data);
                        if($qu == true && $project_id != 0 )
                        {
                            $dat = array(
                            'end_date' => date('Y-m-d h:i:sa')
                            );

                            $this->db->where('project_id',$project_id);
                            $this->db->where('team_id', $team_id);
                            $this->db->where('user_id', $user_id);
                            $q=$this->db->update('work', $dat);
                            
                        } 
                }
                return $query;
            }
        }
    
    /*
    * Function for Update Team details of a specific team
    * @param       integer  $team_id,array $data   Input integer,Input array
    * @return      bool  
    */
    
        public function update_team($team_id, $data)
        {
            $this->db->where('team_id', $team_id);
            
            if ($this->db->update('team', $data)) {   
                return true;
            } else {
                return false;
            }
        }
    
    /*
    * Function for Assign Team for a Project
    * @param       integer  $team_id   Input integer
    * @return      bool  
    */    
        
        public function insert_team($team_id)
        {
            $data1 = array(
                    'team_id'   => 0  
                );
            
            $project_id = $this->input->post('project');
            
            if($project_id == 0){
                
                $this->db->where('team_id', $team_id);
                $this->db->update('project', $data1); 
                return true;
            }
            $data2 = array(
                    'team_id'   => $team_id  
                );
            $this->db->where('project_id !=', $project_id);
            
            $this->db->where('team_id', $team_id);
            $this->db->update('project', $data1);
            
            $this->db->where('project_id', $project_id);
            $q = $this->db->update('project', $data2);
            if ($q = true) { 
                
                $developers = $this->CreateTeamModel->load_team_members($team_id);
                        
                foreach($developers as $dev)
                {
                    $this->db->select('user_id,project_id,team_id');
                    $this->db->where('user_id',$dev->user_id);
                    $this->db->where('project_id',$project_id);
                    $this->db->where('team_id',$team_id);
                    $query = $this->db->from('work');
                    if($this->db->count_all_results()==0){
                    $work = array(    
                        'user_id'        => $dev->user_id,
                        'project_id'     => $project_id,
                        'team_id'        => $team_id,
                        'start_date'     => date('Y-m-d h:i:sa')
                    );
                    $query = $this->db->insert('work',$work);
                    
                    }
                } 
                return $query;
            } else{
                return false;
            }
        }
    
    /*
    * Function for Get Projects
    * @return      result array  
    */
    
        public function get_projects(){
            $query = $this->db->get('project');
            return $query->result_array();
        }
    
    /*
    * Function for Remove Team
    * @param       integer  $team_id   Input integer
    * @return      bool  
    */
    
        public function remove_team($team_id)
        {
            $this->db->where('team_id', $team_id);
            $q = $this->db->delete('work');

            if ($q == true) {
                $this->db->where('team_id', $team_id);
                $query = $this->db->delete('team_member');
        
                if ($query == true) {
                    
                    $data = array(
                        'team_id'   => 0
                    );
                    
                    $this->db->where('team_id', $team_id);
                    $qu=$this->db->update('user', $data);
            
                    if ($qu == true) {
                        $this->db->where('team_id', $team_id);
                        $que = $this->db->delete('team');
                        
                        
                 
                            return $que;
                        }
                    }
                }
            }
    
    /*
    * Callback function for checking whether a scrum master is selected
    * @return      bool
    */
    
        public function check_if_scrum_master_selected($str)
        {
            if ($str == 0) {
                $this->form_validation->set_message('check_if_scrum_master_selected', 'Please select a scrum master');
                return false;
            } else {
                return true;
            }
        }

}
    


