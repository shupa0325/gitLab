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
                alert("addFriend");
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
                $("#deleteFriend").click(function() {
                alert("deleteFriend");
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