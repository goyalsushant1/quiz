<?php

include_once('../../config/dbconfig.php');
include_once('../../config/session.php');

class Quiz
{
    private $name;
    public function __construct($quizname)
    {
        # code...
        $this->name = $quizname;
    }
    public function createQuiz()
    {
        # code...
        global $connection_object;
        $query = "INSERT INTO quiz_master(quiz_title) VALUES ('$this->name')";
        $execute = $connection_object->prepare($query);
        $execute->execute();
        if ($execute) {
            # code...
            $query_id = "SELECT quiz_id FROM quiz_master WHERE quiz_title='$this->name'";
            $exec = $connection_object->prepare($query_id);
            $exec->execute();
            $value = $exec->fetch(PDO::FETCH_ASSOC);
            $_SESSION['QUIZ_ID']=$value['quiz_id'];
            echo "Quiz Created Successfully<br>".
                "Add Questions to the Quiz ...<br>".
                "Click <a href="."../addquestion/addquestion.php".">here</a> to add questions";
        } else {
            # code...
            echo "Quiz Creation Unsuccessful ...<br>".
                "Something went Wrong.  Please check back later<br>".
                "Retry Quiz Creation : <a href="."quizcreate.php".">Click Here</a>";
        }
    }
    public function updateQuiz()
    {
        # code...
        global $connection_object;
        $query = "SELECT quiz_id FROM quiz_master WHERE quiz_title='$this->name'";
        $execute = $connection_object->prepare($query);
        $execute->execute();
        if ($execute) {
            # code...
            // $query_id = "SELECT quiz_id FROM quiz_master WHERE quiz_title='$this->name'";
            // $exec = $connection_object->prepare($query_id);
            // $exec->execute();
            $value = $execute->fetch(PDO::FETCH_ASSOC);
            $_SESSION['QUIZ_ID']=$value['quiz_id'];
            echo "Add Questions to the Quiz ...<br>".
                "Click <a href="."../addquestion/addquestion.php".">here</a> to add questions";
        } else {
            # code...
            echo "Something went Wrong.  Please check back later<br>".
                "Retry Quiz Updation : <a href="."quizcreate.php".">Click Here</a>";
        }
    }
}

$quizname = $_POST['quizname'];

if(empty($quizname))
{
    echo 'Quiz name can not be empty.<br>'.
        'Please enter a valid quiz name<br>'.
        'Enter Quiz Name <a href="#">Again</a>';
}

$quiz = new Quiz($quizname);
if(isset($_POST['create_quiz']))
    $quiz->createQuiz();
if(isset($_POST['update_quiz']))
    $quiz->updateQuiz();