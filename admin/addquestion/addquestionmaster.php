<?php
ini_set('display_errors',1);

include_once('../../config/dbconfig.php');
include_once('../../config/session.php');

class AddQuestion
{
    private $question,$option1,$option2,$option3,$option4,$questype,$answer;
    public function __construct($question,$option1,$option2,$option3,$option4,$questype,$answer)
    {
        # code...
        $this->question = $question;
        $this->option1 = $option1;
        $this->option2 = $option2;
        $this->option3 = $option3;
        $this->option4 = $option4;
        $this->answer = $answer;
        $this->questype = $questype;
    }
    public function addQues()
    {
        # code...
        global $connection_object;
        $quizID = $_SESSION['QUIZ_ID'];
        $query = "INSERT INTO questions(`quiz_id`,`ques_type`,`question`,`option1`,`option2`,`option3`,`option4`,`answers`)".
            "VALUES ('$quizID','$this->questype','$this->question','$this->option1','$this->option2','$this->option3','$this->option4','$this->answer')";
        $execute = $connection_object->prepare($query);
        $execute->execute();
        if ($execute) {
            # code...
            echo "Question Added Successfully<br>".
                "Enter More Ques...".
                "Click <a href="."addquestion.php".">here</a></br>".
                "Enter New Quiz...".
                "Click <a href="."../quizcreate/quizcreate.php".">here</a></br>";
        } else {
            # code...
            echo "Ques Addition Unsuccessful ...<br>".
                "Something went Wrong.  Please check back later<br>".
                "Retry Adding Ques : <a href="."addquestion.php".">Click Here</a>";
        }
    }
}

$question = $_POST['question'];
$option1= $_POST['option1'];
$option2= $_POST['option2'];
$option3= $_POST['option3'];
$option4= $_POST['option4'];
$questype= $_POST['ques_type'];
$answer= $_POST['answer'];
if(empty($question)&&empty($option1)&&empty($option2)&&empty($option3)&&empty($option4)&&empty($questype)&&empty($answer))
{
    echo "All fields are required";
    die();
}
$ques = new AddQuestion($question,$option1,$option2,$option3,$option4,$questype,$answer);
$ques->addQues();