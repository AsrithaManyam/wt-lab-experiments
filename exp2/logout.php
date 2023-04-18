<?php
session_start();
$a=$_SESSION['firstname'];
$con=mysqli_connect('localhost','root','','facebook');
$r=mysqli_query($con,"delete from activeusers where name='$a'");
unset($_SESSION['email']);
unset($_SESSION['firstname']);
session_destroy();
header('location:login.php');
?>