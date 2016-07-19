<!DOCTYPE html>
<html lang="en">
<?php
    require_once "model/loadArticle.php";
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta id="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to WorldO </title>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script src="js/userCmd.js"></script>

    </head>

    <body style="background-color:lightpink; background: url('image/homepage.jpg') no-repeat center center fixed;background-size:cover;">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <input type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.php">WorldO</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li id="logout"><a href="index.php">登出</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <BR>
        <BR>
        <BR>
        <div class="left col-lg-3">
            <form>
                <tr>
                    <input type="button" id="personData" name="personData" value="personData"></button>
                    <br><br>
                </TR>
                <tr>
                    <input type="button" id="friendTable" name="friendTable" value="friendTable"></button>
                    <br><br>
                </TR>
                <tr>
                    <td>
                        <input type="button" id="addFriend" name="addFriend" value="addFriend"> </button>
                    </td>
                    <td>
                        <input type="text" id="addFriendt" name="addFriendt" value=""></button>
                    </td>
                    <br><br>
                </TR>
                <tr>
                    <td>
                        <input type="button" id="deleteFriend" name="deleteFriend" value="deleteFriend"></button>
                    </td>
                    <td>
                        <input type="text" id="deleteFriendt" name="deleteFriendt" value=""></button>
                    </td>
                    <br><br>
                </TR>

                <tr>
                    <input type="button" id="deleteArticle" name="deleteArticle" value="deleteArticle"></button>
                    <br><br>
                </TR>
            </form>
        </div>
        <div class="middle col-lg-6">
            <div class="container1">
                <form action="newArticle.php" method="POST">
                    <tr>
                        標題 : <input type="text" id ="articletitle" name="articletitle" maxlength="30" required/><BR>文章內容:<BR>
                    </tr>
                    <tr>
                        <textarea rows="5%" cols="50%" wrap="hard" name="articlecontent" id ="articlecontent" required></textarea><BR>
                    </tr>
                    <tr>
                        <input type="submit" value="發表" id="newArticle" name="newArticle" />
                    </tr>
                </form>
            </div>
            <form class="article" role="form">
                <?phph include "model/loadArticle.php";
                <?php foreach($res as $value): ?>
                <tr>
                <!--<?php foreach($value as $value2): ?>-->
                    <BR>
                    <td>
                        <?php echo $value[0]; ?>
                    </td>
                    <BR>
                <!--<?php endforeach; ?>-->
                </tr>
                <?php endforeach; ?>
            </form>

        </div>
        <div class="right col-lg-3 float:right">
            <form>
                <tr>
                    <td>
                        <input type="button" id="talkFriend" name="talkFriend" value="talkFriend"></button>
                    </td>
                    <td>
                        <div id="result">Hello! </div>
                        <input type="text" id="output" name="output" value=""></button>
                    </td>
                    <td>
                        <select name="friendTalk" size="10">
                    <?php for($i=0;$i<5;$i++):?>
                        <option><?php ?></option>
                    <?php endfor;?>
                    
                </select>
                    </td>

            </form>
        </div>
    </body>

</html>