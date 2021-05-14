<script>
    $("#load_data").click(function() {
        $.ajax({
            url: "assets/asb1.csv",
            dataType: "text",
            success: function(data) {
                var employee_data = data.split(/\r?\n|\r/);
                var table_data = [];
                var img = [];
                for (var count = 1; count < employee_data.length; count++) {
                    if (2 == employee_data[count].split("Sa Pa,").length) {
                        //console.log(employee_data[count].length, employee_data[count].split("Đà Lạt"));
                        var info = employee_data[count].split("Sa Pa,");
                        table_data.push(info[1]);
                        console.log(info);
                    }
                }
                //$('#employee_table').html(table_data[1]);
                for (var index = 0; index < table_data.length; index++) {
                    var div = document.createElement("div");
                    div.innerHTML = table_data[index];
                    document.getElementById("img-btn").appendChild(div);
                }
            }
        });
    });

    var slideIndex;
    // KHai bào hàm hiển thị slide
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex].style.display = "block";
        dots[slideIndex].className += " active";
        //chuyển đến slide tiếp theo
        slideIndex++;
        //nếu đang ở slide cuối cùng thì chuyển về slide đầu
        if (slideIndex > slides.length - 1) {
            slideIndex = 0
        }
        //tự động chuyển đổi slide sau 5s
        setTimeout(showSlides, 7000);
    }
    //mặc định hiển thị slide đầu tiên 
    showSlides(slideIndex = 0);


    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    $("#item").click(function() {
        $("#target").addClass("block");

        if ($("#target").hasClass("block")) {
            $("#item").click(function() {
                    $("#target").removeClass("block");
                    $("#target").addClass("open");
                }

            );
        }
        if ($("#target").hasClass("open")) {
            $("#item").click(function() {
                    $("#target").removeClass("open");
                    $("#target").addClass("block");
                }

            );
        }
    });
    $("#sapramat").click(function() {
        alert("Sản phẩm sắp được ra mắt!")
    })
</script>