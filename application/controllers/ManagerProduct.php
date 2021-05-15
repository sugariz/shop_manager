<?php
    class ManagerProduct extends CI_Controller{
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
            $data["title"] = "Sản phẩm";
            $data["subview"] = "admin/ManagerProduct";

            $data["productArray"] = $_SESSION["productArray"];
            $data["typeArray"] = $_SESSION["typeArray"];
            $this->load->view('admin/master', $data);
        }
        
        function post() {
            $array_id = explode( ',', $_COOKIE["gfg"] );
            for($i = 0; $i < count($array_id); $i++) {
                $this->loadProduct->delete_product($array_id[$i]);
            }
            $_COOKIE["gfg"] = null;
        }
    }
?>