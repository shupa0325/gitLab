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
         <li id = "login"><?php echo "<BR>".$_SESSION['userName'];?></li>
         <li id = "logout"><a href = "data/logoutAccount">登出</a></li>

<?php }else{ ?>
        <li id = "login" ><a style = "cursor : pointer" >登入</a></li>
        <li id = "create"><a style = "cursor : pointer"  >註冊</a></li>
<?php }?>
                </ul>
            </div>
        </div>
</nav>
<BR><BR><BR>