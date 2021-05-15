<?php
    class userGiayNam extends CI_Controller{
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
        public function index() {
            $data["script"] = "user/scriptProduct";
            $this->load->model("loadProduct");
            $data["productArray"] = $_SESSION["productArray"];
            $data["typeArray"] = $_SESSION["typeArray"];
            $data["title"] = "Giày nam";
            $data["view_page"] = "user/bodyGiayNam";
            $this->load->view('user/trangchu', $data);
        }
    }
?>