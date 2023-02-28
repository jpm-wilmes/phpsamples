function loadDoc() {
    var xhttp = new XMLHttpRequest(); // request object instatieren
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // 4 betekent "request finished, response ready", 200=status OK
        // Vul id "demo" met de tekst uit bestand
       document.getElementById("demo").innerHTML = this.responseText;
      }
    };
    // welk type request en waarvandaan
    xhttp.open("GET", "ajax_info.txt", true);
    // verstuur de request naar de server
    xhttp.send();
  }