<?php

$database ="Endarasha_Kcc";
$server ="localhost";
$username ="root";
$password ="";

 $connect = mysqli_connect($server, $username, $password, $database);
if(!$connect){
echo "there was a problem connecting to database".mysqli_error();
}

?>