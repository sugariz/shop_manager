</html>
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
<script>
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
        Baris += '<input type="text" name="inp_nameProduct[]" class="form-control inp_nameProduct" placeholder="" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="inp_trademark[]" class="form-control inp_trademark" placeholder="" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<select name="inp_categori[]" id="inp_categori">';
        Baris += tagOption;
        Baris += '</select>';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="file" name="inpFile" id="inpFile">';
        Baris += '<div class="image-preview" id="imagePreview">';
        Baris += '<img src="" alt="Image Preview" class="image-preview__image">';
        Baris += '<span class="image-preview__default-text">Image Preview</span>';
        Baris += '</div>';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="inp_price[]" class="form-control inp_price" placeholder="" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="inp_amount[]" class="form-control inp_amount" placeholder="" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="inp_detail[]" class="form-control inp_detail" placeholder="" required="">';
        Baris += '</td>';
        Baris += '<td class="text-center">';
        Baris += '<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus Baris" id="HapusBaris"><i class="fa fa-times"></i></a>';
        Baris += '</td>';
        Baris += '</tr>';

        $("#tableLoop tbody").append(Baris);
        $("#tableLoop tbody tr").each(function () {
            $(this).find('td:nth-child(2) input').focus();
        });

    }

    $(document).on('click', '#HapusBaris', function (e) {
        e.preventDefault();
        var Nomor = 1;
        $(this).parent().parent().remove();
        $('tableLoop tbody tr').each(function () {
            $(this).find('td:nth-child(1)').html(Nomor);
            Nomor++;
        });
    });

//    $(document).ready(function () {
//        $('#SimpanData').submit(function (e) {
//            e.preventDefault();
//            biodata();
//        });
//    });

    function biodata() {
        $.ajax({
            url: $("#SimpanData").attr('action'),
            type: 'post',
            cache: false,
            dataType: "json",
            data: $("#SimpanData").serialize(),
            success: function (data) {
                if (data.success == true) {
                    $('.inp_nameProduct').val('');
                    $('.inp_trademark').val('');
                    $('.inp_categori').val('');
                    $('.inp_picture').val('');
                    $('.inp_price').val('');
                    $('.inp_amount').val('');
                    $('.inp_detail').val('');
                    $('#notif').fadeIn(800, function () {
                        $("#notif").html("OK").fadeOut(5000).delay(800);
                    });
                } else {
                    $('#notif').html('<div class="alert alert-danger">Successfully!</div>')
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
<script>
    $(document).ready(function () {
    const inpFile = document.getElementById("inpFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    inpFile.addEventListener("change", function () {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";

            reader.addEventListener("load", function () {
                console.log(this);
                previewImage.setAttribute("src", this.result);
            });

            reader.readAsDataURL(file);
            inpFile.style.display = "none";
        }
    });
    });


</script>