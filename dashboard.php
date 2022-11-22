<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
include 'db/_dbConnect.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64cc2e590f.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation starts here -->
    <?php
    require 'db/_nav.php';
    ?>
    <!-- Navigation ends here -->

    <!-- Clubs general message starts here -->
    <div class="container-fluid" style="margin:0px ; padding:0px;">
        <div class="alert alert-success" role="alert" ">
            <?php
            $id = $_SESSION['uid'];
            $sql = "SELECT username FROM `users7` WHERE uid = $id";
            $fireq = mysqli_query($connect, $sql);

            while (($row = mysqli_fetch_assoc($fireq))) {
                $name = $row['username'];
                echo '<p><h1>Hey ' . strtoupper($name) . ', welcome to your CMS dashboard!</h1></p>';
            }
            // $fireq = mysqli_query($connect, $sql);
            // var_dump($_POST);
            // $clubid = $_POST["club_id"];
            // $sql = "SELECT * FROM clubs Where club_id = '$clubid'";
            // $fireq = mysqli_query($connect, $sql);

            ?>
        </div>
    </div>
    <!-- Clubs general message ends here -->

    <!-- SLIDER starts here -->
    <div id=" carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/card.png" class="d-block w-100" height="300px" alt="an image..">
                </div>
                <div class="carousel-item">
                    <img src="images/card2.png" class="d-block w-100" height="300px" alt=".an image...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- SLIDER ends here -->


        <!-- Clubs starts here -->
        <div class="container my-4" id="club">
            <h2 class="text-center">
                <?php if ($id == 111) echo '<a href="updatec.php">Create a club...</a><br>
        <a href="eupdate.php">Create an event...</a>';
                else echo 'Browse Through the Clubs...'; ?> </h2>
            <div class="row">

                <!-- fetch all clubs -->

                <?php
                $sql = "SELECT * FROM `clubs`";

                $fireq = mysqli_query($connect, $sql);
                //Using a loop here to iterate through clubs 
                while ($row = mysqli_fetch_assoc($fireq)) {
                    echo '<div class="col-md-4">
                            <div class="card my-2" style="width: 18rem;">
                                <img src="images/' . $row['club_name'] . '.png" class="card-img-top" alt="an image..">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row['club_name'] . '</h5>
                                    <p class="card-text" maxlength="30">' . substr($row['club_motto'], 0, 40) . '...</p>
                                    
                                    <div class="col-md-12 row">
                                    
                                    <a href="club.php?clubid=' . $row['club_id'] . '" class="btn btn-success">Explore the club</a>';
                    if ($id == 111) {

                        echo '
                                            <form action="dashboard.php" method="POST">
                                            
                                        <input  type="hidden" name="club_id">
                                        <a href="updatec.php" class="btn btn-outline-warning my-2">Update the club</a></form>';
                        // <button type="button" class="btn btn-outline-danger my-2">Delete Club</button>

                    }

                    echo '</div>
                                </div>
                            </div>
                        </div>
                        ';
                }
                ?>
            </div>
        </div>
        <!-- Clubs ends here -->

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

<?php
include 'db/_footer.php';
?>

</html>