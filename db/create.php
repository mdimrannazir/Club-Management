<?php
include '_dbConnect.php';
    if (isset($_POST['create'])) {
        //update the record
        $title = $_POST["title"];
        $motto = $_POST["motto"];
        $sql = "INSERT INTO `clubs` (`club_id`, `club_name`, `club_motto`, `club_created`) VALUES (NULL, '$title', '$motto', current_timestamp());";
        
        $result = mysqli_query($connect, $sql);
        if ($result) {
           header('Location:../dashboard.php');
        }
    }
   else if (isset($_POST['createevent'])) {
        //update the event
        $title = $_POST["etitle"];
        $motto = $_POST["epurpose"];
        $crecord = $_POST["crecord"];
        $sql = "INSERT INTO `event` (`evid`,`evname`, `evpurpose`, `evcreation` , `crecord`) VALUES (NULL, '$title', '$motto', current_timestamp(),'$crecord');";
        
        $result = mysqli_query($connect, $sql);
        if ($result) {
           header('Location:../dashboard.php');
        }
    }

