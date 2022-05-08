<?php
$error = "";

function connectData() {
 $servername = "localhost";
 $username = "root";   $password = "0611845441M@ad";   $db = "bestevaer";//xamp username
 $username = "s158244_bestevaer";  $password = "Bestevaer1";  $db = "s158244_bestevaer";//ao-alkmaar
 // Create connection
 $conn = new mysqli($servername, $username, $password, $db);

 // Check connection
 if ($conn->connect_error) {
   die( "Connection failed:" . $conn->connect_error);
 }
 echo "Connected successfully<br>";
 return $conn;
}

if (isset($_POST['submit'])) {
  if (empty($_POST['gebruiksnaam']) || empty($_POST['wachtwoord']) ) {
    $error = "gebruiksnaam of wachtwoord is invalid";
  }
  else {
    $gebruiksnaam = $_POST['gebruiksnaam'];
    $wachtwoord = $_POST['wachtwoord'];

  $conn = connectData();

  $query = "SELECT username, wachtwoord FROM login WHERE username=? AND wachtwoord=? LIMIT 1";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ss", $gebruiksnaam, $wachtwoord);
  $stmt->execute();
  $stmt->bind_result($gebruiksnaam, $wachtwoord);
  $stmt->store_result();

  if ($stmt->num_rows == 1) {

    $_SESSION['login_gebruiker'] = $gebruiksnaam;
    header("location: calculator.php");
  }
  else {
    $error = "gebruiksnaam of wachtwoord is invalid";
  }
  mysqli_close($conn);
}
}
 ?>
