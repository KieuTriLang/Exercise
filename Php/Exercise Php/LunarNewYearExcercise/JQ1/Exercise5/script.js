$(document).ready(function () {
    $(".sub-menu").hide();
    $(".fa-angle-down").hide();
    $(".main-element").on("click", function () {
        $(this).next().slideToggle();
    });
    $(".main-menu li").on("mouseenter", function () {
        $(this).find(".fa-angle-down").fadeIn(10);
    });
    $(".main-menu li").on("mouseleave", function () {
        $(this).find(".fa-angle-down").fadeOut(10);
    });
});