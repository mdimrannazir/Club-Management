<?php
session_start();
$event = false;
include 'db/_dbConnect.php';
$joined = "Join the event";
if (isset($_POST['joinev'])) {
    $uid = $_SESSION['uid'];
    $eventid = $_POST["join"];
    $sql = "INSERT INTO `commone` (`evid`, `uid`) VALUES ('$eventid', '$uid')";
    $fireq = mysqli_query($connect, $sql);
} else $joined = "Joined";
$evid = $_GET['eventid'];
$sql = "SELECT * FROM event Where evid = '$evid'";
$fireq = mysqli_query($connect, $sql);
$num = mysqli_num_rows($fireq);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    /* Event design Starts*/

    #eventPage {
        margin-left: 25px;
        margin-right: 25px;

    }

    .evntContainer {
        display: flex;
        margin: 10px;
    }

    .evntLeft {
        width: 60%;
        height: 60%;
    }

    .imgContainer img {
        width: 100%;
    }

    .evntNameBtn {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .evntJoinBtn {
        background-color: #96DCE0;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        font-weight: bold;
        border: 1px solid #96DCE0;
        border-radius: 10px;
    }

    .btnLevntJoinBtn:hover {
        background-color: #00476F;
        color: white;
        transition-delay: 0.1s;
    }

    .evntRight {
        margin-left: 10px;
        width: 40%;
    }


    /* Google map start */
    .map-container {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .map-container iframe {
        left: 0;
        top: 0;
        height: 300px;
        width: 100%;
        position: absolute;
    }

    .mapDiv {
        margin-top: 80px;
    }

    /* Google map ends */
    </style>
    <script src="https://kit.fontawesome.com/64cc2e590f.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation starts here -->
    <?php
    require 'db/_nav.php';

    $sql = "SELECT * FROM event Where evid = '$evid'";
    $fireq = mysqli_query($connect, $sql);
    //Using a loop here to iterate through event 
    while ($row = mysqli_fetch_assoc($fireq)) {
        $eid =  $row['evid'];
        $ename = $row['evname'];
        $edetails = $row['evdetails'];
    }

    ?>
    <section id=eventPage>
        <!-- Event start here -->
        <div class="evntContainer">
            <div class="evntLeft">
                <div class="imgContainer">
                    <img src="images/boi.jpg" alt=" battle event image">
                </div>
                <div class="evntNameBtn">
                    <div class="evntTitle">
                        <h2> <?php $ename ?> </h2>
                    </div>
                    <form action="event.php?eventid=<?php echo $evid; ?>" method="POST">
                        <input type="hidden" name="join" value="<?php echo $evid; ?>">
                        <button type="submit" class="evntJoinBtn" name="joinev"><?php echo $joined ?></button>
                        <p><b>Event Description:-</b><br>There will be four category
                            1. ICT Olympiad
                            2. Math Olympiad + I.Q Test
                            3. Rubik's cube
                            4. Networking
                            For each of the events, students have to register independently and registration fee for
                            each event is 20 taka.
                            Token will be available from 10th March 2020 (1:00 PM) at IT Club Room (501/B3). Students
                            first have to collect tokens paying the registration fee and then can register online.
                            The online registration link is given on the token.
                            Online Registration Deadline : 11th March 12:01AM</p>
                    </form>
                </div>

                <?php echo $edetails ?>
            </div>

            <div class="evntRight">
                <h3>Details</h3>
                <p><i class="fa-solid fa-flag"></i><b> Event by: </b> BUBT IT Club</p>
                <p><i class="fa-solid fa-calendar-days"></i><b> Event Date: </b> 12th March, 2022 <b>From:11:30AM</b>
                </p>
                <p><i class="fa-solid fa-alarm-clock"></i><b> Duration: </b> 6 hours, 30 minutes</p>
                <p><i class="fa-solid fa-location-pin"></i><b> Event Location:</b>Bangladesh University of Business and
                    Technology</p>

                <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container mapDiv" style="height: 500px">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1914239855546!2d90.352688015422!3d23.811791150209412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c12015382851%3A0x3ceca92fcf1a72d2!2sBangladesh%20University%20of%20Business%20and%20Technology%20(BUBT)!5e0!3m2!1sen!2sus!4v1668781354248!5m2!1sen!2sus"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!--Google Maps-->
            </div>
        </div>
    </section>
    <!-- Event ends here -->
    <?php
    include 'db/_footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>