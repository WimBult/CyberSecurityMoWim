<?php

 function connectData() {
  $servername = "localhost";
  $username = "root";   $password = "0611845441M@ad";   $db = "Bestevaer";//xamp username
  $username = "s158244_bestevaer";  $password = "Bestevaer1";  $db = "s158244_bestevaer";//ao-alkmaar

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);

  return $conn;
 }
 function loadDataSchip($conn, $schipId) {
  $sql = "SELECT nr, naam, bouwjaar, maxlading, maxbemanning FROM ships WHERE nr = $schipId";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<div class='schip-flexbox'>";
    echo"<div class='schipWeergave'>";
    echo " SchipNummer:   <br> Naam:   <br> Bouwjaar:   <br> M. Lading:   <br> M. Bemanning:   </div>";
  }
    foreach($result as $row) {
      echo "<div class='schipWeergave'>";
      echo $row["nr"]."<br>".$row["naam"]."<br>".$row["bouwjaar"]."<br>". $row["maxlading"]."<br>". $row["maxbemanning"] ."</div> </div>";
    }

}



?>
