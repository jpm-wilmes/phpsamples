<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Programma dat een database uitleest. Database credentials staan in de database.inc.php

include 'includes/database.inc.php';

// Meest eenvoudig voorbeeld
$sql = "SELECT * FROM testphp WHERE id='1'";
$result = Database::getData($sql); // <----LET OP: een parameter

var_dump($result); echo "<BR>";

// Netter en veiliger voorbeeld door splitsen query en data
$sql = "SELECT * FROM testphp WHERE id=:idwaarde"; // de query
$waardes = array('idwaarde'=>"1"); // de data
$result = Database::getData($sql, $waardes ); // <----- LET OP: twee parameters

var_dump($result); echo "<BR>";