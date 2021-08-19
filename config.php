<?php

$db = mysqli_connect("localhost","root","","clothes-stock");  // database connection

if($db == false){
   dir('Error: Connection not made!');
}

?>

