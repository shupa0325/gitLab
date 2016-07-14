
$(document).ready(function() {
    // $(".form-create").hide();
    // $(".form-signin").hide();
    $("#create").click(function() {
        $("#pageH").load('view/createAccount.php');
    });
    $("#login").click(function() {
        $("#pageH").load('view/loginAccount.php');
    });


});