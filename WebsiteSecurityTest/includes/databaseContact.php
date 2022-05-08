<?php

 function connectData() {
  $servername = "localhost";
  $username = "root";   $password = "0611845441M@ad";   $db = "Bestevaer";//xamp username
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
 function insertDataContact($conn) {
    $sql =  "INSERT INTO contact (voornaam, achternaam, email, soortvraag, onderwerp, opmerking)
    VALUES ('".$_POST['vNaam']."', '".$_POST['aNaam']."','".$_POST['email']."', '".$_POST['doel']."', '".$_POST['onderwerp']."', '".$_POST['opmerking']."')";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
 if (isset($_POST['submit'])) {
   $connection = connectData();
   insertDataContact($connection);
 }



?>
