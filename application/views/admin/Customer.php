<!--<style>
    img {
        width: 50%;
        height: auto;
    }
    #ma_sp {
        witdh: 50px;
    }
</style>-->

<div class="content-wrapper" style="min-height: 640px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <form action="<?php echo base_url('Customer/post') ?>" method="post" id="modifyCustomer">
                <div class="col-md-12">
                    <div id="notif"></div>
                </div>
                <div class="col-12">
                    <table class="table table-bordered" id="tableLoop">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Tên đăng nhập</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>SDT</th>
                                <th>Địa chỉ</th>
                                <th>Chức vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < count($nhaCungCap); $i++) {
                                echo "<tr>"
                                . "<td>"
                                . '<input id="ma_tk"type="text" name="inp_maTK" class="form-control inp_nameProduct" placeholder="" required="" value="' . $nhaCungCap[$i]["ma_tk"] . '">'
                                . "</td>"
                                . "<td>"
                                . '<input type="text" name="username[]" class="form-control inp_nameProduct" placeholder="" required="" value="' . $nhaCungCap[$i]["username"] . '">'
                                . "</td>"
                                . "<td>"
                                . '<input type="text" name="ten" class="form-control inp_nameProduct" placeholder="" required="" value="' . $nhaCungCap[$i]["ten"] . '">'
                                . "</td>"
                                . "<td>"
                                . '<input type="text" name="email" class="form-control inp_nameProduct" placeholder="" value="' . $nhaCungCap[$i]["email"] . '">'
                                . "</td>"
                                . "<td>"
                                . '<input type="text" name="SDT" class="form-control inp_nameProduct" placeholder="" value="' . $nhaCungCap[$i]["SDT"] . '">'
                                . "</td>"
                                . "<td>"
                                . '<input type="text" name="diachi" class="form-control inp_nameProduct" placeholder="" value="' . $nhaCungCap[$i]["diachi"] . '">'
                                . "</td>"
                                . "<td>"
                                . '<input type="text" name="chucvu" class="form-control inp_nameProduct" placeholder="" value="' . $nhaCungCap[$i]["chucvu"] . '">'
                                . "</td>"
                                . "<td>"
                                . '<a class="btn btn-sm btn-primary" data-toggle="tooltip" title="Sửa" id="modiCustomer"><i class="fa fa-edit"></i></a>'
                                . "</td>"
                                . "<td>"
                                . '<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Xóa" id="deleteCustomer"><i class="fa fa-times"></i></a>'
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
    $(document).on('click', '#deleteCustomer', function (e) {
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
    $(document).on('click', '#modiCustomer', function (e) {
        row = $(this).parent().parent()[0].innerHTML;
        var index = $(row)[0].lastElementChild.value;
        var realTimeRow = document.getElementById("tableLoop").rows[index];
        var realRow = [];
        realRow.push(realTimeRow.cells[0].lastChild.value);
        realRow.push(realTimeRow.cells[1].lastChild.value);
        realRow.push(realTimeRow.cells[2].lastChild.value);
        realRow.push(realTimeRow.cells[3].lastChild.value);
        realRow.push(realTimeRow.cells[4].lastChild.value);
        realRow.push(realTimeRow.cells[5].lastChild.value);
        realRow.push(realTimeRow.cells[6].lastChild.value);
        realRow.push(realTimeRow.cells[7].lastChild.value);
        modifyArray.push(realRow);
        document.cookie = escape("modify") + "=" + escape(modifyArray);
        console.log(document.cookie);
    });
</script>

<script>
    $(document).ready(function () {
        $('#modifyCustomer').submit(function (e) {
            e.preventDefault();
            biodata();
        });
    });

    function biodata() {
        $.ajax({
            url: $("#modifyCustomer").attr('action'),
            type: 'post',
            cache: false,
            dataType: "json",
            data: $("#modifyCustomer").serialize(),
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
