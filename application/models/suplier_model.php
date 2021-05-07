<?php
    class suplier_model extends CI_Model{
        protected $_table = "nhacungcap";
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function getList(){
            $this->db->select("ma_nhacungcap,ten_nhacungcap,SDT,email,diachi");
            return $this->db->get($this->_table)->result_array();
        }
    }
?>