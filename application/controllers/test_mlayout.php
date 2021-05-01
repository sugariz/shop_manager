<?php
    class test_mlayout extends CI_Controller{
        function __construct()
        {
            parent::__construct();
        }
        function index(){
            $data["title"]="Layout Master";
            $data["subview"]="";
            $this->load->view("mlayout",$data);
        }
    }
?>