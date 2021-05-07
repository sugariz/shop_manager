<?php
    class NhapKho_model extends CI_Model{
        protected $_table="nhap";
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function getList(){
            $this->db->select("ma_sp,ma_nhap,soluong");
            return $this->db->get($this->_table)->result_array();
        }
        public function delByPurchaseID($id){
            $this->db->where("ma_nhap",$id);
            $this->db->delete($this->_table);
        }
        public function delByProductID($id){
            $this->db->where("ma_sp",$id);
            $this->db->delete($this->_table);
        }
    }

?>