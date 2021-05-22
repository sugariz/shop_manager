$(document).ready(function () {
    $('#select_p').click(function(e){
        e.preventDefault();
        let thisdata=$('#a option:selected').data("select");
        let cost = thisdata[1];
        let html = '<tr><td>'+thisdata[0]+'</td><td><input type="number" name="product_code[]" value="'+$("#a").val()+'" style="color: #888;"></td><td><input type="number" name="quantity[]" class="soluong" value=1></td><td>'+cost+'</td><td>100</td><td><button type="button" class="delete_choice">Delete</button></td></tr>';
        $("#myTable_orderList tbody tr:last").after(html);
    });
    $(".delete_choice").click(function(){
        $(this).parent().parent().remove();
    });
    $("input.soluong").change(function(){
        alert($(this).val());
        $("tfoot .quantity").html($(this).val());
        $("tfoot .total").html();
    });


});