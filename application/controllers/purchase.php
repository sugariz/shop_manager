<?php
    class purchase extends CI_Controller{
        function __construct()
        {
            parent::__construct();
        }
        function index(){
            $data["subview"] = "purchase_view";
            $data["title"] = "Purchase";
            $this->load->view("mlayout",$data);
        }
    }
?>