<?php
ini_set('display_errors',1);

include_once ('../../config/dbconfig.php');
include_once('../../config/session.php');
$_SESSION['USER_ID'];

class AttemptQuiz
{
    private $quizID;
    public function __construct($quizid)
    {
        # code...
        $this->quizID=$quizid;
    }
    public function showQuiz()
    {
        # code...
        global $connection_object;
        $query = "SELECT * from questions WHERE quiz_id='$this->quizID'";
        $questions = $connection_object->prepare($query);
        $questions->execute();
        $question_array = $questions->fetchAll();
        if($question_array) 
        {
            echo "<h1>Let's Start The Quiz !!!</h1>";
            echo '<form action="getAnswers.php" method="post">';
            foreach($question_array as $question)
            {
                echo "<div class='question'> <strong>Question : </strong> {$question['question']} </div>";
                echo "<input type='radio' name='{$question['question']}' value='{$question['option1']}'>";
                echo "<label>{$question['option1']}</label><br>";
                echo "<input type='radio' name='{$question['question']}' value='{$question['option2']}'>";
                echo "<label>{$question['option2']}</label><br>";
                echo "<input type='radio' name='{$question['question']}' value='{$question['option3']}'>";
                echo "<label>{$question['option3']}</label><br>";
                echo "<input type='radio' name='{$question['question']}' value='{$question['option4']}'>";
                echo "<label>{$question['option4']}</label><br>";
                echo ""; 
            }
            echo '<input type="submit" value="Submit Answers">';
            echo '</form>';
        }
        else
        {
            echo "Something Went Wrong !!!";
            die();
        }
    }
}

$quizid = $_POST['quizid'];
if(!isset($quizid))
{
    echo 'Plaese fill the quiz id';
    die();
}

$attempt = new AttemptQuiz($quizid);
$attempt->showQuiz();