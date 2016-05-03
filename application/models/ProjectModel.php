<?php

    class ProjectModel extends CI_Model
    {
        public $project_id;
        public $query;
        public $data;
        public $q;
        public $newproject;
        
        /*
        * Function for Getting Projects
        * @return      result array 
        */
        
        public function get_projects()
        {
            $query = $this->db->get('project');
            return $query->result_array();
        }
    
        /*
        * Function for Getting Specific Project details
        * @param       integer  $project_id    Input integer
        * @return      row array 
        */
        
        public function get_specific_project($project_id)
        {
            $this->db->select('project_id,name,start_date, deadline,status,description,language,framework,client,team_id,project_progress');
            $this->db->where('project_id', $project_id);
            $query = $this->db->get('project');
            return $query->row_array();
        }
        
        /*
        * Function for Getting Update Project details
        * @param       integer  $project_id,array  $data   Input integer,Input array
        * @return      row array 
        */
        
        public function update_project($project_id, $data)
        {   
            $this->load->model('MembershipModel');
            $des=$this->MembershipModel->getdes($this->session->userdata('username'));
        
            $this->db->where('project_id', $project_id);
            if ($this->db->update('project', $data)) {
              if($des=="ceo"){  
                if($this->input->post('project_manager')!=0){
                    
                    $this->db->where('user_id',0);
                    $this->db->where('project_id',$project_id);
                    $query = $this->db->from('projectmanager');
                    
                    if($this->db->count_all_results()==0){
                        $this->db->where('user_id',$this->input->post('project_manager'));
                        $this->db->where('project_id',$project_id);
                        $query = $this->db->from('projectmanager');
                        
                        if($this->db->count_all_results()==0){
                            $newproject = array(
                                'time' => date('Y-m-d h:i:sa'),
                                'user_id'  => $this->input->post('project_manager'),
                                'project_id' => $project_id  
                            );
                        $query = $this->db->insert('projectmanager',$newproject);
                        return $query;
                    }else{
                        $newproject = array(
                            'time' => date('Y-m-d h:i:sa'),
                            'user_id'  => $this->input->post('project_manager'),
                            'project_id' => $project_id  
                        );
                        $this->db->where('user_id',$this->input->post('project_manager'));
                        $this->db->where('project_id',$project_id);
                        $this->db->update('projectmanager', $newproject);
                        return true;
                        
                    }
                    
                }else{
                        $newproject = array(
                            'time' => date('Y-m-d h:i:sa'),
                            'user_id'  => $this->input->post('project_manager'),
                            'project_id' => $project_id  
                        );
                        $this->db->where('user_id',0);
                        $this->db->where('project_id',$project_id);
                        $this->db->update('projectmanager', $newproject);
                        return true;
                        
                }
                    
                
                }elseif($this->input->post('project_manager')==0 ){
                
                    $this->db->where('user_id',0);
                    $this->db->where('project_id',$project_id);
                    $query = $this->db->from('projectmanager');
                    
                    if($this->db->count_all_results()==0){
                        $newproject = array(
                            'time' => date('Y-m-d h:i:sa'),
                            'user_id'  => $this->input->post('project_manager'),
                            'project_id' => $project_id  
                        );
                        $query = $this->db->insert('projectmanager',$newproject);
                        return $query;
                        
                    }else{
                        $newproject = array(
                            'time' => date('Y-m-d h:i:sa'),
                            'user_id'  => $this->input->post('project_manager'),
                            'project_id' => $project_id  
                        );
                        $this->db->where('user_id',0);
                        $this->db->where('project_id',$project_id);
                        $this->db->update('projectmanager', $newproject);
                        return true;
                        
                    }
                    
                }
                }else{
                    return true;
                    
                }
            }else{
                return false;
                
            }
        }
        
    /*
    *Function for Remove a Project 
    * @param       integer  $project_id    Input integer
    * @return      integer
    */ 
        public function remove_project($project_id)
        {
            $this->db->where('project_id', $project_id);
            $q = $this->db->delete('work');
            if ($q==true) {
                $this->db->where('project_id', $project_id);
                $query = $this->db->delete('project');
                if($query==true){
                    $this->db->where('project_id', $project_id);
                    $query = $this->db->delete('projectmanager');
                    return $query;
                }
            }
        }
        
    /*
    * Function for Loading Project Managers to dropdown list  
    * @return      result
    */
        public function load_project_manager()
        {
            $this->db->select('user_id,user_name');
            $this->db->where('designation','pm');

            $query = $this->db->get('user');
            return $query->result();
        }
        
    /*
    *Function for Get Project Manager of specific project 
    * @param       integer  $project_id    Input integer
    * @return      row array
    */    
        
        public function get_project_manager($project_id)
        {
            //get last time of appointing a project manager for a specific project
            $this->db->select_max('time');
            $this->db->where('project_id', $project_id);
            $query = $this->db->get('projectmanager');
            $query->row_array();
            $time=$query->row_array();

            //get last appointed project manager for a specific project
            $this->db->select('user_id');
            $this->db->where('project_id', $project_id);
            $this->db->where('time',$time['time']);
            
            $que = $this->db->get('projectmanager');
            
            return $que->row_array();
        }
        
    /*
    *Function for Get Status of specific project 
    * @param       integer  $project_id    Input integer
    * @return      row array
    */    
        
        public function get_status($project_id)
        {
            $this->db->select('status');
            $this->db->where('project_id', $project_id);
            
            $query = $this->db->get('project');
            return $query->row_array();
        }
    
    /*
    * Callback function for checking whether a Project Manager is selected 
    * @param       string  $str    Input string 
    * @return      bool
    */    
              
        public function check_if_project_manager_selected($str)
        {
            if ($str == 0) {
                $this->form_validation->set_message('check_if_project_manager_selected', 'Please select a project manager');
                return false;
            } else {
                return true;
            }
        }
    }


