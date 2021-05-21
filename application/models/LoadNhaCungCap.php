<?php
    class LoadNhaCungCap extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        
        function return_nhacungcap() {
            $result = $this->db->query("SELECT * FROM nhacungcap");

            return $result->result_array();
        }
        
        function delete_nhacungcap($ma_cc) {
            $result = $this->db->query("DELETE FROM nhacungcap where ma_nhacungcap = '".$ma_cc."'");
        }
        
        function update_nhacungcap($name, $row) {
            $this->db->where('ma_nhacungcap', $name);
            $this->db->update('nhacungcap', $row);
        }
        
    }
?>
