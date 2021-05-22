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
        
        public function getListAt($id){
            $listSp=[];
            foreach($this->getList() as $key=>$value){
                if($value["ma_nhap"] == $id){
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
                "ma_nhap"=>$ma_nhap,
                "soluong"=>$soluong
            );
            $this->db->insert($this->_table,$data);
        }

        public function edit($id,$ma_nhap,$soluong){
            $data=array(
                "ma_sp"=>$id,
                "soluong"=>$soluong
            );
            $this->db->where("ma_nhap",$ma_nhap);
            try{
                $this->db->update($this->_table,$data);
            }catch(Exception $e){
            }
        }

        function check_khoaChinh($ma_sp,$ma_nhap){
            $arr = $this->getList();
            foreach($arr as $value){
                if($ma_sp == $value['ma_sp'] && $ma_nhap == $value['ma_nhap']){
                    return true;
                }
            }
            return false;
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