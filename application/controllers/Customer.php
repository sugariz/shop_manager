<?php
    class Customer extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("LoadCustomer");
        }
        
        function index(){
            $data["title"] = "Customer";
            $data["subview"] = "admin/Customer";
            $data["script"] = "Customer";

            $data["nhaCungCap"] = $this->LoadCustomer->return_customer();
            $this->load->view('admin/master', $data);
        }
        
        public function post() {
            if(isset($_COOKIE["gfg"])) {
                $array_id = explode(',', $_COOKIE["gfg"]);
                for($i = 0; $i < count($array_id); $i++) {
                    $this->LoadCustomer->delete_customer($array_id[$i]);
                }
                $_COOKIE["gfg"] = null;
            }
            
            if(isset($_COOKIE["modify"])) {
                $array_modi = explode(',', $_COOKIE["modify"]);
                $data = [
                    "username" => $array_modi[1],
                    "ten" => $array_modi[2],
                    "email" => $array_modi[3],
                    "SDT" => $array_modi[4],
                    "diachi" => $array_modi[5],
                    "chucvu" => $array_modi[6]
                ];

                $this->LoadCustomer->update_customer($array_modi[0], $data);
            }
            $_COOKIE["modify"] = null;
            $arr['success'] = true;
            $arr['notif']  = '<div class="alert alert-success">
              <i class="fa fa-check"></i> Thêm thành công!
            </div>';
            return $this->output->set_output(json_encode($arr));

        }
    }
 
?>