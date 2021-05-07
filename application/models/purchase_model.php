<?php
    class purchase_model extends CI_Model{
        protected $_table = "danhsachnhap";
        function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model("suplier_model");
        }

        function getPurchaseList(){
            $this->db->select("ma_nhap,thoigian_nhap,ma_nhacungcap,soluong,tongcong,ghichu");
            $data = $this->db->get($this->_table)->result_array();
            $suplier_list = $this->suplier_model->getList();
            for($i=0;$i<count($data);$i++){
                foreach($suplier_list as $key2=>$value2){
                    if($data[$i]["ma_nhacungcap"] === $value2["ma_nhacungcap"]){
                        $data[$i]["ten_nhacungcap"] = $value2["ten_nhacungcap"];
                        continue;
                    }
                }
            }
            return $data;
        }

        function countAll(){
            return $this->db->count_all($this->_table);
        }

        function delPurchase($id){
            
        }
    }
?>