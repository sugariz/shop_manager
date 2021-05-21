<?php
    class mainUser extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("loadProduct");
            session_start();
            if(!isset($_SESSION["productArray"])) {
                $_SESSION["productArray"] = $this->loadProduct->return_products();
            }
            if(!isset($_SESSION["typeArray"]))
                $_SESSION["typeArray"] = $this->loadProduct->return_types();
            if(!isset($_SESSION["typeArray"]))
                $_SESSION["typeArray"] = $this->loadProduct->return_types();
        }
        function index(){
            $data["title"] = "Trang chủ";
            $data["view_page"] = "user/bodyTrangChu";
            $data["script"] = "user/scriptIndex";

            $data["productArray"] = $_SESSION["productArray"];
            $data["typeArray"] = $_SESSION["typeArray"];
            $this->load->view('user/trangchu', $data);
        }
    }
?>