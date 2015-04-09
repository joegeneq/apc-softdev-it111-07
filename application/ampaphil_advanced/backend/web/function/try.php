<?php

require_once 'connection.php';

extract($_POST);
extract($_GET);

echo "Applicant ID:" . $id;

$lastname = ""; $firstname = ""; $middlename = ""; $fullname = "";
$date="";

$query = "SELECT * FROM applicant WHERE `id` = '$id'";     
$result= $dbc->query($query);

for($a=0; $a<$result->num_rows; $a++)
          {
            $data = $result->fetch_assoc(); 
            extract($data);

            $lastname = $app_lname;
            $firstname = $app_fname;
            $middlename = $app_mname;
            $screeningschedid = $screening_sched_id;
          }


$fullname = $firstname." ".$middlename." ".$lastname;

echo "\n Talent Name:" . $fullname;
echo "Screening Sched ID: " . $screeningschedid;

echo date("Y-m-d");

$sql = "INSERT INTO `ampaphil_bms`.`talent` (
        `id`,
        `manager_id`,
        `talent_managedstartdate`,
        `talent_managedenddate`,
        `screening_sched_id`,
        `applicant_id`,
        `talent_fullname`
        )
        VALUES (
        	NULL,
        	'1',
        	'$date',
        	'$date',
        	'$screeningschedid',
        	'$id',
        	'$fullname'
       );";

$dbc->query($sql);

$query = "UPDATE  `ampaphil_bms`.`applicant` SET  
								`app_status` = 'Talent'
								WHERE  `applicant`.`id` = '$id';";
$dbc->query($query);

header('Location: ../index.php?r=talent');

?>