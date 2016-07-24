$(document).ready(function() {

$.ajax({
            async: true,
            type: "post",
            url: '/WorldO/article/loadmyArticle',
            data: {},
            success: function(response) {
                
                var obj = JSON.parse(response);
                var res = "";
                $('.friendList').remove();
                for (var val in obj) {
                    res = res + val + " : " + obj[val] + "\n";
                    // alert(obj[val]);
                 // obj[val][0]帳號  obj[val][1]時間  obj[val][2]標題  obj[val][3]內容
                    $('#show_article').append("<form class='article' role='form'> <h3>"+obj[val][2]+"</h3><h5>"+obj[val][0]+" <br> "+ obj[val][1]+"</h5><textarea rows='4' cols='20' readonly='readonly'style='background:inherit' >"+obj[val][3]+"</textarea><br><input type='input id='Comment'/></form>");
                }
                
                
            }
        });
        
});