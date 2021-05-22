<?php
    class mainUser extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("loadProduct");
        }
        function index(){
            $data["title"] = "Trang chủ";
            $data["view_page"] = "user/bodyTrangChu";
            $data["script"] = "user/scriptIndex";

            $data["productArray"] = $this->loadProduct->return_products();
            $data["typeArray"] = $this->loadProduct->return_types();
            $this->load->view('user/trangchu', $data);
        }
    }
?>