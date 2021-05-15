<?php
    class LoadProduct extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        
        function return_products() {
            $result = $this->db->query("SELECT * FROM sanpham");

            return $result->result_array();
        }
        
        function return_types() {
            $result = $this->db->query("SELECT * FROM theloai");

            return $result->result_array();
        }
        
        function delete_product($ma_sp) {
            $result = $this->db->query("DELETE FROM sanpham where ma_sp = '".$ma_sp."'");
        }
        
    }
?>
