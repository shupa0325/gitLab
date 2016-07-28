    //http://abgne.tw/jquery/apply-jquery/scrollbar-scroll-to-bottom-event.html
    //http://stackoverflow.com/questions/12650170/how-to-scroll-down-jquery
    //  
    function noticeTimer() {

        //自動偵測是否有人發出好友邀請，若有則發出提醒。此處包含接受以及拒絕好友邀請
        $.ajax({
            async: true,
            type: "post",
            url: '/WorldO/friend/invitedfriend',
            data: {},
            success: function(response) {
                if (response != 'null') {
                    // alert(response);
                    var obj = JSON.parse(response);
                    var res = "";
                    $("#notice").css("color", "red");
                    for (var val in obj) {
                        res = res + val + " : " + obj[val] + "\n";
                       $('td,tr').remove();
                        $("#noticeTable").append("<tr id=" + obj[val] + "class='noticeList'><td>" + obj[val] + "</td><td><button onclick='javascript:alert('abc')' id='yes' name=" + obj[val] + ">yes</button></td><td><button  id='no' class='no' name=" + obj[val] + "_no>no</button></td></tr>");
                    }
                    //接受好友邀請
                    $('#yes').click(function() {
                        $.ajax({
                            async: true,
                            type: 'POST',
                            url: '/WorldO/friend/acceptfriend',
                            data: {
                                friend: $(this).prop("name"),
                            },
                            success: function(response) {
                                window.location.reload()
                                $("#noticeTable").hide();
                            }
                        });

                    });

                    //拒絕好友邀請
                    $("#no").click(function() {
                        $.ajax({
                            async: true,
                            type: "post",
                            url: '/WorldO/friend/refusefriend',
                            data: {
                                friend: $(this).prop("name"),
                            },
                            success: function(response) {
                                $("#noticeTable").hide();
                            }
                        });
                    });
                }
                else {
                    $("#notice").css("color", "gray");
                }

            }
        });


        // |======================================================================#
        // |偵測並更新好友名單                                                    #
        // |======================================================================#
        
        
        $.ajax({
            async: true,
            type: "post",
            url: '/WorldO/friend/displayFriend',
            data: {
                userName: $("#userName").val(),
                flag: 'friendTable'
            },
            success: function(response) {

                var obj = JSON.parse(response);
                var res = "";
                $('.friendList').remove();
                for (var val in obj) {
                    res = res + val + " : " + obj[val] + "\n";

                    $('#friendTalk').append("<option id='" + obj[val] + "' class='friendList'>" + obj[val] + '</option>');
                     //好友被點擊事件
                    $('option').click(function() {
                       //$('#showtext').remove();
                        //$("#result").html(obj[val]);
                        $("#showbox").remove();
                        $('#showtext').html("<div id=showbox><textarea id='msgbox'rows='4' cols='20' readonly='readonly' ></textarea><br><input type='text' id='output' name='output' value=''></div>");
                    
                    
         // |======================================================================#
         // |顯示聊天訊息                                                          #
         // |======================================================================#
      
                        
                        $.ajax({
                            async: true,
                            type: "post",
                            url: '/WorldO/data/getMessage',
                            data: {friend:$(this).prop("id")},
                            success: function(response) {
                            $("#msgbox").html(response.trim());
                            //alert(response);
                            }
                        });
        // |======================================================================#
        // |設定訊息為已讀                                                        #
        // |======================================================================#            
                        $.ajax({
                            async: true,
                            type: "post",
                            url: '/WorldO/data/setRead',
                            data: {friend:$(this).prop("id")},
                            success: function(response) { }
                        });
                        
                        
                        
                    });
                }
            }
        });
        
        
        // |======================================================================#
        // |偵測並更新未讀訊息                                                    #
        // |======================================================================#
        
        $.ajax({
            async: true,
            type: "post",
            url: '/WorldO/data/isMessage',
            data: {},
            success: function(response) {
                var obj = JSON.parse(response);
                    var res = "";
                    for (var val in obj) {
                        res = res + val + " : " + obj[val] + "\n";
                        //alert(obj[val]);
                        $('#'+obj[val]).css("color","red");
                    }
                
                
                //alert(response);
            }
        });
        
        
        
        
        
        
        setTimeout(noticeTimer, 1000);
    }

    $(document).ready(function() {
        
        // |======================================================================#
        // |設定一個Timer                                                         #
        // |======================================================================#
        
        noticeTimer();
        
        // |======================================================================#
        // |連結到個人資料編輯頁面                                                #
        // |======================================================================#
        
        $("#personData").click(function() {
             window.location.href = 'data/editData';  
            });
        
        // |======================================================================#
        // |進入我的文章頁面                                                      #
        // |======================================================================#
        
         $("#myarticle").click(function() {
            window.location.href = 'article/myArticle';  
        });
        
        // |======================================================================#
        // |新增好友功能                                                          #
        // |======================================================================#
        
        $("#addFriend").click(function() {
            $.ajax({
                async: true,
                type: "post",
                url: '/WorldO/friend/addfriend',
                data: {
                    friend: $("#addFriendt").val(),
                    flag: 'addFriend'
                },
                success: function(response) {
                    //alert(response);
                }
            });
        });
        
        // |======================================================================#
        // |刪除好友功能                                                          #
        // |======================================================================#
              
      
        $("#deleteFriend").click(function() {
            $.ajax({
                async: true,
                type: "post",
                url: '/WorldO/friend/refusefriend',
                data: {
                    friend: $("#deleteFriendt").val(),
                    flag: 'deleteFriend'
                },
                success: function(response) {
                    //alert(response);
                }
            });
        });
        
        // |======================================================================#
        // |開啟好友邀請清單                                                      #
        // |======================================================================#
        
        $("#notice").click(function() {
            $("#invite_list").toggle(500);
        });
        
        // |======================================================================#
        // |顯示帳戶與帳戶好友的文章                                              #
        // |======================================================================#
        
        // $('#articletest form').remove();//先移除之前的form
        $.ajax({
            async: true,
            type: "post",
            url: '/WorldO/article/loadArticle',
            data: {},
            success: function(response) {
                var obj = JSON.parse(response);
                var res = "";
                $('.friendList').remove();
                for (var val in obj) {
                    res = res + val + " : " + obj[val] + "\n";
                    // alert(obj[val]);
                 // obj[val][0]帳號  obj[val][1]時間  obj[val][2]標題  obj[val][3]內容
                    $('#articletest').append("<form id="+obj[val][4]+" class='article' role='form'> <h3>"+obj[val][2]+"</h3><h5>"+obj[val][0]+" <br> "+ obj[val][1]+"</h5><textarea rows='4' cols='20' readonly='readonly'style='background:inherit' >"+obj[val][3]+"</textarea><br><input type='input id='Comment'/></form>");
                }
                
                
            }
        });
        // |======================================================================#
        // |發出訊息給好友，傳出資料為好友帳號以及訊息內容，                      #
        // |======================================================================#
        
        $("#output").keydown(function (event) {
            alert("sdf");
            if (event.which == 13) {
            //   $.ajax({
            //     async: true,
            //     type: "post",
            //     url: '/WorldO/data/sendMessage',
            //     data: {friend : '', message : $(this).val()},
            //     success: function(response) {
            //         alert("hello");
                    
                    
            //     }
            // });
            }
        });
        
        
        
       
        
    });