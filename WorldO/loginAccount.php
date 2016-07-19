<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to WorldO </title>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/checkLogin.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php 
        #確認是否登入中
        if (!isset($_SESSION["account"]) || !isset($_SESSION["password"]))
             {
                 
             }
            else {
               header("location:personalPage.php");
            }
    ?>
</head>

<body>
    <?php include "title";?>
    <form class="form-signin" role="form ">
        <div class="container1" align="center" valign="center">
            <div class="col-lg-4"></div>
            <div class="col-lg-4" id="pageH">

                <tr>
                    <h2 class="form-signin-heading">Please sign in</h2>
                </tr>
                <tr>
                    <label for="inputText" class="sr-only">Account</label>
                    <input type="text" id="inputAccount" class="form-control" placeholder="Account" required="" autofocus="">
                </tr>
                <tr>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                </tr>
                <tr>
                    <input type="checkbox" value="remember-me">Remember me
                </tr>
                <tr>
                    <button class="btn btn-lg btn-primary btn-block" id="signin" type="button">Sign in</button>
                </tr>
            </div>

        </div>
    </form>

</body>