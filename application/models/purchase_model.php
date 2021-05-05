<?php
    class purchase_model extends CI_Model{
        protected $_table = "danhsachnhap";
        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        function getPurchaseList(){
            $this->db->select("ma_nhap,thoigian_nhap,ma_nhacungcap,soluong,tongcong,ghichu");
            return $this->db->get($this->_table)->result_array();
        }

        function countAll(){
            return $this->db->count_all($this->_table);
        }
    }
?>