$(document).ready(function(){
    //*!Ẩm hiển menu
    $("#menu_icon").click(function(e){
        e.preventDefault();
        $(".side-navbar").toggleClass("hiden-bar");
        $(".page").toggleClass("resize-page");
    });

    //*!Xử lý sự kiện chọn mục trong menu
        $(".btn-menu a").each(function(){
            if($(this).prop("href") == $(location).attr("href")){
                $(this).parent().css("background-color","rgba(255, 255, 255, 0.2)");
            }
        });



    //*!Thêm class selected cho purchase list
    $("tr .checkboxes-cell input[type='checkbox']").click(function(){
        if($(this).prop('checked')==true)
            $(this).parent().parent().addClass("selected");
        else
            $(this).parent().parent().removeClass("selected");
    });
    $("thead tr .checkboxes-select-all input[type='checkbox']").click(function(){
        if($(this).prop('checked')==true){
            $("tbody tr").addClass("selected");
            $("tr .checkboxes-cell input[type='checkbox']").prop("checked",true);
        }
        else{
            $("tbody tr").removeClass("selected");
            $("tr .checkboxes-cell input[type='checkbox']").prop("checked",false);
        }
    });

    $("tr .checkboxes-cell input[type='checkbox']").change(function(){
        var status_check = true;
        $("tr .checkboxes-cell input[type='checkbox']").each(function(){
            if($(this).prop("checked") == false){
                    status_check = false;
            }     
        });
        $("thead tr .checkboxes-select-all input[type='checkbox']").prop("checked",status_check);
    });



});
