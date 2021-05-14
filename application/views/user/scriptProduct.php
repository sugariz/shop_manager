<script>
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
    /* $("#woman-s").hover(function() {
         $("#ls-woman-s").addClass("openlist");
         if ($("#ls-woman-s").hasClass("openlist")) {
             $("#woman-s").hover(function() {
                     $("#ls-woman-s").removeClass("openlist");
                     $("#ls-woman-s").addClass("closelist");
                 }

             );
         }
         if ($("#ls-woman-s").hasClass("closelist")) {
             $("#woman-s").hover(function() {
                     $("#ls-woman-s").removeClass("closelist");
                     $("#ls-woman-s").addClass("openlist");
                 }

             );
         }
         
     });*/

    $("#reponsive").click(function() {
        $(".sub-menu-label-list").addClass("enter");
        $(".list-sub-menu-info").addClass("ul-open");
        $(".out-reponsive").addClass("label-open");
        if ($(".sub-menu-label-list").hasClass("close")) {
            $(".sub-menu-label-list").removeClass("close");
            $(".sub-menu-label-list").addClass("enter");
        }
    });


    //$(".list-woman-shose").slideUp();
    $(".icon-reponsive-sub-menu").click(function() {
        $(this).next(".list-woman-shose").slideToggle("slow");
    });

    $("#icon-menu-right").click(function() {
        //$(this).next(".list-woman-shose").slideToggle("slow");
        $("#list-info-menu-rigth").slideToggle("slow");
        $(".label-first").addClass("shadow-label");
        if ($(".label-first").hasClass("shadow-label")) {
            $("#icon-menu-right").click(function() {
                $(".label-first").removeClass("shadow-label");
                $(".label-first").addClass("shadow-close");
            });
        }
        if ($(".label-first").hasClass("shadow-close")) {
            $("#icon-menu-right").click(function() {
                $(".label-first").removeClass("shadow-close");
                $(".label-first").addClass("shadow-label");
            });
        }
    });
    $(".list-info-rigth").slideUp();
    $(".label-ls-sub").click(function() {
        $(this).next(".list-info-rigth").slideToggle("slow");
    });
    /*$("#icon-reponsive").click(function() {
        $("ul.list-woman-shose").slideToggle("slow");
    });*/

    $("#close-icon").click(function() {
        $(".sub-menu-label-list").addClass("close");
    });

    $(".ls-item-product").slideUp();
    $(".icon-down").click(function() {
        $(this).next(".ls-item-product").slideToggle("fast");
    });
    /*function FillterProduct() {
        var brands = [];
        var prices = [];
        var colors = [];
        //var sortby = $('#sortBy :selected').val();
        var pathName = window.location.pathname + "?"; //set vị trí của trang cần đến

        $.each($("input[name='Brand']:checked"), function() {
            brands.push($(this).val()); //Thêm giá trị vào mảng
        });
        $.each($("input[name='Price']:checked"), function() {
            prices.push($(this).val());
        });
        $.each($("input[name='Color']:checked"), function() {
            colors.push($(this).val());
        });
        if (brands.length > 0) {
            pathName = pathName + "&brand=" + brands.join(","); //Thêm dấu ,
        }
        if (colors.length > 0) {
            pathName = pathName + "&color=" + colors.join(",");
        }
        if (prices.length > 0) {
            pathName = pathName + "&price=" + prices.join(",");
        }

        //pathName = pathName+ "&sort=" + sortby;

        window.location.href = pathName; //Chuyển hướng tới trang có giá trị tương ứng
    }*/

    $('#someTab').tab('show')
        /*$('#vo a').click(function(e) {
e.preventDefault()
$(this).tab('show')
})*/

    $('#myTabs a').click(function(e) {
        e.preventDefault()
        $(this).tab('show')
    })

    $("#btn-cart").click(function() {
        $(".sub-menu-info").addClass("close-menu");
        $("#text-cart").addClass("close-text");
        $("#btn-cart").click(function() {
            if ($(".sub-menu-info").hasClass("close-menu") && $("#text-cart").hasClass("close-text")) {
                $(".sub-menu-info").removeClass("close-menu");
                $("#text-cart").removeClass("close-text");
            } else {
                $(".sub-menu-info").addClass("close-menu");
                $("#text-cart").addClass("close-text");
            }
        })
    })
    $("#sapramat").click(function() {
        alert("Sản phẩm sắp được ra mắt!")
    })
</script>