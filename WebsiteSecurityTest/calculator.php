<?php
session_start();
include 'includes/header.php' ;
include 'includes/login.php' ;


if ( !isset($_SESSION['login_gebruiker'])) {?>

<div class="login">
    <h2>log in</h2>
    <form method="post">
        <label>Gebruiksnaam : </label>
        <input type="text" name="gebruiksnaam" id="naam"> <br><br>
        <label>Wachtwoord :    </label>
        <input type="password" name="wachtwoord" id="wachtwoord" placeholder="**********"> <br><br>
        <input type="submit" name="submit" value="login"> <br><br>
        <span><?php echo $error; ?></span>
    </form>
</div>


<?php }
else { ?>
<b id="loguit"> <a href="loguit.php"> Uitloggen </a> </b>

<script type="text/javascript" src="includes/script.js"></script>

<div class="calculatorbox">


    <div class="calculatoritem">

        <h4>Vaar Calculator</h4>
        <label>Welke schip wilt u controleren?</label><br><br>
        <input id="schip1" type="radio" name="schip">
        <label>Apollo 13</label>
        <input id="schip2" type="radio" name="schip">
        <label>Kameleon</label><br><br>
        <input id="schip3" type="radio" name="schip">
        <label>Black pearl</label>
        <input id="schip4" type="radio" name="schip">
        <label>Titinic</label><br><br>
        <input id="schip5" type="radio" name="schip">
        <label>Millennium falcon</label><br><br>

        <table>
          <tr>
            <td> <label>Start gewicht</label> </td>
            <td> <input id="Sgewicht" type="text" placeholder="lading in KG" /> </td>
          </tr>

          <tr>
            <td> <label>Start bemanning</label> </td>
            <td> <input id="Sbemanning" type="text" placeholder="bemanning per persoon" /> </td>
          </tr>

          <tr>
            <td> <label>Toegevoegde gewicht</label> </td>
            <td> <input id="Ngewicht" type="text" placeholder="lading in KG" /> </td>
          </tr>

          <tr>
            <td> <label>Bemanning erbij</label> </td>
            <td> <input id="Nbemanning" type="text" placeholder="bemanning per persoon" /> </td>
          </tr>
        </table>
        <br><br>
        <input class="submit" id="submit" type="button" value="Berekenen" onclick="Bereken()" />


        <div class=uitslagbox> </div>
    </div>

    <div class="calculatorbox2">
        <div class="calculatorpopup" id="calculatorpopup">
            <p id="result">Hier komt de uitslag!</p>
        </div>

        <div class="calculatorfoto" id="calculatorfoto">

        </div>
    </div>

</div>
<?php } ?>

<?php include 'includes/footer.php' ; ?>
