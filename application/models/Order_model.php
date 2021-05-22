<?php
    class Order_model extends CI_Model{
        protected $_table = "dathang";
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        function getList(){
            $this->db->select("ma_sp,ma_donhang,soluong");
            return $this->db->get($this->_table)->result_array();
        }
        function getListAt($id){
            $listSp = [];
            foreach($this->getList() as $key=>$value){
                if($value["ma_donhang"] == $id){
                    array_push($listSp,$value);
                }
            }
            return $listSp;
        }

        public function add($id,$ma_nhap,$soluong){
            $id = intval($id);
            $ma_nhap = intval($ma_nhap);
            $soluong = intval($soluong);
            $data=array(
                "ma_sp"=>$id,
                "ma_donhang"=>$ma_nhap,
                "soluong"=>$soluong
            );
            $this->db->insert($this->_table,$data);
        }

        function delBySaleID($id){
            $this->db->where("ma_donhang",$id);
            $this->db->delete($this->_table);
        }
    }

?>