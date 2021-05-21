<?php
    class Main extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
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

        public function index(){
            $this->load->helper('url');
            $this->load->model("loadProduct");
            $data["typeArray"] = $this->loadProduct->return_types();
            $data["subview"] = "admin/Product";
            $data["script"] = "product";
            $this->load->view('admin/master', $data);
        }

        public function post() {
            $array = $this->loadProduct->return_types();
            $i = 0;
            $nameProduct = $this->input->post("inp_nameProduct");
            $nameCategori = $this->input->post("inp_categori");
            $nameTrademark = $this->input->post("inp_trademark");
            $price = $this->input->post("inp_price");
            $amount = $this->input->post("inp_amount");
            $picture = $this->input->post("inpFile");
            $detail = $this->input->post("inp_detail");

            foreach ($nameProduct as $row) {
                $data = [
                    'ten_sp' => $row,
                    'ma_theloai' => (int)($this->find($array, $nameCategori[$i], "ten_theloai")["ma_theloai"]),
                    'thuonghieu' => $nameTrademark[$i],
                    'gia_sp' => (int)$price[$i],
                    'soluong_sp' => (int)$amount[$i],
                    'hinhanh' => $picture[$i],
                    'chitiet_sp' => $detail[$i]
                ];
                    $insert = $this->db->insert('sanpham', $data);
                    if($insert) {
                        $i++;
                    }
            }
            $arr['success'] = true;
            $arr['notif']  = '<div class="alert alert-success">
              <i class="fa fa-check"></i> Thêm thành công!
            </div>';
            return $this->output->set_output(json_encode($arr));
        }

        public function deleteProduct() {
            $this->db->delete('sanpham', array('ma_sp' => $id)); 

            return $this->output->set_output(json_encode($arr));
        }

        private function find($array, $ele, $key) {
            foreach($array as $element) {
                if($element[$key] === $ele)
                    return $element;
            }

        return null;
        }
    
    }
?>