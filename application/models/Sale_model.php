<?php
    class Sale_model extends CI_Model{
        protected $_table = "donhang";
        function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model("customer_model");
            $this->load->model("Order_model");
            $this->load->model("SanPham_model");
        }
        function getList(){
            $this->db->select("ma_donhang,thoigian_dathang,ma_kh,soluong,trangthai_thanhtoan,phuongthuc_thanhtoan,tongcong,ghichu");
            $arr = $this->db->get($this->_table)->result_array();
            $customer_list = $this->customer_model->getList();
            for($i=0;$i < count($arr);$i++){
                foreach($customer_list as $key2=>$value2){
                    if($arr[$i]["ma_kh"] === $value2["ma_kh"]){
                        $arr[$i]["ten_kh"] = $value2["ten_kh"];
                        continue;
                    }
                }
            }
            return $arr;
        }
        function getSaleListAt($id){
            foreach($this->getList() as $key=>$value){
                if($id == $value["ma_donhang"]){
                    return $value;
                }
            }
            return -1;
        }
        function delSale($id){
            $this->Order_model->delBySaleID($id);
            $this->db->where("ma_donhang",$id);
            $this->db->delete($this->_table);
        }
        function addSale($ma_nhap,$thoigian_nhap,$ma_nhacungcap,$soluong,$pay_status,$pay_method,$tongcong,$ghichu){
            $data = array(
                "ma_donhang"=>intval($ma_nhap),
                "thoigian_dathang"=>$thoigian_nhap,
                "ma_kh"=>intval($ma_nhacungcap),
                "soluong"=>intval($soluong),
                "trangthai_thanhtoan"=>$pay_status,
                "phuongthuc_thanhtoan"=>$pay_method,
                "tongcong"=>intval($tongcong),
                "ghichu"=>$ghichu
            );
            $this->db->insert($this->_table,$data);
        }
    }
?>