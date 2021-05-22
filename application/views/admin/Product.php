<div class="content-wrapper" style="min-height: 640px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <form action="<?php echo base_url('Main/post') ?>" method="post" id="insertProduct">
                <div class="col-md-12">
                    <div id="notif"></div>
                </div>
                <section class="product-menu">
                        <div class="col-12">
                            <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#them">Thêm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/shop_manager/ManagerProduct">Cập nhật</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="them" class="tab-pane active"><br>
                                    <form id="form-p" action="<?php echo base_url('ManagerProduct/post') ?>">
                                        <table class="table table-bordered" id="tableLoop">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Thương Hiệu</th>
                                                    <th>Loại</th>
                                                    <th>Hình ảnh</th>
                                                    <th>Giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Chi tiết sản phẩm</th>
                                                    <th><button class="btn btn-success btn-block" id="BarisBaru"><i class="fa fa-plus"></i>Thêm</button></th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <div class="box-footer">
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Lưu</button>
                                                <button type="reset" class="btn btn-default">Xóa toàn bộ</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>

    </div>

    <!-- /.container-fluid -->
</div>
<script>
    var tagOption = <?php
        $string = "'";
        foreach ($typeArray as $ele) {
            $tmp = '<option value="' . $ele["ten_theloai"] . '">' . $ele["ten_theloai"] . '</option>';
            $string .= $tmp;
        }
        $string .= "'";
        echo $string;
        ?>;
</script>
<script src="public/jsAdmin/loopProduct.js"></script>
<script src="public/jsAdmin/getImage.js"></script>