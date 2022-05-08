<?php
$conn = mysqli_connect("localhost", "root", "0611845441M@ad", "bestevaer");

session_start();
$user_check = $_SESSION['login_gebruiker'];
$query = "SELECT username from login where username = '$user_check'";
$ses_sql = mysqli_query ($conn, $query);
$row = myssqli_fetch_assoc($ses_sql);
$login_session = $row['gebruiksnaam'];
?>
