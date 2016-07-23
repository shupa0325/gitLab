
$(document).ready(function() {
    //控制title內登入與註冊的表單顯示
    
    $("#create").click(function() {
        $(".form-signin").hide();
        $(".form-create").fadeIn('slow');
    });
    $("#login").click(function() {
        $(".form-create").hide();
        $(".form-signin").fadeIn('slow');
    });
    
    //----------------------------------------
    
    //帳號檢查
    
    $("#pAccount").on("blur", function() {
        $("#checkAccount").html("檢查中...");
    $.ajax({
            async: true,
            type: "post",
            url: 'guest/callMethod',
            data: {userName:$("#pAccount").val(),flag : "checkAcc"},
            success: function (response) {
                $("#checkAccount").html(response);
            }
            }
          );
    });
    
    //----------------------------------------
    
    $("#pPassword").on("blur", function() {
        
        var checkdata = /^[A-Za-z][A-Za-z0-9]{8,15}$/;
       
     
        if (checkdataPassword($("#pPassword").val())) {
            $("#checkPwd").html("");
        }
        else {
            $("#checkPwd").html("密碼須以英文字母開頭後面接英文或者數字，長度至少八位元");
        }
    });
    
    //----------------------------------------
    
    $("#pwdCheck").on("blur", function() {

        if ($("#pwdCheck").val() != $("#pPassword").val()) {
            $("#checkAgain").html("密碼確認與密碼不一致");
        }
        else {
            $("#checkAgain").html("");
        }
    });
    
    //----------------------------------------
    
    //創建帳號檢查
    $("#createA").click(function() {
        if(checkdataAccount($("#pAccount").val()) && checkdataPassword($("#pPassword").val()))
        {
            alert("create");
            $(".form-create").submit();  
        }else{
        alert("false");
            
        }
    });
    
    //----------------------------------------
    
    //登入檢查
    
     $("#signin").click(function() {
         if(checkdataAccount($("#inputAccount").val()) && checkdataPassword($("#inputPassword").val()))
        {   
            $(".form-signin").submit();
        }
        // $.ajax({
        //     async: true,
        //     type: "post",
        //     url: 'guest/callMethod/' ,
        //     data: {userName:$("#inputAccount").val(),userPwd:$("#inputPassword").val(),flag : "login"},
        //     success: function (response) {
        //         var obj = JSON.parse(response);
        //         if(obj[1])
        //         {
        //                 alert(obj[0]);
        //         }
        //     }
        // });
    });

    //----------------------------------------
    
});

function checkdataAccount(str){
     var checkdata = /^[A-Za-z_][A-Za-z0-9_]{8,15}$/;
     return checkdata.test(str);
}

function checkdataPassword(str){
     var checkdata = /^[A-Za-z_][A-Za-z0-9_]{7,15}$/;
     return checkdata.test(str);
}
