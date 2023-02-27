<?php
    error_reporting(E_ALL);
    ini_set("display_errors", "on");

    require_once("includes/database.inc.php");
    require_once("oop/clsNewsArticles.php");
    $objNewsArticles = new NewsArticles();
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

        <?php
            echo $objNewsArticles->getArticleToHTML();
        ?>

    </body>
</html>
    