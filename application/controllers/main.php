<?php
    class main extends CI_Controller{
        function __construct()
        {
            parent::__construct();
        }
        function index(){
            $data["title"]="Shop Management";
            $this->load->view("mlayout",$data);
        }
    }
?>