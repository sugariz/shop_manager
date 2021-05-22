<?php
    class customer_model extends CI_Model{
        protected $_table = "khachhang";
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        function getList(){
            $this->db->select("ma_kh,ten_kh,SDT,email,diachi");
            return $this->db->get($this->_table)->result_array();
        }
    }
?>