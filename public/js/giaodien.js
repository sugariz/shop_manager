$(document).ready(function(){
    //*!Ẩm hiển menu
    $("#menu_icon").click(function(e){
        e.preventDefault();
        $(".side-navbar").toggleClass("hiden-bar");
        $(".page").toggleClass("resize-page");
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
});
