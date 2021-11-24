<?php
//change based on your database informtion 
$dbhost = "localhost";
$dbuser="root";
$dbpass="";
$dbname="game";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$connection){
    echo "Connection failed";
}


?>