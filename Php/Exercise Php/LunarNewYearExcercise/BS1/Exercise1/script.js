$(document).ready(function () {
    $(".btn").on("click", function () {
        if($("#firstName").val().trim()==""){
            $(this).css("border", "1px solid red");
            $(this).next().text("Không được để trống")
        }else{
            $(this).css("border", "1px solid black");
            $(this).next().text("")
        };
        if($("#lastName").val().trim()==""){
            $(this).css("border", "1px solid red");
            $(this).next().text("Không được để trống")
        }else{
            $(this).css("border", "1px solid black");
            $(this).next().text("")
        };
    });
})