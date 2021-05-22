<?php
    class Sale extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->helper("text");
            $this->load->model("Sale_model");
            $this->load->model("Order_model");
        }
        function index(){
            $data["subview"] = "admin/Sale_view";
            $data["title"] = "Sale";
            $data["data"]= $this->Sale_model->getList();
            $this->load->view("admin/master",$data);
        }
        function del($id){
            $this->Sale_model->delSale($id);
            $this->session->set_flashdata("flash_mess","Delete Success");
            redirect(base_url()."Sale");
        }
        function add(){
            $data["subview"] = "admin/Sale_add_view";
            $data["title"]  = "Add Sale";
            $this->load->view("admin/master",$data);
        }
        function addSale($id){
                //Mã nhập,thời gian,mã nhà cung cấp,số lượng,tổng cộng,ghi chú
                $date_time = date("Y-m-d h:i:s");
                $customer = $_POST['customer'];
                $note = $_POST['Note'];
                $pay_method = $_POST['pay_method'];
                $pay_status = $_POST['pay_status'];
                //Mã nhập, mã sản phẩm, số lượng
                $product_code = $_POST["product_code"];
                $quantity = $_POST["quantity"];
                $tong_soluong = array_sum($quantity);
                $total = 0;
                for($i=0;$i<count($product_code);$i++){
                    $total+=$this->SanPham_model->getSanPhamAt($product_code[$i])['gia_sp']*$quantity[$i];
                }
                $this->Sale_model->addSale($id,$date_time,$customer,$tong_soluong,$pay_status,$pay_method,$total,$note);
                for($i=0;$i<count($product_code);$i++){
                    $this->Order_model->add($product_code[$i],$id,$quantity[$i]);
                }
                redirect(base_url()."Sale");
        }
        function search($str=""){
            $str = convert_accented_characters(trim($str));
            $arrList = $this->Sale_model->getList();
            $arrSearch = [];
            if($str == ""){
                $arrSearch = $arrList;
            }
            else if(!empty($str)){
                $str = strtolower($str);
                foreach($arrList as $key=>$value){
                    if(strpos(strval($value['ma_donhang']),$str) !== false){
                        $arrSearch[] = $value;
                    }
                    else if(strpos(strval($value['thoigian_dathang']),$str) !== false){
                        $arrSearch[] = $value;
                    }
                    else if(strpos(convert_accented_characters(strtolower($value['ten_kh'])),$str)!== false){
                        $arrSearch[] = $value;
                    }
                    else if(strpos(strval($value['soluong']),$str)!== false){
                        $arrSearch[] = $value;
                    }
                    else if(strpos(strval($value['tongcong']),$str)!== false){
                        $arrSearch[] = $value;
                    }
                    else if(strpos(strval($value['trangthai_thanhtoan']),$str)!== false){
                        $arrSearch[] = $value;
                    }
                    else if(strpos(strval($value['phuongthuc_thanhtoan']),$str)!== false){
                        $arrSearch[] = $value;
                    }
                }
            }
            $html = "";
            foreach($arrSearch as $key => $value){
                $html.="<tr role='row' data-sale = '[\"$value[thoigian_dathang]\",\"$value[ma_donhang]\",\"$value[ten_kh]\",\"$value[soluong]\",\"$value[trangthai_thanhtoan]\",\"$value[phuongthuc_thanhtoan]\",\"$value[tongcong]\",\"$value[ghichu]\"]'>
                <td>$value[thoigian_dathang]</td>
                <td>$value[ma_donhang]</td>
                <td>$value[ten_kh]</td>
                <td>".count($this->Order_model->getListAt($value['ma_donhang']))."</td>
                <td>$value[soluong]</td>
                <td>$value[phuongthuc_thanhtoan]</td>
                <td>$value[trangthai_thanhtoan]</td>
                <td>$value[tongcong]</td>
                <td>
                    <div class='btn-group'>
                        <a href='#' title='view' class='btn btn-view'><i class='fa fa-eye'></i></a>
                        <a href='/shop/manager/sale/edit/' title='edit' class='btn btn-edit'><i class='fa fa-edit'></i></a>
                        <a href='/shop_manager/sale/del/".$value['ma_donhang']."' title='delete' class='btn btn-del'><i class='fa fa-times'></i></a>
                    </div>
                </td>
            </tr>";
            
            }
            if(!empty($html)){
                $html.="<script>
                $(\"a.btn-view\").click(function(e){
                    e.preventDefault();
                    let thisdata = $(this).parent().parent().parent().data('sale');
                    $(\".details-body\").html(\"<p><strong>Date: </strong>\"+thisdata[0]+\"</p><p><strong>Reference: </strong>\"+thisdata[1]+\"</p><p><strong>Supplier: </strong>\"+thisdata[2]+\"</p>\");
                    $(\".sale-footer\").html(\"<p><strong>Note: </strong>\"+thisdata[7]+\"</p><p><strong>Create By:</strong> Vuong</p>\")
                    $(\".container-full-screen\").css(\"display\",\"block\");
                    $.get(\"/shop_manager/ajax_php/load_table_sale_details?q=\"+thisdata[1],function(data,status){
                        $(\".product-sale-list tbody\").html(data);
                    });
                });
                </script>";
                echo $html;
            }else{
                echo "<p style = ''>Không có kết quả tìm kiếm</p>";
            }
}
        function edit(){
            $data["subview"] = "admin/Sale/Sale_edit_view";
            $data["title"] = "Edit Sale";
            $this->load->view("admin/master",$data);
        }
    }
?>