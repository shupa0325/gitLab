    function noticeTimer() {

        //find if has invited by other Account
        $.ajax({
            async: true,
            type: "post",
            url: 'friend/invitedfriend',
            data: {},
            success: function(response) {
                if (response != ' null') {

                    var obj = JSON.parse(response);
                    var res = "";

                    for (var val in obj) {
                        res = res + val + " : " + obj[val] + "\n";
                        $('td,tr').remove();
                        $("#notice").css("color", "red");
                        // $("#noticeTable").remove();
                        $("#noticeTable").append("<tr id=" + obj[val] + "class='noticeList'><td>" + obj[val] + "</td><td><button onclick='javascript:alert('abc')' id='yes' name=" + obj[val] + ">yes</button></td><td><button  class='no' name=" + obj[val] + "_no>no</button></td></tr>");

                    }

                    $('#yes').click(function() {
                        $.ajax({
                            async: true,
                            type: "post",
                            url: 'friend/acceptfriend',
                            data: {
                                friend: $(this).prop("name"),
                            },
                            success: function(response) {
                                $("#noticeTable").hide();
                            }
                        });

                    });

                    
                    $("#no").click(function() {
                        $.ajax({
                            async: true,
                            type: "post",
                            url: 'friend/refusefriend',
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
                    $("#notice").css("color", "blue");
                }

            }
        });


        //display the friendtable 
        $.ajax({
            async: true,
            type: "post",
            url: 'friend/displayFriend',
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
                    $("#" + obj[val]).click(function() {
                        $('#showtext').html("<textarea rows='4' cols='20' readonly='readonly' >TEST</textarea><input type='text' id='output' name='output' value=''>");
                    });
                }
            }
        });
        setTimeout(noticeTimer, 4000);
    }

    $(document).ready(function() {
        noticeTimer();
        $("#personData").click(function() {
             window.location.href = 'data/editData';  
            });

        $("#addFriend").click(function() {
            $.ajax({
                async: true,
                type: "post",
                url: 'friend/addfriend',
                data: {
                    friend: $("#addFriendt").val(),
                    flag: 'addFriend'
                },
                success: function(response) {
                    alert(response);
                }
            });
        });
      
        $("#deleteFriend").click(function() {
            $.ajax({
                async: true,
                type: "post",
                url: 'friend/refusefriend',
                data: {
                    friend: $("#deleteFriendt").val(),
                    flag: 'deleteFriend'
                },
                success: function(response) {
                    alert(response);
                }
            });
        });
        //     $("#talkFriend").click(function() {
        //     alert("talkFriend");
        //     // $.ajax({
        //     //     async: true,
        //     //     type: "post",
        //     //     url: 'controllers/userController.php',
        //     //     data: {
        //     //     },
        //     //     success: function(response) {
        //     //         }
        //     //     });
        //     });
        //     $("#newArticle").click(function() {
        //     alert(("#articlecontent").val());
        //     // $.ajax({
        //     //     async: true,
        //     //     type: "post",
        //     //     url: 'controllers/userController.php',
        //     //     data: {
        //     //     },
        //     //     success: function(response) {
        //     //         }
        //     //     });
        //     });
        //     $("#deleteArticle").click(function() {
        //     alert("deleteArticle");
        //     // $.ajax({
        //     //     async: true,
        //     //     type: "post",
        //     //     url: 'controllers/userController.php',
        //     //     data: {
        //     //     },
        //     //     success: function(response) {
        //     //         }
        //     //     });
        //     });
        $("#notice").click(function() {
            $("#invite_list").toggle(500);
        });
        $('#articletest form').remove();//先移除之前的form
        $.ajax({
            async: true,
            type: "post",
            url: 'article/loadArticle',
            data: {},
            success: function(response) {
                var obj = JSON.parse(response);
                var res = "";
                $('.friendList').remove();
                for (var val in obj) {
                    res = res + val + " : " + obj[val] + "\n";
                    // alert(obj[val]);
                 // obj[val][0]帳號  obj[val][1]時間  obj[val][2]標題  obj[val][3]內容
                    $('#articletest').append("<form class='article' role='form'> <h3>"+obj[val][2]+"</h3><h5>"+obj[val][0]+" <br> "+ obj[val][1]+"</h5><textarea rows='4' cols='20' readonly='readonly'style='background:inherit' >"+obj[val][3]+"</textarea><br><input type='input id='Comment'/></form>");
                }
                
                
            }
        });
        $("input").keydown(function (event) {
        if (event.which == 13) {
           $.ajax({
            async: true,
            type: "post",
            url: 'article/updateMessage',
            data: {},
            success: function(response) {
                
            }
        });
        }
    });

    });