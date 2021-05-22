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
            <form action="<?php echo base_url('ManagerProduct/post') ?>" method="post" id="modifyProduct">
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($i = 0; $i < count($productArray); $i++) {
                                    echo "<tr>"
                                            ."<td>"
                                            .'<input id="ma_sp"type="text" name='.$productArray[$i]["ma_sp"].' class="form-control inp_nameProduct" placeholder="" value="'.$productArray[$i]["ma_sp"].'">'
                                            ."</td>"
                                            ."<td>"
                                            .'<input type="text" name='.$productArray[$i]["ten_sp"].' class="form-control inp_nameProduct" placeholder="" value="'.$productArray[$i]["ten_sp"].'">'
                                            ."</td>"
                                            ."<td>"
                                            .'<input type="text" name='.$productArray[$i]["thuonghieu"].' class="form-control inp_nameProduct" placeholder="" value="'.$productArray[$i]["thuonghieu"].'">'
                                            ."</td>"
                                            ."<td>"
                                            .'<input type="text" name='.$productArray[$i]["ma_theloai"].' class="form-control inp_nameProduct" placeholder="" value="'.$productArray[$i]["ma_theloai"].'">'
                                            ."</td>"
                                            ."<td>"
                                            ."<img src='". base_url()."user/".$productArray[$i]["hinhanh"]."' alt=''>"
                                            ."</td>"
                                            ."<td>"
                                            .'<input type="text" name='.$productArray[$i]["gia_sp"].' class="form-control inp_nameProduct" placeholder="" value="'.$productArray[$i]["gia_sp"].'">'
                                            ."</td>"
                                            ."<td>"
                                            .'<input type="text" name='.$productArray[$i]["soluong_sp"].' class="form-control inp_nameProduct" placeholder="" value="'.$productArray[$i]["soluong_sp"].'">'
                                            ."</td>"
                                            ."<td>"
                                            .'<input type="text" name='.$productArray[$i]["chitiet_sp"].' class="form-control inp_nameProduct" placeholder="" value="'.$productArray[$i]["chitiet_sp"].'">'
                                            ."</td>"
                                            ."<td>"
                                            .'<a class="btn btn-sm btn-primary" data-toggle="tooltip" title="Sửa" id="modiProduct"><i class="fa fa-edit"></i></a>'
                                            ."</td>"
                                            ."<td>"
                                            .'<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Xóa" id="deleteProduct"><i class="fa fa-times"></i></a>'
                                            ."</td>"
                                        ."</tr>";
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
$(document).on('click', '#deleteProduct', function (e) {
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
$(document).on('click', '#modiProduct', function (e) {
    row = $(this).parent().parent()[0].innerHTML;
    var index = $(row)[0].lastElementChild.value;
    var realTimeRow = document.getElementById("tableLoop").rows[index];
    var realRow = [];
    realRow.push(realTimeRow.cells[0].lastChild.value);
    realRow.push(realTimeRow.cells[1].lastChild.value);
    realRow.push(realTimeRow.cells[2].lastChild.value);
    realRow.push(realTimeRow.cells[3].lastChild.value);
    realRow.push((realTimeRow.cells[4].lastChild.src).replace("http://localhost/shop_manager/user/", ""));
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
    $('#modifyProduct').submit(function (e) {
        e.preventDefault();
        biodata();
    });
});

function biodata() {
    $.ajax({
        url: $("#modifyProduct").attr('action'),
        type: 'post',
        cache: false,
        dataType: "json",
        data: $("#modifyProduct").serialize(),
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