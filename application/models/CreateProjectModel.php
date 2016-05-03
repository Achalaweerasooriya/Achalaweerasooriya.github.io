<?php

    class CreateProjectModel extends CI_Model
    {

        public $str;
        public $new_project;
        public $query;
        public $start;
        public $deadline;
        
        
    /*
    * Function for Adding new project 
    * @return      bool
    */
        public function add_project()
        {
            
            $str = $this->input->post('language');

            $new_project = array(
                'name'          => $this->input->post('name'),
                'start_date'    => date('Y-m-d', strtotime($this->input->post('start_date'))),
                'deadline'      => date('Y-m-d', strtotime($this->input->post('deadline'))),
                'description'   => $this->input->post('description'),
                'language'      => $this->input->post('language'),
                'framework'     => $this->input->post('framework'),
                'client'        => $this->input->post('client')                
            );
        
            $query = $this->db->insert('project',$new_project);
            $project_id = $this->db->insert_id();
            
            if($query==true){
                $this->load->model('MembershipModel');
                $des=$this->MembershipModel->getdes($this->session->userdata('username'));
           
                if(strcmp($des,'ceo') === 0){
                    $proj_man=$this->input->post('project_manager');
                    
                        $pm = array(
                            'time'      => date('Y-m-d h:i:sa'),
                            'user_id'   => $proj_man,
                            'project_id'=>  $project_id 
                        );
                        
                        $query = $this->db->insert('projectmanager',$pm);
                        return $query;

                }else{
                    $this->load->model('CreateProjectModel');
                    $user_id=$this->CreateProjectModel->get_user_id($this->session->userdata('username'));
                    $pm = array(
                        'time'      => date('Y-m-d h:i:sa'),
                        'user_id'   => $user_id[0]['user_id'] ,
                        'project_id'=> $project_id  
                    );
                    
                    $query = $this->db->insert('projectmanager',$pm);
                    return $query;

                }
                return true;    
                
            }else{
                return false;
            }
        }
    
    /*
    * Function for Getting Project Manager's ID
    * @param       string  $user    Input string 
    * @return      result array
    */
     
        public function get_user_id($user)
        {
            $this->db->select('user_id');
            $this->db->where('user_name',$user);
            $query=$this->db->get('user');
            return $query->result_array();

        }
        
    /*
    * Callback function for checking earlier dates in start date and deadline fields
    * @return      bool  
    */
        
    // start date // 
        public function check_if_start_date_is_correct()
        {
            $start = date('Y-m-d', strtotime($this->input->post('start_date')));
            
            if ($start < date('Y-m-d')) {
                
                $this->form_validation->set_message('check_if_start_date_is_correct', 'Start Date is an earlier date.Please Re-select!!');
                return false;
            } else {
                return true;
            }
        }
        
    // deadline //    
        public function check_if_deadline_is_correct()
        {
            $deadline = date('Y-m-d', strtotime($this->input->post('deadline')));
            
            if ($deadline < date('Y-m-d')) {
                
                $this->form_validation->set_message('check_if_deadline_is_correct', 'Deadline is an earlier date.Please Re-select!!');
                return false;
            } else {
                return true;
            }
        }
        
    /*
    * Callback function for checking deadline field whether it is prior to start date
    * @return      bool
    */
        public function check_if_deadline_is_before_start_date()
        {
            $start = date('Y-m-d', strtotime($this->input->post('start_date')));
            $deadline = date('Y-m-d', strtotime($this->input->post('deadline')));
            
            if ($start > $deadline) {
                
                $this->form_validation->set_message('check_if_deadline_is_before_start_date', 'Deadline is prior to start date. Please Reselect deadline or both start date and deadline!!');
                return false;
            } else {
                return true;
            }
        }
        
    /*
    * Callback function for checking whether a language is selected 
    * @param       string  $str    Input string 
    * @return      bool
    */
        public function check_if_language_selected($str)
        {
        
            if (strcmp($str,'select') === 0) {
            
                $this->form_validation->set_message('check_if_language_selected', 'Please select a language');
                return false;
            } else {
                return true;
            }
        }
        
    /*
    * Callback function for checking whether a framework is selected 
    * @param       string  $str    Input string 
    * @return      bool
    */
        public function check_if_framework_selected($str)
        {
        
            if (strcmp($str,'select') === 0) {
            
                $this->form_validation->set_message('check_if_framework_selected', 'Please select a framework');
                return false;
            } else {
                return true;
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
        
    }

