<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "cse328";

$connect = mysqli_connect($server, $username, $password, $database);
if (!$connect) {
    die("Error" . mysqli_connect_error());
}

// function isJoin($uid, $clubid){
//     global $connect;
//     $sql = "SELECT * FROM `common` WHERE uid =".$uid." AND club_id =".$clubid;
    
//     //$fireq = mysqli_query( $connect, $sql);
// $fireq = mysqli_query($connect, $sql);
//     $rowcount=mysqli_num_rows($fireq);
    
//     if($rowcount == 1){
//         return true;
//     } return false;

//  }
// function isJoinAll($uid){
//     $sql = "SELECT * FROM `common` WHERE uid =".$uid;

// }