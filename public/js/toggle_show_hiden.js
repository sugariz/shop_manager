$(document).ready(function(){
    $("#menu_icon").click(function(e){
        e.preventDefault();
        $(".side-navbar").toggleClass("hiden-bar");
        $(".page").toggleClass("resize-page");
    });
});