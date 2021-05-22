$(document).ready(function () {
    //*!Chức năng in bảng sale
    $(".btn-print").click(function(){
        var order_table = document.getElementById("order_table");
        newWin = window.open("");
        newWin.document.write(order_table.outerHTML);
        newWin.print();
        newWin.close();
    });
    //*Mở details purchase
    $("a.btn-view").click(function(e){
        e.preventDefault();
        let thisdata = $(this).parent().parent().parent().data('sale');
        $(".details-body").html("<p><strong>Date: </strong>"+thisdata[0]+"</p><p><strong>Reference: </strong>"+thisdata[1]+"</p><p><strong>Customer: </strong>"+thisdata[2]+"</p>");
        $(".sale-footer").html("<p><strong>Note: </strong>"+thisdata[7]+"</p><p><strong>Create By:</strong> Vuong</p>")
        $(".container-full-screen").css("display","block");
        $.get("/shop_manager/ajax_php/load_table_sale_details?q="+thisdata[1],function(data,status){
            $(".product-sale-list tbody").html(data);
        });
    });
    //*Đóng details purchase
    $("div.details-head h3").click(function(){
        $(".container-full-screen").css("display","none");
    });
    //!Tìm kiếm purchase list
    $('.table-filter input').keyup(function(){
        $.post("/shop_manager/Sale/search/"+$(this).val(),function(data,status){
                $("#order_table tbody").html(data);
        });
    });
});



