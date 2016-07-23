    function noticeTimer() {
        
        //find if has invited by other Account
        $.ajax({
            async: true,
            type: "post",
            url: 'data/invitedfriend',
            data: {},
            success: function(response) {
                if (response != ' null') {
                    
                var obj = JSON.parse(response);
                var res = "";
                $('.noticeList').remove();
                for (var val in obj) {
                    res = res + val + " : " + obj[val] + "\n";
                    
                   $("#notice").css("color","red");
                   $("#noticeTable").remove(function(){
                       $("#noticeTable").append("<tr id="+obj[val]+"class='noticeList'><td>"+obj[val]+"</td><td><button onclick='javascript:alert('abc')' id='yes' name="+obj[val]+">yes</button></td><td><button  class='no' name="+obj[val]+"_no>no</button></td></tr>");
                   });
                   
                    
                }
                   
                   $('#yes').click(function() {
                       $.ajax({
                        async: true,
                        type: "post",
                        url: 'data/acceptfriend',
                        data: {friend:$(this).prop("name"),
                        },
                        success: function(response) {
                        }
                    });
                    $('#'+$(this).prop("name")).remove()
              });
        
                    
                }else{
                    $("#notice").css("color","blue");
                }

            }
        });
        
        
        //display the friendtable 
        $.ajax({
            async: true,
            type: "post",
            url: 'data/displayFriend',
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
        // $("#personData").click(function() {
        //     $.ajax({
        //         async: true,
        //         type: "post",
        //         url: 'controllers/userController.php',
        //         data: {userName : 'shupa_tsai0325',flag :'personData'},
        //         success: function(response) {
        //             var obj = JSON.parse(response);
        //             var res ="";
        //             for(var val in obj){
        //                 res =res + val + " : " +  obj[val] + "\n";
        //             }
        //             alert(res);
        //             }
        //         });
        //     });
        
            $("#addFriend").click(function() {
            $.ajax({
                async: true,
                type: "post",
                url: 'data/addfriend',
                data: {friend:$("#addFriendt").val(),flag :'addFriend'
                },
                success: function(response) {
                    alert(response);
                    }
                });
            });
            $("#yes").click(function() {
            // $.ajax({
            //     async: true,
            //     type: "post",
            //     url: 'data/acceptfriend',
            //     data: {friend:$("#").val(),
            //     },
            //     success: function(response) {
            //         alert(response);
            //         }
            //     });
            });
            $("#no").click(function() {
            $.ajax({
                async: true,
                type: "post",
                url: 'data/refusefriend',
                data: {friend:$("#").val(),
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
                url: 'data/refusefriend',
                data: {friend:$("#deleteFriendt").val(),flag :'deleteFriend'
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
      $("#notice").click(function(){
  $("#invite_list").toggle(500);
  });
    
    });
    
    