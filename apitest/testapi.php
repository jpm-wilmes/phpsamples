<?php
// Dit is een testprogramma om een GET request op een API te doen
// Als voorbeeld wordt gebruik gemaakt van de voertuiggegevens op overheid.io
// Via een account kan een testkey worden aangemaakt die hieronder moet worden ingevuld
//
// Jeroen Wilmes 2023
//
// Benodigd bestand paramkey.key
// Hierin staat accesskey. Deze kan worden aangevraagd 
// via de site https://overheid.io/
//
if (isset($_GET["plaat"])) {
    // Roep hier optie 1 of 2 aan. Beiden doen hetzelfde
    $data = getJsonData2($_GET["plaat"]);

    echo "************************************" . "<BR>";
    echo "* Merk: " . $data['handelsbenaming'] . "<BR>";
    echo "* APK:  " . $data['vervaldatum_apk'] . "<BR>";
    echo "************************************" . "<BR>";
}

// Functie die de daadwerkelijke request doet
// In dit geval gebeurt dit met de file_get_contents() functie
function getJsonData1($kenteken){
    $url         = 'https://api.overheid.io/voertuiggegevens/';
    // haal de toegangskey uit bestand
    $paramname   = file_get_contents("paramkey.key", false, NULL, 0, 12);
    $paramkey    = file_get_contents("paramkey.key", false, NULL, 12, 64);
 
    $result = file_get_contents($url . $kenteken . "?". $paramname . "=" . $paramkey);

    $data = json_decode($result, JSON_PRETTY_PRINT);
    return $data;
}
// Dit is dezelfde functie als getJsonData1 qua functie.
// Hier is echter CURL commandline tool gebruikt
function getJsonData2($kenteken){
    $url         = 'https://api.overheid.io/voertuiggegevens/';
    // haal de toegangskey uit bestand
    $paramname   = file_get_contents("paramkey.key", false, NULL, 0, 12);
    $paramkey    = file_get_contents("paramkey.key", false, NULL, 12, 64);

    $url = $url . $kenteken . "?". $paramname . "=" . $paramkey;
    // inialiseer curl
    $curl = curl_init($url);
    // geef string terug
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // voer curl opdracht uit
    $data = json_decode(curl_exec($curl), JSON_PRETTY_PRINT);
    curl_close($curl);
    return $data;
}
// hieronder het html formulier om kenteken op te vragen
?>
<form action="" method="get">
    <input type="text" name="plaat">
    <button type="submit">BESTAAND kenteken</button
</form>