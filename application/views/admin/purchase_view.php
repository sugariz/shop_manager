
<section>
        <div class="table-wrapper">
            <div class="btn-add add-purchase">
                <a href="/shop_manager/purchase/add"><i class="fa fa-plus"></i> Add Purchase</a>
            </div>
            <div class="small-wrapper">
                <div class="table-length" style="visibility: hidden;">
                    <p>
                        Show
                        <select name="" id="" class="length-of-table">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="-1">All</option>
                        </select>
                        entries
                    </p>
                </div>
                <div class="table-filter">
                <p>
                    Search
                    <input type="search" name="" id="">
                </p>
                </div>
                <div class="btn-convert-table">
                    <button class="btn btn-print">Print</button>
                </div>
            </div>
            <table id="purchase_table">
                <thead>
                    <tr role="row">
                        <th class="checkboxes-select-all checkboxes"><input type="checkbox"></th>
                        <th>Date</th>
                        <th>Reference No</th>
                        <th>Supplier</th>
                        <th>Items</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        foreach($data as $key => $value){
                            echo "<tr role='row' data-purchase = '[\"$value[thoigian_nhap]\",\"$value[ma_nhap]\",\"$value[ten_nhacungcap]\",\"$value[soluong]\",\"$value[tongcong]\",\"$value[ghichu]\"]'>
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
                                    <a href='/shop_manager/purchase/edit/".$value['ma_nhap']."' title='edit' class='btn btn-edit edit'><i class='fa fa-edit'></i></a>
                                    <a href='/shop_manager/purchase/del/".$value['ma_nhap']."' title='delete' class='btn btn-del'><i class='fa fa-times'></i></a>
                                </div>
                            </td>
                        </tr>";
                        }
                    ?>
                </tbody>
                <tfoot>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1">Total:</th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1">
                    <?php
                        $total=0;
                        foreach($data as $key=>$value){
                            $total+=$value["tongcong"];
                        }
                        echo $total;
                    ?>
                </th>
                    <th rowspan="1" colspan="1"></th>
                </tfoot>
            </table>
        </div>
        <div class="container-full-screen">  
            <div class="purchase-details">
                <div class="details-head">
                    <h5>Purchase Details</h5>
                    <button><i class="fa fa-print" aria-hidden="true"> Print</i></button>
                    <h3>X</h3>
                </div>
                <div class="details-body">
                </div>
                <table class="table product-purchase-list">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Cost</th>
                            <th>SubTotal</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <div class="purchase-footer">
                </div>
            </div>
        </div>
    </section>
<script src="<?php echo base_url(); ?>public/js/purchase.js"></script>