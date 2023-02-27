<?php

include("includes/functions.php");

// instatiate 
$dombo = new Olifant;
$jumbo = new Olifant;
$dombo->aantalslurfen = 2;
$dombo->set_aantalPoten(2);
echo $dombo->aantalslurfen;
echo $dombo->get_aantalPoten();
echo $jumbo->aantalslurfen;
echo $jumbo->maalTwee();
