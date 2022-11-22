<?php
    if (isset($_POST['club_id'])) {
        //update the record
        $sno = $_POST["club_id"];
        $title = $_POST["titleEdit"];
        $motto = $_POST["descriptionEdit"];
        $sql = "UPDATE `clubs` SET `club_name` = '$title', `club_motto`='$motto' WHERE `clubs`.`club_id` = '$sno'";
        $fireq = mysqli_query($connect, $sql);
        if ($fireq) {
           header('Location:../dashboard.php');
        }
    }

    else if (isset($_POST['evid'])) {
        //update the record
        $sno = $_POST["evid"];
        $title = $_POST["evname"];
        $motto = $_POST["evpurpose"];
        $sql = "UPDATE `event` SET `evname` = '$title', `evpurpose`='$motto' WHERE `event`.`evid` = '$sno'";
        $fireq = mysqli_query($connect, $sql);
        if ($fireq) {
           header('Location:../dashboard.php');
        }
    }

