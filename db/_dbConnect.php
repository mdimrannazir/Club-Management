<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "cmsdb";


$connect = mysqli_connect($server,$username,$password,$database);
if(!$connect){
    die("Error".mysqli_connect_error());
}

?>