<?php 
date_default_timezone_set("Asia/Makassar");
session_start();
$conn = mysqli_connect("localhost", "rahmat_ryu", "14021998", "db_berita");

if (isset($_GET['logout'])) {
	$for = $_GET['for'];
	unset($_SESSION[$for]);
	unset($_SESSION['get_id']);
	setcookie($for, FALSE, time()-1728000);
	setcookie('get_id', FALSE, time()-1728000);

	header("location: login.php");
}
?>