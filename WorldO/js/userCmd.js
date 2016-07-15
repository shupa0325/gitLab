$(document).ready(function() {
            $("#personData").click(function() {
                $.ajax({
                    async: true,
                    type: "post",
                    url: 'controllers/userController.php',
                    data: {userName : 'shupa_tsai0325',flag :'personData'},
                    success: function(response) {
                        var obj = JSON.parse(response);
                        var res ="";
                        for(var val in obj){
                            res =res + val + " : " +  obj[val] + "\n";
                        }
                        alert(res);
                        }
                    });
                });
            $("#friendTable").click(function() {
                $.ajax({
                    async: true,
                    type: "post",
                    url: 'controllers/userController.php',
                    data: {userName : 'shupa_tsai0325',flag :'friendTable'
                    },
                    success: function(response) {
                        var obj = JSON.parse(response);
                        var res ="";
                        for(var val in obj){
                            res =res + val + " : " +  obj[val] + "\n";
                        }
                        alert(res);
                        
                        }
                    });
                });
                $("#addFriend").click(function() {
                $.ajax({
                    async: true,
                    type: "post",
                    url: 'controllers/userController.php',
                    data: {userName : 'shupa_tsai0325',friend:$("#addFriendt").val(),flag :'addFriend'
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
                    url: 'controllers/userController.php',
                    data: {userName : 'shupa_tsai0325',friend:$("#deleteFriendt").val(),flag :'deleteFriend'
                    },
                    success: function(response) {
                        alert(response);
                        }
                    });
                });
                $("#talkFriend").click(function() {
                alert("talkFriend");
                // $.ajax({
                //     async: true,
                //     type: "post",
                //     url: 'controllers/userController.php',
                //     data: {
                //     },
                //     success: function(response) {
                //         }
                //     });
                });
                $("#newArticle").click(function() {
                alert("newArticle");
                // $.ajax({
                //     async: true,
                //     type: "post",
                //     url: 'controllers/userController.php',
                //     data: {
                //     },
                //     success: function(response) {
                //         }
                //     });
                });
                $("#deleteArticle").click(function() {
                alert("deleteArticle");
                // $.ajax({
                //     async: true,
                //     type: "post",
                //     url: 'controllers/userController.php',
                //     data: {
                //     },
                //     success: function(response) {
                //         }
                //     });
                });
        });