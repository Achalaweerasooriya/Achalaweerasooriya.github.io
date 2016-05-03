<?php

    class ClientModel extends CI_Model
    {
    
    /*
    * Function for Get Projects
    * @param       string  $client  Input string
    * @return      result array   
    */

        public function get_projects($client)
        {
            $this->db->where('client', $client);
            $query = $this->db->get('project');
            return $query->result_array();
        }
    
    /*
    * Function for Get Project Manager's user name
    * @param       integer  $projectmanager  Input integer
    * @return      row array   
    */
        public function get_project_manager($projectmanager)
        {
            $this->db->select('user_name');
            $this->db->where('user_id', $projectmanager);
            $query = $this->db->get('user');
            return $query->row_array();
        }
    
    /*
    * Function for Get Scrum Master's user name
    * @param       integer  $scrum_master  Input integer
    * @return      row array   
    */
        public function get_scrum_master($scrum_master)
        {
            $this->db->select('user_name');
            $this->db->where('user_id', $scrum_master);
            $query = $this->db->get('user');
            return $query->row_array();
        }

    }