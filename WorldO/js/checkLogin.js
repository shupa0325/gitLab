//登入前檢查
$(document).ready(function() {

    $("#signin").click(function() {
        $.ajax({
            async: true,
            type: "post",
            url: 'controllers/checkSameController.php' ,
            data: {userName:$("#inputAccount").val(),userPwd:$("#inputPassword").val(),flag : "login"},
            success: function (response) {
                var obj = JSON.parse(response);
                alert(obj[0]);
                if(obj[1])
                {
                    window.location="personalPage.php?";
                }
                
            }
            
            
        });
    });
});
