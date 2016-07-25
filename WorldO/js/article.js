$(document).ready(function() {
    
        // |======================================================================#
        // |顯示帳戶文章                                                          #
        // |======================================================================#
        
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
                $('#show_article').append("<div id="+obj[val][4]+" class='article' role='form'> <h3>"+obj[val][2]+"<button class='editButton' value='"+obj[val][3]+"'title='"+obj[val][2]+"'name="+obj[val][4]+">編輯</button><button class='deleteButton' name="+obj[val][4]+">刪除</button></h3><h5>"+obj[val][0]+" <br> "+ obj[val][1]+"</h5><textarea rows='4' cols='20' readonly='readonly'style='background:inherit' >"+obj[val][3]+"</textarea><br><input type='input id='Comment'/></div>");
            }
            
           // |======================================================================#
        // |編輯文章                                                              #
        // |======================================================================#
       
        $(".editButton").click(function(){
            $('body').append("<form method='post' action='/WorldO/article/updateArticle' style='z-index: 2;position: absolute; left: 30%;background: aqua;'><h1><input name='articleName'type='input' value='"+$(this).prop("title")+"'></h1><br><input name='content' type='input' style='width: 100%; height: 300px;'value='"+$(this).prop('value')+"'></input><br><input id='edit_submit' type='submit' value='送出'></input><input type='hidden' name='id' value='"+$(this).prop("name")+"'></form>");
            
            
            // alert($(this).prop('value'))
             //將文章變成可編輯(標題以及內容)
             //if 按下確認鍵 ->更新文章
             //else 取消 -> 回復
            //此ajax傳入文章名稱、內容、ID並且會更新文章
            
            // $('#edit_submit').click(function() {
            //     if(confirm("Are You Sure to Edit?"))
            // {  
            // //  $.ajax({
            // //     async: true,
            // //     type: "post",
            // //     url: '/WorldO/article/updatemyArticle',
            // //     data: {articleName:$('#edit_title').prop("value"),content:$(this).prop('value'),id:$(this).prop("name")},//
            // //     success: function(response) {
            // //             //alert(response);
                
            // //     }
            // // });
            // }
            // else
            // {
            // alert("你按下取消");
            // }
                
                
                
            // });
            
            
              
        });
        
        // |======================================================================#
        // |刪除文章                                                              #
        // |======================================================================#
        
     $(".deleteButton").click(function(){
        if(confirm("Are You Sure to Delete?")){  
               //alert("你按下確認");
            $.ajax({
                async: true,
                type: "post",
                url: '/WorldO/article/deleteArticle',
                data: {id:$(this).prop("name")},//幫我給ID
                success: function(response) {
                        //alert(response);
                        if(response==true){
                            window.location.reload()
                        }
                }
                        
            
            });
        }else{
               alert("你按下取消");
               }
            
        });
          
          
          
            
        }
    });
    
        
       

        
});