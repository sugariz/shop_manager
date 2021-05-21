<?php
    class ManagerNhaCungCap extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("LoadNhaCungCap");
        }
        
        function index(){
            $data["title"] = "Nhà cung cấp";
            $data["subview"] = "admin/ManagerNhaCungCap";
            $data["script"] = "NhaCungCap";

            $data["nhaCungCap"] = $this->LoadNhaCungCap->return_nhacungcap();
            $this->load->view('admin/master', $data);
        }
        
        public function post() {
            if(isset($_COOKIE["gfg"])) {
                $array_id = explode(',', $_COOKIE["gfg"]);
                for($i = 0; $i < count($array_id); $i++) {
                    $this->LoadNhaCungCap->delete_nhacungcap($array_id[$i]);
                }
                $_COOKIE["gfg"] = null;
            }
            
            if(isset($_COOKIE["modify"])) {
                $array_modi = explode(',', $_COOKIE["modify"]);
                $data = [
                    "ten_nhacungcap" => $array_modi[1],
                    "SDT" => $array_modi[2],
                    "email" => $array_modi[3],
                    "diachi" => $array_modi[4]
                ];

                $this->LoadNhaCungCap->update_nhacungcap($array_modi[0], $data);
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