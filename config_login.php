<?php

$db = mysqli_connect("localhost","root","","login-sys");  // database connection

if($db == false){
   dir('Error: Connection not made!');
}

?>