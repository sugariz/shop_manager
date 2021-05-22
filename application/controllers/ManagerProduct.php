<?php
    class ManagerProduct extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("loadProduct");
        }
        
        function index(){
            $data["title"] = "Sản phẩm";
            $data["subview"] = "admin/ManagerProduct";
            $data["script"] = "manager_product";

            $data["productArray"] = $this->loadProduct->return_products();
            $data["typeArray"] = $this->loadProduct->return_types();
            $this->load->view('admin/master', $data);
        }
        
        function post() {
            if(isset($_COOKIE["gfg"])) {
                $array_id = explode(',', $_COOKIE["gfg"]);
                for($i = 0; $i < count($array_id); $i++) {
                    $this->loadProduct->delete_product($array_id[$i]);
                }
                $_COOKIE["gfg"] = null;
            }
            if(isset($_COOKIE["modify"])) {
                $array_modi = explode(',', $_COOKIE["modify"]);
                $data = [
                    "ten_sp" => $array_modi[1],
                    "thuonghieu" => $array_modi[2],
                    "ma_theloai" => $array_modi[3],
                    "hinhanh" => $array_modi[4],
                    "gia_sp" => $array_modi[5],
                    "soluong_sp" => $array_modi[6],
                    "chitiet_sp" => $array_modi[7]
                ];

                $this->loadProduct->update_product($array_modi[0], $data);
                
                $_COOKIE["modify"] = null;

                $arr['success'] = true;
                $arr['notif']  = '<div class="alert alert-success">
                  <i class="fa fa-check"></i> Sửa đổi thành công!
                </div>';
            return $this->output->set_output(json_encode($arr));
            }
        }
    }
?>