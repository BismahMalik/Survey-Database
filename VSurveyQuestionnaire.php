<?php
$connction= mysqli_connect('localhost', 'root', 'admin123','surveydb');


if(!$connction)
die("could not connect".mysqli_connect_error());

$query= "Select* From survey_questionnaire";

$stmt= mysqli_query($connction,$query);


while($row= mysqli_fetch_array($stmt,MYSQLI_ASSOC)){
echo 'Survey ID: '.$row['Survey_ID'] . 'Question ID: '.$row['QuestionID']. '<br><br>';

}

?>