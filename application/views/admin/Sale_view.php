<!-- <?php print_r($data); ?> -->
<section>
        <div class="table-wrapper">
            <div class="btn-add add-order">
                <a href="/shop_manager/Sale/add"><i class="fa fa-plus"></i> Add Sale</a>
            </div>
            <div class="small-wrapper">
                <div class="table-length">
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
                    <button class="btn btn-pdf">PDF</button>
                    <button class="btn btn-print">Print</button>
                    <button class="btn btn-col-visib">Column visibility <i class="fa fa-caret-down"></i></button>
                </div>
            </div>
            <table id="order_table">
                <thead>
                    <tr role="row">
                        <th>Date</th>
                        <th>Invoice No</th>
                        <th>Customer</th>
                        <th>Items</th>
                        <th>Quantity</th>
                        <th>Pay method</th>
                        <th>Pay status</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $total = 0;
                        foreach($data as $key => $value){
                            $total += $value['tongcong'];
                            echo "<tr role='row' data-sale = '[\"$value[thoigian_dathang]\",\"$value[ma_donhang]\",\"$value[ten_kh]\",\"$value[soluong]\",\"$value[trangthai_thanhtoan]\",\"$value[phuongthuc_thanhtoan]\",\"$value[tongcong]\",\"$value[ghichu]\"]'>
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
                    ?>
                </tbody>
                <tfoot>
                    <th rowspan="1" colspan="1">Total:</th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1" class="total">
                        <?php
                            echo $total;
                        ?>
                </th>
                    <th rowspan="1" colspan="1"></th>
                </tfoot>
            </table>
        </div>
        <div class="container-full-screen">  
            <div class="sale-details">
                <div class="details-head">
                    <h5>Purchase Details</h5>
                    <button><i class="fa fa-print" aria-hidden="true"> Print</i></button>
                    <h3>X</h3>
                </div>
                <div class="details-body"></div>
                <table class="table product-sale-list">
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
                <div class="sale-footer">
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url(); ?>public/js/sale.js"></script>