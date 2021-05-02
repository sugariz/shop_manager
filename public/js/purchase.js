$(document).ready(function () {
    //*!Chức năng in bảng purchase
    $(".btn-print").click(function(){
        print_table_purchase();
    });
});

function print_table_purchase(){
    var purchase_table = document.getElementById("purchase_table");
    newWin = window.open("");
    newWin.document.write(purchase_table.outerHTML);
    newWin.print();
    newWin.close();
}