<?php
    class main extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            }
        function index(){
            $this->load->helper('url');
            $this->load->model("loadProduct");
            $data["typeArray"] = $this->loadProduct->return_types();
            $data["subview"] = "admin/Product";
            $this->load->view('admin/master', $data);
        }
    }
?>