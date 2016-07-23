<!DOCTYPE html>
<html lang="en">
<?php
    // require_once "model/loadArticle.php";
?>

    <head>
        <?PHP include_once('config.php'); ?>
        <?= $this->script('userCmd') ?>
<style type="text/css">
    .container{
        width:1170px;
    }
</style>
    </head>
<!--background: url('image/homepage.jpg') no-repeat center center fixed;background-size:cover;-->
    <body style="background-color:#5599FF; ">

        <?php include "title.php";?>
        <BR>
        <BR>
        <BR>
        <div class="left col-xs-3">
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
        <div class="middle col-xs-6">
            <div class="container1">
                <form action="newArticle.php" method="POST">
                    <tr>
                        標題 : <input type="text" id="articletitle" name="articletitle" maxlength="30" required/>
                        <BR>文章內容:
                        <BR>
                    </tr>
                    <tr>
                        <textarea rows="5%" cols="50%" wrap="hard" name="articlecontent" id="articlecontent" required></textarea>
                        <BR>
                    </tr>
                    <tr>
                        <input type="submit" value="發表" id="newArticle" name="newArticle" />
                    </tr>
                </form>
            </div>
            <form class="article" role="form">
            <!--    <?php include_once "model/loadArticle.php";?>-->
            <!--    <?php foreach($res as $value): ?>-->
            <!--    <tr>-->
            <!--<?php foreach($value as $value2): ?>-->
            <!--        <BR>-->
            <!--        <td>-->
            <!--            <?php  ?>-->
            <!--        </td>-->
            <!--        <BR>-->
            <!--<?php endforeach; ?>-->
            <!--    </tr>-->
            <!--    <?php endforeach; ?>-->
            </form>

        </div>
        <div class="right col-xs-3 float:right">
            <form>
                <tr>
                    <td>
                        <input type="button" id="talkFriend" name="talkFriend" value="talkFriend">
                    </td>
                    <td>
                        <div>
                        <div id="result">Hello! </div>
                        <div ><p id='showtext'><div>
                        </div>
                    </td>
                    <td>
                        <div id="friendselect"style="
    position: fixed;
    top: 15%;
    right: 7%;
"><select name="friendTalk" id="friendTalk" size="10" style="
    position: fixed;
    right: 2%;
"></div>
                
                    
                </select>
                
                    
                </select>
                    </td>

            </form>
        </div>
    </body>

</html>