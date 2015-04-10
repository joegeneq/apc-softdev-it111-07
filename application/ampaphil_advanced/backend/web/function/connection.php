<?php
function con($user='ampaphil_bms', $pass='ampaphil_bms', $database='ampaphil_bms', $host='localhost')
{
    $mysqli = new mysqli($host, $user, $pass, $database);
    if(mysqli_connect_errno())
    {
        printf("Failed to connect to database: %s", mysqli_connect_error());
        die();
    }

    return $mysqli;
}


$dbc = con();
?>