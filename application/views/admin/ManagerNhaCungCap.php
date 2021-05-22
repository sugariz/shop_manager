<style>
    img {
        width: 50%;
        height: auto;
    }
    #ma_sp {
        witdh: 50px;
    }
</style>
<div class="content-wrapper" style="min-height: 640px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <form action="<?php echo base_url('NhaCungCap/post') ?>" method="post" id="insertNhaCungCap">
                <div class="col-md-12">
                    <div id="notif"></div>
                </div>
                <div class="col-12">
                    <table class="table table-bordered" id="tableLoop">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nhà cung cấp</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
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

<script src="public/jsAdmin/loopNhaCungCap.js"></script>