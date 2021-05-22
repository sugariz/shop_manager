<link rel="stylesheet" href="/public/css/style.css">
<?php
$reference = mt_rand(100000,999999);;?>
<section class="add-purchase-form">
    <div class="container-add">
        <h4>Add Purchase</h4>
        <form action="addPurchase/<?php echo $reference;?>" method="post">
                <div class="row_1">
                    <div class="col_1">
                        <label>Reference No</label>
                        <p><?php echo $reference; ?></p>
                    </div>
                    <div class="col_1">
                        <label>Suplier</label>
                        <select name="suplier">
                            <?php
                                $arrSuplier = $this->Suplier_model->getList();
                                foreach($arrSuplier as $value){
                                    echo "<option value='$value[ma_nhacungcap]'>$value[ten_nhacungcap]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row_2">
                    <label>Select Product</label>
                    <!-- <input type="text" name="select_product" placeholder="Please type product name and select"> -->
                    <select name="select_product" id="a">
                        <?php
                            $arrProduct = $this->SanPham_model->getList();
                            foreach($arrProduct as $value){
                                echo "<option value='$value[ma_sp]' data-select='[\"$value[ten_sp]\",\"$value[gia_sp]\"]'>$value[ten_sp]-$value[gia_sp]</option>";
                            }
                        ?>
                    </select>
                    <a href="#" id="select_p" style="margin-left: 10px; border:1px solid #333; color:white; background: #7c5cc4">Select</a>
                </div>
                <div class="row_3">
                    <h5>Order Table*</h5>
                    <table id="myTable_orderList">
                        <thead>
                            <tr role="row">
                                <th>Name</th>
                                <th>Code</th>
                                <th>Quantity</th>
                                <th>Product Cost</th>
                                <th>SubTotal</th>
                                <th><i class="fa fa-trash" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row"></tr>
                        </tbody>
                        <tfoot>
                            <tr role="row">
                                <th></th>
                                <th></th>
                                <th class="quantity"></th>
                                <th></th>
                                <th class="total"></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="row_4">
                    <h5>Note</h5>
                    <textarea name="Note"  cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Submit">
        </form>
        
    </div>
    <script>
    $(document).ready(function(){
        $(".delete_choice").click(function(){
        $(this).parent().parent().remove();
    });
    });
</script>
</section>
<script src="<?php echo base_url() ?>/public/js/purchase_add.js"></script>