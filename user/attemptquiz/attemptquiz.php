<?php
    ini_set('display_errors',1);
    include_once('../../config/session.php');
    $_SESSION['USER_ID'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Attempt Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="attemptquiz.css">
</head>
<body>
    <div class="main">
        <div class="box">
            <div class="head">ENTER QUIZ ID</div>
            <form action="attemptquizmaster.php" method="post">
                <input type="text" name="quizid" id="" placeholder=" Quiz ID" autocomplete="off" required>
                <input type="submit" value="Start Quiz" name="startquiz">
            </form>
        </div>
    </div>
</body>
</html>