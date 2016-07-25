<!DOCTYPE html>
<html>

<head>
    <?php include_once('config.php'); ?>
    <?php $this->script('userCmd') ?>
    <style type="text/css">
        .container {
            width: 1170px;
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
        <form id="person">
            <tr>
                <input type="button" id="personData" name="personData" value="personData"></button>
                <br><br>
            </TR>
            <tr>
                <input type="button" id="myarticle" name="myarticle" value="myarticle"></button>
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

        </form>
    </div>
    <div class="middle col-xs-6">
        <div class="container1">
            <form action="article/newArticle" method="POST">
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
        <form class="article" role="form" id="articletest">

            <!--<h3>標題</h3>-->
            <!--<h5>帳號</h5>-->
            <!--<textarea rows="4" cols="20" readonly="readonly">內容</textarea>-->
            <!--<h5>時間</h5>-->
            <!--<?php include_once "article/loadArticle";?>-->
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
        <form method = "POST" action = "data/sendMessage">
        訊息:    <input type="text" name="message"/><br>
        好友:    <input type="text" name="friend"/>
            <input type="submit" value="Submit"/>
        </form>
        <form>
            <tr>
                <td>
                    <div>
                        <div id="result">Messager</div>
                        <p id='showtext'>
                            <div>
                                <div>
                                </div>
                </td>
                <td>
                    <div id="friendselect" style="
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