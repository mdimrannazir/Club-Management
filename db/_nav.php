
<?php
$loggedin = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $loggedin = true;
}
echo'<div class="navBar">
<a href="index.php"><img src="images/cms.png" style="width:125px; margin-left: 10px;"></a>
<a href="login.php" class="navLinks"><i class="fa fa-fw fa-user"></i> Login</a>
<a href="signup.php" class="navLinks"><i class="fa fa-fw fa-user"></i> Signup</a>
<a href="mailto:afsanarinki2020@gmail.com" class="navLinks"><i class="fa fa-fw fa-envelope"></i>
    Contact</a>
<a href="index.php" class="navLinks"><i class="fa fa-fw fa-home"></i> Home</a>
</div>';

?>