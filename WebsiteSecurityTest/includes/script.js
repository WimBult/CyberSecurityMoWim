
var contact = document.getElementById("ContactEvent");
contact.addEventListener("click", myFunction);




 function myFunction() {

     var empt = document.forms["formcontact"]["email"].value;
        if (empt == "")
        {
            alert("Vul alle velden in!");
            return false;
            }
        else  {


     var x = document.getElementById("contactpopup");
     x.innerHTML = "Dank u voor de feedback <br> Wij zullen zo spoeding mogelijk contact met u opnemen!";
     x.style.opacity ='0.6';
     console.log();
 }

}

function lading_berekenen() {
    var start_gewicht = Number(document.getElementById("Sgewicht").value);
    var extra_gewicht =  Number(document.getElementById("Ngewicht").value);

    var gewicht_result = start_gewicht + extra_gewicht;

    return gewicht_result;
}


function man_berekenen(){
  var start_man = Number(document.getElementById("Sbemanning").value);
  var extra_man =  Number(document.getElementById("Nbemanning").value);

  var man_result = start_man + extra_man;

  return man_result;
}

function Bereken(){
  console.log('test');
    var apollo = document.getElementById("schip1")
    var kameleon = document.getElementById("schip2")
    var black = document.getElementById("schip3")
    var titanic = document.getElementById("schip4")
    var falcon = document.getElementById("schip5")
    var man_result = man_berekenen();
    var gewicht_result = lading_berekenen();
    var calculator_popup = document.getElementById("calculatorpopup");

    var img_goed= document.createElement('img');
    img_goed.src = 'photos/g.jpg';

    var img_fout = document.createElement('img');
    img_fout.src = 'photos/x.jpg';

    var src = document.getElementById("calculatorfoto")


    if (apollo.checked == true) {
        if (man_result <= 5 && gewicht_result <= 1000) {
                document.getElementById("result").innerHTML = " Het is veilig, u mag varen!";
                src.appendChild(img_goed);
        }
        else {
                document.getElementById("result").innerHTML = "Het max lading of bemanning is overschreden..<br> u mag niet rijden x";
                src.appendChild(img_fout);
        }
    }

    if (kameleon.checked == true) {
        if (man_result <= 10  && gewicht_result <= 1000000) {
            document.getElementById("result").innerHTML = " Het is veilig, u mag varen!";
            src.appendChild(img1);
        }
        else {
            document.getElementById("result").innerHTML = "Het max lading of bemanning is overschreden..<br> u mag niet rijden x";
            src.appendChild(img2);
        }
    }

    if (black.checked == true) {
        if (man_result <= 50  && gewicht_result <= 3500) {
            document.getElementById("result").innerHTML = " Het is veilig, u mag varen!";
            src.appendChild(img1);
        }
        else {
                document.getElementById("result").innerHTML = "Het max lading of bemanning is overschreden..<br> u mag niet rijden x";
                src.appendChild(img2);
        }
    }

    if (titanic.checked == true) {
        if (man_result <= 900  && gewicht_result <= 39000) {
            document.getElementById("result").innerHTML = " Het is veilig, u mag varen!";
            src.appendChild(img1);
        }
        else {
                document.getElementById("result").innerHTML = "Het max lading of bemanning is overschreden..<br> u mag niet rijden x";
                src.appendChild(img2);
        }
    }

    if (falcon.checked == true) {
        if (man_result <= 50  && gewicht_result <= 5000) {
            document.getElementById("result").innerHTML = " Het is veilig, u mag varen!"
            src.appendChild(img1);
        }
        else {
                document.getElementById("result").innerHTML = "Het max lading of bemanning is overschreden..<br> u mag niet rijden x";
                src.appendChild(img2);
        }
    }
    calculator_popup.style.opacity ='0.6';
    src.style.opacity = '0.6';
}
