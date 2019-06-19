<?php
session_start();
if(isset($_SESSION['username']))
{
	header('location:login.php');
}
$con=mysqli_connect('localhost',root);
mysqli_select_db($con,'login');
?>
<h3>WELCOME<?php echo $_SESSION['username'];?></h3>