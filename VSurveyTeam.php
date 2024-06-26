<?php
$connction= mysqli_connect('localhost', 'root', 'admin123','surveydb');


if(!$connction)
die("could not connect".mysqli_connect_error());

$query= "Select* From survey_team";

$stmt= mysqli_query($connction,$query);


while($row= mysqli_fetch_array($stmt,MYSQLI_ASSOC)){
echo'Survey Team ID: '.$row['SurveyTeam_id'] . 'Total Members: '.$row['TotalMembers']. 'Survey ID: '.$row['Survey_id'].'Staff ID: '.$row['Staff_id']. '<br><br>';

}

?>