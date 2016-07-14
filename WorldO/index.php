<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to WorldO </title>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/homepage.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php 
        #確認是否登入中
        if (!isset($_COOKIE["account"]) || !isset($_COOKIE["password"]))
             {
                 
             }
            else {
                header("refresh:2 ,view/personalPage.php");
            }
    ?>

</head>

<body style="background-color:lightpink; background: url('image/homepage.jpg') no-repeat center center fixed;background-size:cover;">
    <div id ="allpage">
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
                    <li id = "login"><a>登入</a></li>
                    <li id = "create"><a>註冊</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <BR><BR><BR>
    <div class="container1" align="center" valign="center">
        <div class="col-lg-4"></div>
        <div class="col-lg-4" id="pageH">
            
        </div>
        
    </div>
</div>  
</body>

</html>