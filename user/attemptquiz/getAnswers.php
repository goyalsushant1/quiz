<?php
ini_set('display_errors',1);
include_once('../../config/dbconfig.php');
include_once('../../config/session.php');

class GetAnswers
{
    private $a;
}

$questions = $connection_object->prepare("SELECT * from questions");
$questions->execute();
$questions_array = $questions->fetchAll();
$correct_answers=array();
$answers=array_values($_POST);
foreach($questions_array as $question)
{
    array_push($correct_answers,$question['answers']);
}
if($questions_array) 
{
    $marks = 0;
    for($i = 0 ; $i < sizeof($answers) ; $i++)
    {
        if($correct_answers[$i] == $answers[$i])
        {
            $marks = $marks + 1;
        }
    }

    echo "Marks Scored : " . $marks . "<br>";
    echo "Percentage is : " . $marks*100/sizeof($answers)."%";
}
else
{
    echo "Something Went Wrong !!!";
    die();
}
?>