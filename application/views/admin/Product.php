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
                                <?php
                                if (isset($script)) {
                                    if ($script == "product") {
                                        echo '<script src="public/jsAdmin/loopProduct.js"></script>';
                                        echo '<script src="public/jsAdmin/getImage.js"></script>';
                                    }
                                }
                                ?>
                                <!--                            <div class="clearfix"></div>
                                                            <div id="capnhat" href="/shop_manager/ManagerProduct" class="container tab-pane fade"><br>
                                                                <a class="nav-link" href="/shop_manager/ManagerProduct">Cap nhat</a>
                                                            </div>-->
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

<script>
    $(document).ready(function () {
    $('#insertProduct').submit(function (e) {
        e.preventDefault();
        biodata();
    });
});

function biodata() {
    $.ajax({
        url: $("#insertProduct").attr('action'),
        type: 'post',
        cache: false,
        dataType: "json",
        data: $("#insertProduct").serialize(),
        success: function (data) {
            if ( data.success == true) {
                $('#notif').fadeIn(800, function () {
                    $("#notif").html(data.notif).fadeOut(5000).delay(800);
                });
            } else {
                $('#notif').html('<div class="alert alert-danger">Error!</div>')
            }
        },
        error: function (jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            $('#post').html(msg);
            $('#notif').html(msg);
        }

    });
}

</script>