    function noticeTimer() {

       
        setTimeout(noticeTimer, 40000);
    };
    function checkdataPassword(str){
     var checkdata = /^[A-Za-z_][A-Za-z0-9_]{7,15}$/;
     return checkdata.test(str);
    }
    function checkName(str){
     var checkdata = /^[A-Za-z_]{5,15}$/;
     return checkdata.test(str);
    }
    $(document).ready(function() {
        noticeTimer();
        $("#newPassword").on("blur", function() {
            
            var checkdata = /^[A-Za-z][A-Za-z0-9]{8,15}$/;
           
         
            if (checkdataPassword($("#newPassword").val())) {
                $("#checkPwd").html("");
            }
            else {
                $("#checkPwd").html("密碼須以英文字母開頭後面接英文或者數字，長度至少八位元");
            }
        });
        $("#pwdCheck").on("blur", function() {
    
            if ($("#pwdCheck").val() != $("#newPassword").val()) {
                $("#checkAgain").html("密碼確認與密碼不一致");
            }
            else {
                $("#checkAgain").html("");
            }
        });
        $("#englishName").on("blur", function() {
            if(checkName($("#englishName").val())){
                $("#checkeName").html("");
            }
            else {
                $("#checkeName").html("格式有錯");
            }
        });
        $("#change").click(function() {
        
            $(".form-change").submit();  
        
        })

        
        
    });