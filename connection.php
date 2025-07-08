<?php
$hostname="localhost";
$username="root";
$password="";
$database ="cooking_recipe";
$con = mysqli_connect( $hostname,$username,$password,$database);
if($con ==true){
    echo "Connect succeeded";
}
else{
    echo "Connect failed";
}
?>