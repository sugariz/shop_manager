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

        function getPurchaseListAt($id){
            foreach($this->getPurchaseList() as $key=>$value){
                if($id == $value["ma_nhap"]){
                    return $value;
                }
            }
            return -1;
        }


        function addPurchase($ma_nhap,$thoigian_nhap,$ma_nhacungcap,$soluong,$tongcong,$ghichu){
            $data = array(
                "ma_nhap"=>intval($ma_nhap),
                "thoigian_nhap"=>$thoigian_nhap,
                "ma_nhacungcap"=>intval($ma_nhacungcap),
                "soluong"=>intval($soluong),
                "tongcong"=>intval($tongcong),
                "ghichu"=>$ghichu
            );
            $this->db->insert($this->_table,$data);
        }

        function delPurchase($id){
            $this->NhapKho_model->delByPurchaseID($id);
            $this->db->where("ma_nhap",$id);
            $this->db->delete($this->_table);
        }

        function edit($ma_nhap,$ma_nhacungcap,$soluong,$tongcong,$ghichu){
            $data = array(
                "ma_nhacungcap"=>$ma_nhacungcap,
                "soluong"=>$soluong,
                "tongcong"=>$tongcong,
                "ghichu"=>$ghichu
            );
            $this->db->where("ma_nhap",$ma_nhap);
            if($this->db->update($this->_table,$data)){
                echo "Thành công";
            }
            else{
                echo "Thất bại";
            }
        }
    }
?>