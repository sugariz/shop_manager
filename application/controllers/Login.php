<?php
    class Login extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("LoadCustomer");
        }
        function index(){
            $data["title"] = "Đăng nhập";
            $this->load->view('admin/login', $data);
        }
        function post() {
            $signinpassword = $this->input->post("signinpassword");
            $signinname = $this->input->post("signinname");
            $customer = $this->LoadCustomer->return_customer();
            foreach ($customer as $row) {
                if($row["username"] == $signinname && $row["matkhau"])
                    redirect(base_url()."Main");
            }
            echo "Đăng nhập thất bại";
        }
    }
?>