<?php
    class SanPham_model extends CI_Model{
        protected $_table = "sanpham";
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        public function getList(){
            $this->db->select("ma_sp,ten_sp,ma_theloai,thuonghieu,gia_sp,soluong_sp,hinhanh,chitiet_sp");
            return $this->db->get($this->_table)->result_array();
        }
        function countAll(){
            return $this->db->count_all($this->_table);
        }
        public function getSanPhamAt($id){
            foreach($this->getList() as $key=>$value){
                if($value["ma_sp"] == $id){
                    return $value;
                }
            }
            return -1;
        }
    }
?>