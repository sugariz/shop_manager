<div class="content-wrapper" style="min-height: 640px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <form action="<?php echo base_url('Main/post') ?>" method="post" id="insertProduct">
                <div class="col-md-12">
                    <div id="notif"></div>
                </div>
                <div class="col-12">
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
                </div>
                <div class="box-footer">
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Lưu</button>
                        <button type="reset" class="btn btn-default">Xóa toàn bộ</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->

<!-- /.content -->
<div class="user">

</div>