<?php
    error_reporting(E_ALL);
    ini_set("display_errors", "on");

    //Connect to DB and select all articles from DB
    require_once("includes/dbconnection.inc.php");
    $sql    = "SELECT * FROM tb_articles WHERE status = ?";
    $data   = array('1'); //replaces the questionmarks
    $stmt   = $pdo->prepare($sql);	// prepare the query
	$stmt->execute($data);	// execute the query
	$result = $stmt->fetchAll(); // get result
    //print_r($result);

    // switch date to dutch standard
    function publishdate($p_sDate) {
        $date=date_create($p_sDate);
        return date_format($date,"d - m - Y");
    }
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vista nieuws</title>
        <link rel="stylesheet" href="furniture/styles.css">
    </head>
    <body>
        <header>
            <h1>Vista Nieuws</h1>
        </header>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="html.php">HTML</a></li>
                <li><a href="php.php">PHP</a></li>
                <li><a href="oop.php">OOP</a></li>
                <li><a href="oop2.php">OOP2</a></li>
                <li><a href="oop3.php">OOP3</a></li>
                <li><a href="mvc.php">MVC</a></li>
            </ul>
        </nav>

        <section>
                <?php
                    foreach($result as $key => $row) {
                        $title          = $row['title'];
                        $introduction   = $row['introduction'];
                        $text           = $row['text'];
                        $publishdate    = $row['publishdate'];
                        $publishdate    = publishdate($publishdate);
                        $author         = $row['author'];
                        echo "<article>";
                            echo "<h3>$title</h3>";
                            echo "<h6>Maastricht, $publishdate</h6>";
                            echo "<p class='introduction'>";
                                echo $introduction; 
                            echo "</p>";
                            echo $text;
                            echo "<h6>Geschreven door: $author</h6>";
                        echo "</article>";
                    }
                ?> 
        </section>
    </body>
</html>