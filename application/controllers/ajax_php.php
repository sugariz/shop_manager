<?php
    class ajax_php extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("NhapKho_model");
            $this->load->model("SanPham_model");
            $this->load->model("purchase_model");
        }
        public function load_table_purchase_details(){
            $q = intval($_GET['q']);
            $stt = 0;
            $arr = $this->NhapKho_model->getListAt($q);
            $html="";
            foreach($arr as $key=>$value){
                $stt++;
                $html.= "<tr>
                <td><strong>$stt</strong></td>
                <td>".$this->SanPham_model->getSanPhamAt($value['ma_sp'])['ten_sp']."</td>
                <td>$value[soluong]</td>
                <td>".$this->SanPham_model->getSanPhamAt($value['ma_sp'])['gia_sp']."</td>
                <td>".$this->SanPham_model->getSanPhamAt($value['ma_sp'])['gia_sp'] * $value['soluong']."</td>
                </tr>";
            }   
            $html.="<tr>
            <td colspan='2'><strong>Total</strong></td>
            <td>".$this->purchase_model->getPurchaseListAt($q)['soluong']."</td>
            <td></td>
            <td>".$this->purchase_model->getPurchaseListAt($q)['tongcong']."</td>
            </tr>
            <tr>";
            echo $html;
        }
    }

?>