<?php
if (isset($_GET["plaat"])) {
var_dump($_GET);
}



?>

<html>
<body>
   <div>
      <label for = "title" style = "display: block;"> Kenteken </label>
      <input id = "kenteken" type = "text" name = "kenteken">
    </div>
    <button onclick="submitPost()"> Verstuur </button>
   <script>
      function submitPost(){
         // JavaScript variable that we will pass in AJAX call
         let kenteken = document.getElementById('kenteken').value
         //AJAX Call naar dezelfde pagina
//werkt niet
         let http = new XMLHttpRequest()
         http.open('GET', 'http://localhost/apitest/test.php?plaat=3')
         // Passing variable in AJAX Call
         http.send()
      }
   </script>

</body>
</html>