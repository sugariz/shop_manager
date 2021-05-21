<?php
    class LoadCustomer extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        
        function return_customer() {
            $result = $this->db->query("SELECT * FROM taikhoan");

            return $result->result_array();
        }
        
        function delete_customer($ma_cc) {
            $result = $this->db->query("DELETE FROM taikhoan where ma_tk = '".$ma_cc."'");
        }
        
        function update_customer($name, $row) {
            $this->db->where('ma_tk', $name);
            $this->db->update('taikhoan', $row);
        }
        
    }
?>
