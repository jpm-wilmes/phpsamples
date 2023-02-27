<?php
    require_once("oop2/pagebuilder.php");
    $objPage = new PageBuilder();
    echo $objPage->createPage("news", "newsToHtml");