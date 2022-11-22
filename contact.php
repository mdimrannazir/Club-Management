<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us!</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://kit.fontawesome.com/64cc2e590f.js" crossorigin="anonymous"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        @font-face {
            font-family: pop;
            src: url(./fonts/Poppins-Medium.ttf);
        }


        .main {
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: pop;
            padding: 50px;
            padding-top: 10px;
        }

        .main .heading {
            font-size: 25px;
            margin-bottom: 10px;
            position: relative;
        }

        .heading span {
            color: #45C7EE;
        }

        .heading::after {
            content: " ";
            position: absolute;
            width: 60%;
            height: 3px;
            left: 50%;
            transform: translateX(-50%);
            bottom: -5px;
            background-color: #45C7EE;
        }

        .container {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .container .card {
            width: 230px;
            height: 350px;
            position: relative;
            border-radius: 10px;
            background-color: #fff;
            overflow: hidden;
            box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.37);
            margin: 15px;
        }

        .card::after {
            content: " ";
            width: 100%;
            height: 40%;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #0F252E;
        }

        .card img {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            object-fit: fit;
            transition: .6s;
            box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.37);
            z-index: 99;
        }

        .card:hover img {
            transform: scale(.50) translateY(-120px);
            border-radius: 10px;
        }

        .card .details {
            width: 100%;
            height: 100%;
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            padding-bottom: 40px;
            transform: translateY(100%);
            transition: .6s;
        }

        .card:hover .details {
            transform: translateY(0);
        }

        .details h3 {
            font-size: 22px;
            color: #0F252E;
        }

        .details p {
            font-size: 15px;
            color: #333;
            margin-bottom: 7px;
        }

        .details .social-links {
            display: flex;
        }

        .details .social-links a {
            width: 30px;
            height: 30px;
            margin: 0 5px;
            border-radius: 50%;
            color: #333;
            background-color: rgb(182, 182, 182);
            text-decoration: none;
            transition: .6s;
            display: grid;
            place-items: center;
            font-size: 17px;
        }

        .details .social-links a:hover {
            transform: rotate(360deg);
            background-color: #45C7EE;
            color: #fff;
        }

        .fotter {
            min-height: 400px;
        }
    </style>
</head>

<body>

    <?php
    require 'db/_nav.php';
    ?>



    <div class="main fotter">
        <h3 class="heading"><span>Developer's </span>Info</h3>
        <div class="container">
            <div class="card">
                <img src="images/imran.png">
                <div class="details">
                    <h3>Md. Imran Nazir</h3>
                    <p>ID: 19202103248</p>
                    <div class="social-links">
                        <a href="https://facebook.com/getimran247/"><i class="uil uil-facebook-f"></i></a>
                        <a href="mailto:imrannazir1.in@gmail.com"><i class="uil uil-envelope-edit"></i></a>
                    </div>

                </div>
            </div>
            <div class="card">
                <img src="images/disha.png">
                <div class="details">
                    <h3>Khandakar Tasfia Reza</h3>
                    <p>ID: 19202103286</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/tasfia.disha.3"><i class="uil uil-facebook-f"></i></a>
                        <a href="mailto:imrannazir1.in@gmail.com"><i class="uil uil-envelope-edit"></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="images/tanvir.png">
                <div class="details">
                    <h3>Tanbir Hasan Bhuiyan</h3>
                    <p>ID: 19202103294</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/thb124578"><i class="uil uil-facebook-f"></i></a>
                        <a href="mailto:imrannazir1.in@gmail.com"><i class="uil uil-envelope-edit"></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="images/afsana.png">
                <div class="details">
                    <h3>Afsana Akter</h3>
                    <p>ID: 19202103295</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100047157576273"><i class="uil uil-facebook-f"></i></a>
                        <a href="mailto:afsanarinki2020@gmail.com"><i class="uil uil-envelope-edit"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

<?php
include 'db/_footer.php';
?>

</html>