<?php include 'includes/header.php' ; ?>

<div class="contactbox">

    <div class="contactform">
        <h1>Contact ons</h1>
        <h2>Alsublieft, vul het formulier in en we gaan razendsnel met u contact opnemen!</h2>

        <form name="formcontact" method="post" action="">
            <input type="text" name="vNaam" size="50" placeholder="Voornaam" required><br>
            <input type="text" name="aNaam" size="50" placeholder="achternaam" required><br>
            <input type="text" name="email" size="50" placeholder="Uw email-adress " required><br>
            <select name="doel" > 
            <option value="productVraag"> Vragen over product (nieuw klant)</option>
            <option value="productSupport"> Product supporten (al een klant)</option>
            <option value="feedback"> Feedback</option>
            <option value="reclama"> Reclama </option>
            <option value="business"> Business </option>
            <option value="algemeen"> Algemeen vraag </option>
            </select> <br>
            <input type="text" name="onderwerp" size="50" placeholder="subject" required><br>
            <textarea name="opmerking" placeholder="Schrijf hier uw opmerking... " required></textarea><br>
            <br> 
            <input id="ContactEvent" type="submit" name="submit">
        </form> 
    </div>

    <div id="contactpopup" class="contactpopup">

    </div>

</div>

<script type="text/javascript" src="includes/script.js"></script>

<?php include 'includes/databaseContact.php' ; ?>
<?php include 'includes/footer.php' ; ?>