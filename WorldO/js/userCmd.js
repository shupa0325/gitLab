        // var wsUri = "ws://day1-shupa-tsai.c9users.io/work/WorldO/webSocketC.php";
        // var output;
        //     function init() {
        //         output = document.getElementById("output");
        //         testWebSocket();
        //     }
        //     function testWebSocket() {
        //         websocket = new WebSocket(wsUri);
                
        //         websocket.onopen = function(evt) { 
        //             onOpen(evt);
        //             };
        //         websocket.onclose = function(evt) {
        //             onClose(evt);
        //         };
        //         websocket.onmessage = function(evt) {
        //             onMessage(evt);
        //         };
        //         websocket.onerror = function(evt) {
        //             onError(evt);
        //         };
        //     }
        //     function onOpen(evt) {
        //         writeToScreen("CONNECTED"); 
        //         doSend("WebSocket rocks"); 
        //     }  
        //     function onClose(evt) { 
        //         writeToScreen("DISCONNECTED"); 
        //     }  
        //     function onMessage(evt) { 
        //         writeToScreen('RESPONSE: ' + evt.data+''); 
        //         websocket.close(); 
        //     }  
        //     function onError(evt) { 
        //         writeToScreen('ERROR: ' + evt.data); 
        //     }  
        //     function doSend(message) { 
        //         writeToScreen("SENT: " + message);
        //         websocket.send(message); 
        //     }  
        //     function writeToScreen(message) { 
        //         var pre = document.createElement("p"); pre.style.wordWrap = "break-word"; pre.innerHTML = message; output.appendChild(pre); 
        //     }  
        //     window.addEventListener("load", init, false);  


$(document).ready(function() {
            $("#personData").click(function() {
                $.ajax({
                    async: true,
                    type: "post",
                    url: 'data/',
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
                alert(("#articlecontent").val());
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