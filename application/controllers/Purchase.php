<?php
    class purchase extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->helper("text");
            $this->load->model("purchase_model");
            $this->load->model("NhapKho_model");
            $this->load->model("SanPham_model");
            $this->load->model("Suplier_model");
        }
        function index(){
            // $data["data"] = $this->purchase_model->getPurchaseList();
            $data["data"]= $this->purchase_model->getPurchaseList();
            $data["subview"] = "admin/purchase_view";
            $data["title"] = "Purchase";
            $this->load->view("admin/master",$data);
        }
        function del($id){
            $this->purchase_model->delPurchase($id);
            $this->session->set_flashdata("flash_mess","Delete Success");
            redirect(base_url()."purchase");
        } 
        function add(){
            $data["subview"] = "admin/Purchase_add_view";
            $data["title"] = "Add Purchase";
            $this->load->view("admin/master",$data);
        }

        function addPurchase($id){
            //Mã nhập,thời gian,mã nhà cung cấp,số lượng,tổng cộng,ghi chú
            $date_time = date("Y-m-d h:i:s");
            $suplier = $_POST['suplier'];
            $note = $_POST['Note'];
            //Mã nhập, mã sản phẩm, số lượng
            $product_code = $_POST["product_code"];
            $quantity = $_POST["quantity"];
            $tong_soluong = array_sum($quantity);
            $total = 0;
            for($i=0;$i<count($product_code);$i++){
                $total+=$this->SanPham_model->getSanPhamAt($product_code[$i])['gia_sp']*$quantity[$i];
            }
            $this->purchase_model->addPurchase($id,$date_time,$suplier,$tong_soluong,$total,$note);
            for($i=0;$i<count($product_code);$i++){
                $this->NhapKho_model->add($product_code[$i],$id,$quantity[$i]);
            }
            redirect(base_url()."purchase");
        }
        
        function edit($id){
            $data["subview"] = "admin/Purchase/Purchase_edit_view";
            $data["title"] = "Edit Purchase";
            $data["data"] = $this->purchase_model->getPurchaseListAt($id);
            $data["id"] = $id;
            $this->load->view("admin/master",$data);
        }

        function editPurchase($id){
            $suplier = $_POST['suplier'];
            $note = $_POST['Note'];
            //Mã nhập, mã sản phẩm, số lượng
            $product_code = $_POST["product_code"];
            $quantity = $_POST["quantity"];
            $tong_soluong = array_sum($quantity);
            $total = 0;
            for($i=0;$i<count($product_code);$i++){
                $total+=$this->SanPham_model->getSanPhamAt($product_code[$i])['gia_sp']*$quantity[$i];
            }
            $this->purchase_model->edit($id,$suplier,$tong_soluong,$total,$note);
            for($i=0;$i<count($product_code);$i++){
                if($this->NhapKho_model->check_khoaChinh($product_code[$i],$id) !=true){
                    $this->NhapKho_model->edit($product_code[$i],$id,$quantity[$i]);
                }
            }
            redirect(base_url()."purchase");
        }

        function search($str=""){
                $str = convert_accented_characters(trim($str));
                $arrList = $this->purchase_model->getPurchaseList();
                $arrSearch = [];
                if($str == ""){
                    $arrSearch = $arrList;
                }
                else if(!empty($str)){
                    $str = strtolower($str);
                    foreach($arrList as $key=>$value){
                        if(strpos(strval($value['ma_nhap']),$str) !== false){
                            $arrSearch[] = $value;
                        }
                        else if(strpos(strval($value['thoigian_nhap']),$str) !== false){
                            $arrSearch[] = $value;
                        }
                        else if(strpos(convert_accented_characters(strtolower($value['ten_nhacungcap'])),$str)!== false){
                            $arrSearch[] = $value;
                        }
                        else if(strpos(strval($value['soluong']),$str)!== false){
                            $arrSearch[] = $value;
                        }
                        else if(strpos(strval($value['tongcong']),$str)!== false){
                            $arrSearch[] = $value;
                        }
                    }
                }
                $html = "";
                foreach($arrSearch as $key => $value){
                    $html.= "<tr role='row' data-purchase = '[\"$value[thoigian_nhap]\",\"$value[ma_nhap]\",\"$value[ten_nhacungcap]\",\"$value[soluong]\",\"$value[tongcong]\",\"$value[ghichu]\"]'>
                    <td class='checkboxes-cell checkboxes'><input type='checkbox' name='' id=''></td>
                    <td>$value[thoigian_nhap]</td>
                    <td>$value[ma_nhap]</td>
                    <td>$value[ten_nhacungcap]</td>
                    <td>".count($this->NhapKho_model->getListAt($value['ma_nhap']))."</td>
                    <td>$value[soluong]</td>
                    <td>$value[tongcong]</td>
                    <td>
                        <div class='btn-group'>
                            <a href='#' title='view' class='btn btn-view'><i class='fa fa-eye'></i></a>
                            <a href='/shop_manager/purchase/edit/' title='edit' class='btn btn-edit'><i class='fa fa-edit'></i></a>
                            <a href='/shop_manager/purchase/del/".$value['ma_nhap']."' title='delete' class='btn btn-del'><i class='fa fa-times'></i></a>
                        </div>
                    </td>
                    </tr>";
                
                }
                if(!empty($html)){
                    $html.="<script>
                    $(\"a.btn-view\").click(function(e){
                        e.preventDefault();
                        let thisdata = $(this).parent().parent().parent().data('purchase');
                        $(\".details-body\").html(\"<p><strong>Date: </strong>\"+thisdata[0]+\"</p><p><strong>Reference: </strong>\"+thisdata[1]+\"</p><p><strong>Supplier: </strong>\"+thisdata[2]+\"</p>\");
                        $(\".purchase-footer\").html(\"<p><strong>Note: </strong>\"+thisdata[5]+\"</p><p><strong>Create By:</strong> Vuong</p>\")
                        $(\".container-full-screen\").css(\"display\",\"block\");
                        $.get(\"/shop_manager/ajax_php/load_table_purchase_details?q=\"+thisdata[1],function(data,status){
                            $(\".product-purchase-list tbody\").html(data);
                        });
                    });
                    </script>";
                    echo $html;
                }else{
                    echo "<p style = ''>Không có kết quả tìm kiếm</p>";
                }
    }
}
?>