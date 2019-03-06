<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="quizcreate.css">
</head>
<body>
    <div class="main">
        <div class="box">
            <div class="head">CREATE QUIZ</div>
            <form action="quizcreatemaster.php" method="post">
                <input type="text" name="quizname" id="" placeholder=" Quiz Name" autocomplete="off" required>
                <input type="submit" value="Create Quiz" name="create_quiz">
                <div class="addques">
                    Update Quiz? <a href="updatequiz.php">Update Here !!</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>