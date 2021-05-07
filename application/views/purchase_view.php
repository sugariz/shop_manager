        <section>
                <div class="table-wrapper">
                    <div class="btn-add add-purchase">
                        <a href="#"><i class="fa fa-plus"></i> Add Purchase</a>
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
<!--                            <tr role="row" data-purchase="">
                                <td class="checkboxes-cell checkboxes"><input type="checkbox" name="" id=""></td>
                                <td>2021-04-28 18:35:22</td>
                                <td>0835927309</td>
                                <td>Đoàn Minh Vương</td>
                                <td>1</td>
                                <td>1</td>
                                <td>500</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" title="view" class="btn btn-view"><i class="fa fa-eye"></i></a>
                                        <a href="#" title="edit" class="btn btn-edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" title="delete" class="btn btn-del"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr> -->
                            <?php
                                foreach($data as $key => $value){
                                    echo "<tr role='row' data-purchase=''>
                                    <td class='checkboxes-cell checkboxes'><input type='checkbox' name='' id=''></td>
                                    <td>$value[thoigian_nhap]</td>
                                    <td>$value[ma_nhap]</td>
                                    <td>$value[ten_nhacungcap]</td>
                                    <td></td>
                                    <td>$value[soluong]</td>
                                    <td>$value[tongcong]</td>
                                    <td>
                                        <div class='btn-group'>
                                            <a href='#' title='view' class='btn btn-view'><i class='fa fa-eye'></i></a>
                                            <a href='#' title='edit' class='btn btn-edit'><i class='fa fa-pencil'></i></a>
                                            <a href='#' title='delete' class='btn btn-del'><i class='fa fa-times'></i></a>
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
            </section>

            <script src="public/js/purchase.js"></script>