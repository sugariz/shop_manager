<?php
    class purchase extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model("purchase_model");
            $this->load->model("NhapKho_model");
            $this->load->model("SanPham_model");
        }
        function index(){
            $data["data"] = $this->purchase_model->getPurchaseList();
            $data["subview"] = "purchase_view";
            $data["title"] = "Purchase";
            $this->load->view("admin/master",$data);
        }
        function del($id){
            $this->purchase_model->delPurchase($id);
            $this->session->set_flashdata("flash_mes    s","Delete Success");
            redirect(base_url()."purchase");
        }
    }
?>