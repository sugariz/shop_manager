<div class="content-wrapper" style="min-height: 640px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <form action="<?php echo base_url('ManagerNhaCungCap/post') ?>" method="post" id="modifyNhaCungCap">
                <section class="product-menu">
                    <div class="col-12">
                        <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#them">Cập nhật</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/shop_manager/ManagerNhaCungCap">Thêm</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="them" class="tab-pane active"><br>
                                    <div class="col-md-12">
                                        <div id="notif"></div>
                                    </div>
                                    <div class="col-12">
                                        <table class="table table-bordered" id="tableLoop">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Tên nhà cung cấp</th>
                                                    <th>SĐT</th>
                                                    <th>Email</th>
                                                    <th>Địa chỉ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < count($nhaCungCap); $i++) {
                                                    echo "<tr>"
                                                    . "<td>"
                                                    . '<input id="ma_sp"type="text" name="inp_maNhaCC" class="form-control inp_nameProduct" placeholder="" required="" value="' . $nhaCungCap[$i]["ma_nhacungcap"] . '">'
                                                    . "</td>"
                                                    . "<td>"
                                                    . '<input type="text" name="inp_NhaCungCap[]" class="form-control inp_nameProduct" placeholder="" required="" value="' . $nhaCungCap[$i]["ten_nhacungcap"] . '">'
                                                    . "</td>"
                                                    . "<td>"
                                                    . '<input type="text" name="inp_SoDienThoai" class="form-control inp_nameProduct" placeholder="" required="" value="' . $nhaCungCap[$i]["SDT"] . '">'
                                                    . "</td>"
                                                    . "<td>"
                                                    . '<input type="text" name="inp_email" class="form-control inp_nameProduct" placeholder="" value="' . $nhaCungCap[$i]["email"] . '">'
                                                    . "</td>"
                                                    . "<td>"
                                                    . '<input type="text" name="inp_diachi" class="form-control inp_nameProduct" placeholder="" value="' . $nhaCungCap[$i]["diachi"] . '">'
                                                    . "</td>"
                                                    . "<td>"
                                                    . '<a class="btn btn-sm btn-primary" data-toggle="tooltip" title="Sửa" id="modiNhaCC"><i class="fa fa-edit"></i></a>'
                                                    . "</td>"
                                                    . "<td>"
                                                    . '<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Xóa" id="deleteNhaCC"><i class="fa fa-times"></i></a>'
                                                    . "</td>"
                                                    . "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="box-footer">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Lưu</button>
                                            <button type="reset" class="btn btn-default">Xóa toàn bộ</button>
                                        </div>
                                    </div>
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
    var deleteArray = [];
    var modifyArray = [];
</script>

<script>
    $(document).on('click', '#deleteNhaCC', function (e) {
        e.preventDefault();
        var Nomor = 1;
        row = $(this).parent().parent()[0].innerHTML;
        deleteArray.push($(row)[0].lastChild.value);
        document.cookie = escape("gfg") + "=" + escape(deleteArray);
        $(this).parent().parent().remove();
        $('tableLoop tbody tr').each(function () {
            $(this).find('td:nth-child(1)').html(Nomor);
            Nomor++;
        });
    });
</script>

<script>
    $(document).on('click', '#modiNhaCC', function (e) {
        row = $(this).parent().parent()[0].innerHTML;
        var index = $(row)[0].lastElementChild.value;
        var realTimeRow = document.getElementById("tableLoop").rows[index];
        var realRow = [];
        realRow.push(realTimeRow.cells[0].lastChild.value);
        realRow.push(realTimeRow.cells[1].lastChild.value);
        realRow.push(realTimeRow.cells[2].lastChild.value);
        realRow.push(realTimeRow.cells[3].lastChild.value);
        realRow.push(realTimeRow.cells[4].lastChild.value);
        modifyArray.push(realRow);
        document.cookie = escape("modify") + "=" + escape(modifyArray);
        console.log(document.cookie);
    });
</script>

<script>
    $(document).ready(function () {
        $('#modifyNhaCungCap').submit(function (e) {
            e.preventDefault();
            biodata();
        });
    });

    function biodata() {
        $.ajax({
            url: $("#modifyNhaCungCap").attr('action'),
            type: 'post',
            cache: false,
            dataType: "json",
            data: $("#modifyNhaCungCap").serialize(),
            success: function (data) {
                if (data.success == true) {
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