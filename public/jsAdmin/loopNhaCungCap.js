$(document).ready(function () {
    for (B = 1; B <= 1; B++) {
        Barisbaru();
    }
    $('#BarisBaru').click(function (e) {
        e.preventDefault();
        Barisbaru();
    });

    $("tableLoop tbody").find('input[type=text]').filter(':visible:first').focus();
});

function Barisbaru() {
    $(document).ready(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
    var Nomor = $("#tableLoop tbody tr").length + 1;
    var Baris = '<tr>';
    Baris += '<td class="text-center">' + Nomor + '</td>';
    Baris += '<td>';
    Baris += '<input type="text" name="inp_nameNhaCC[]" class="form-control inp_nameNhaCC" placeholder="" required="">';
    Baris += '</td>';
    Baris += '<td>';
    Baris += '<input type="text" name="inp_sdt[]" class="form-control inp_sdt" placeholder="" required="">';
    Baris += '</td>';
    Baris += '<td>';
    Baris += '<input type="text" name="inp_email[]" class="form-control inp_email" placeholder="" required="">';
    Baris += '</td>';
    Baris += '<td>';
    Baris += '<input type="text" name="inp_diaChi[]" class="form-control inp_diaChi" placeholder="" required="">';
    Baris += '</td>';
    Baris += '<td class="text-center">';
    Baris += '<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Xóa" id="deleteNhaCungCap"><i class="fa fa-times"></i></a>';
    Baris += '</td>';
    Baris += '</tr>';

    $("#tableLoop tbody").append(Baris);
    $("#tableLoop tbody tr").each(function () {
        $(this).find('td:nth-child(2) input').focus();
    });

}

$(document).on('click', '#deleteNhaCungCap', function (e) {
    e.preventDefault();
    var Nomor = 1;
    $(this).parent().parent().remove();
    $('tableLoop tbody tr').each(function () {
        $(this).find('td:nth-child(1)').html(Nomor);
        Nomor++;
    });
});

$(document).ready(function () {
    $('#insertNhaCungCap').submit(function (e) {
        e.preventDefault();
        biodata();
    });
});

function biodata() {
    $.ajax({
        url: $("#insertNhaCungCap").attr('action'),
        type: 'post',
        cache: false,
        dataType: "json",
        data: $("#insertNhaCungCap").serialize(),
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
