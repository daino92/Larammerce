/* What we offer js trick */
$(document).ready(function(){
    $("#divSocial img").hover(
        function () {
            $(this).animate({top: "-15"});
            },
        function () {
            $(this).animate({top: "0"});
        }
    );
});

/* Popular Products On Sale js slider trick */
$(function() {
    $('#mi-slider').catslider();
});