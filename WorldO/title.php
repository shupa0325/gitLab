<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.php">WorldO</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
              <?php session_start();if(isset($_SESSION['username'])){ ?>

         <li id = "userName" value = ""><?php echo $_SESSION['username'];?></li>
         <li ><a style = "cursor : pointer "id = "notice" >好友邀請</a>
         <div id="invite_list" style="
    position: absolute;
    background: pray;
    width: 200%;
    height: 350px;
    display:none;
    font-size:2em;
">
             <style type="text/css">
        td{
            border:white 2px solid;
        }
    </style>
             <table id="noticeTable">
</table></div></li>
         </li>
         <li id = "logout"><a href = " data/logoutAccount">登出</a></li>
                <?php }else{ ?>
                <li id="login"><a style="cursor : pointer">登入</a></li>
                <li id="create"><a style="cursor : pointer">註冊</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>
<BR>
<BR>
<BR>