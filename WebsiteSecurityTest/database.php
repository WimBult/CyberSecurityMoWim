<?php include 'includes/header.php' ; ?>
<?php include 'includes/databaseSchip.php' ; ?>


<form class="schipsNamen" method="post" action="">

<input class=schippen type="submit" name="schip1" value="Apollo 13"><br>
<input class=schippen type="submit" name="schip2" value="Kameleon"><br>
<input class=schippen type="submit" name="schip3" value="Black Pearl"><br>
<input class=schippen type="submit" name="schip4" value="Titanic"><br>
<input class=schippen type="submit" name="schip5" value="Millennium Falcon"><br>

</form>






<div class="schipGegevens">
<?php
if (isset($_POST['schip1'])) {
    echo "<figure><img src='photos/apo.png'></figure>";
    $conn = connectData(); loadDataSchip($conn, 1);
    echo "</div><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2341.09691124895!2d1.7203378511399843!3d54.07202472771044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTTCsDA0JzE5LjMiTiAxwrA0MycyMS4xIkU!5e0!3m2!1sen!2snl!4v1610959206549!5m2!1sen!2snl'  frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false tabindex='0'></iframe>";
}
elseif (isset($_POST['schip2'])) {
    echo "<figure><img src='photos/kam.png'></figure>";
    $conn = connectData(); loadDataSchip($conn, 2);
    echo "</div><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1559.4222719578852!2d4.466259151691831!3d66.99257298157337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNjbCsDU5JzMzLjMiTiA0wrAyOCcwNi40IkU!5e0!3m2!1sen!2snl!4v1610962502526!5m2!1sen!2snl'  frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false tabindex='0'></iframe>";
    }
elseif (isset($_POST['schip3'])) {
    echo "<figure><img src='photos/bla.png'></figure>";
    $conn = connectData(); loadDataSchip($conn, 3);
    echo "</div><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3260.40559674245!2d-77.02406874925126!3d-35.19636479650589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDExJzQ2LjkiUyA3N8KwMDEnMTguOCJX!5e0!3m2!1sen!2snl!4v1610962871961!5m2!1sen!2snl'  frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false tabindex='0'></iframe>";
}
elseif (isset($_POST['schip4'])) {
    echo "<figure><img src='photos/tit.png'></figure>";
    $conn = connectData(); loadDataSchip($conn, 4);
    echo "</div><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.5617349007007!2d30.959811550500486!3d34.7666313870965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzTCsDQ1JzU5LjkiTiAzMMKwNTcnNDMuMiJF!5e0!3m2!1sen!2snl!4v1610962948081!5m2!1sen!2snl'  frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false tabindex='0'></iframe>";
}
elseif (isset($_POST['schip5'])) {
    echo "<figure><img src='photos/fal.png'></figure>";
    $conn = connectData(); loadDataSchip($conn, 5);
    echo "</div><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.057781462689!2d85.43034625018893!3d19.14894785458858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDA4JzU2LjIiTiA4NcKwMjUnNTcuMiJF!5e0!3m2!1sen!2snl!4v1611055246737!5m2!1sen!2snl'  frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false tabindex='0'></iframe>";
}


?>

</div>

<?php include 'includes/footer.php' ; ?>

<!-- <?php
function displaySchip($check){
    if (isset($_POST['schip'])) {
        $schipNaam = $_POST['schip'];
        if ($schipNaam == $check) {
            echo "$schipNaam. <br>";
        }
    }
}
?> -->
