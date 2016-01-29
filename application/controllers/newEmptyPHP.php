<?php

class newEmptyPHP extends CI_Controller{
    function index()
    {
        $this->load->view('PMDashboard');
        
    }
    function ec(){
        echo base_url('');
        echo "_include/Dashboard/css/fonts.css";
    }
}
