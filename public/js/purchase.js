$(document).ready(function () {
    //*!Chức năng in bảng purchase
    $(".btn-print").click(function(){
        var purchase_table = document.getElementById("purchase_table");
        newWin = window.open("");
        newWin.document.write(purchase_table.outerHTML);
        newWin.print();
        newWin.close();
    });
    //*Mở details purchase
    $("a.btn-view").click(function(e){
        e.preventDefault();
        let thisdata = $(this).parent().parent().parent().data('purchase');
        $(".container-full-screen").css("display","block");
        $(".details-body").html("<p><strong>Date: </strong>"+thisdata[0]+"</p><p><strong>Reference: </strong>"+thisdata[1]+"</p><p><strong>Supplier: </strong>"+thisdata[2]+"</p>");
        $(".purchase-footer").html("<p><strong>Note: </strong>"+thisdata[5]+"</p><p><strong>Create By:</strong> Vuong</p>")
        $.get("/shop_manager/ajax_php/load_table_purchase_details?q="+thisdata[1],function(data,status){
            $(".product-purchase-list tbody").html(data);
        });
    });
    //*Đóng details purchase
    $("div.details-head h3").click(function(){
        $(".container-full-screen").css("display","none");
    });
    //!Tìm kiếm purchase list
    $('.table-filter input').keyup(function(){
        $.post("/shop_manager/Purchase/search/"+$(this).val(),function(data,status){
                $("#purchase_table tbody").html(data);
        });
    });
});



