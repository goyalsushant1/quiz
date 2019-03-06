<?php
    include_once('../../config/session.php');
    $_SESSION['QUIZ_ID'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="addquestion.css">
</head>
<body>
    <div class="main">
        <div class="box">
            <div class="head">Add Question to Quiz</div>
            <form action="addquestionmaster.php" method="post">
                <select name="ques_type" required>
                    <option value="">--Select--</option>
                    <option value="single">Single Choice</option>
                    <option value="multiple">Multiple Choice</option>
                </select>
                <input type="text" name="question" id="" placeholder=" Question" autocomplete="off" required>
                <input type="text" name="option1" id="" placeholder=" Option 1" autocomplete="off" required>
                <input type="text" name="option2" id="" placeholder=" Option 2" autocomplete="off" required>
                <input type="text" name="option3" id="" placeholder=" Option 3" autocomplete="off" required>
                <input type="text" name="option4" id="" placeholder=" Option 4" autocomplete="off" required>
                <input type="text" name="answer" id="" placeholder=" Correct Answer" autocomplete="off" required>
                <input type="submit" value="Add Question" name="add_question">
            </form>
        </div>
    </div>
</body>
</html>