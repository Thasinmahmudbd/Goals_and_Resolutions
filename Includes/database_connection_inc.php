<?php 

// Connecting to database: goals_and_resolutions.
$connection = mysqli_connect('localhost','root','','goals_and_resolutions');

if(!$connection) {
    die("Problem connecting to database.");
    mysqli_error();
}

?>
