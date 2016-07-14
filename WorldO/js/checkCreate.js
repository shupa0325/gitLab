function checkSame() {
    $("#checkAccount").html("檢查中...");
    
    $.ajax({
            async: true,
            type: "post",
            url: 'controllers/checkSameController.php' ,
            data: {userName:$("#pAccount").val(),flag : "login"},
            success: function (response) {
                $("#checkAccount").html(response);
            }
            }
          );

};
$(document).ready(function() {
   $("#pAccount").on("blur", function() {
        checkSame();
    });
    $("#pPassword").on("blur", function() {

        if ($("#pPassword").val() == "") {
            $("#checkPwd").html("密碼不可為空");
        }
        else if ($("#pPassword").val().length < 8) {
            $("#checkPwd").html("密碼長度不可小於八個");
        }
        else {
            $("#checkPwd").html("");
        }
    });
    $("#pwdCheck").on("blur", function() {

        if ($("#pwdCheck").val() != $("#pPassword").val()) {
            $("#checkAgain").html("密碼確認與密碼不一致");
        }
        else {
            $("#checkAgain").html("");
        }
    });
    $("#create").click(function() {
        
        $.ajax({
            async: true,
            type: "post",
            url: 'controllers/checkSameController.php' ,
            data: {userName:$("#inputAccount").val(),userPwd:$("#inputPassword").val(),flag : "create"},
            success: function (response) {
                var obj = eval("(" +response + ")");
                alert(obj[0]);
                if(obj[1])
                {
                    
                }
                
            }
            
            
        });
    });
    
})
