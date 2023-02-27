<?php
    require_once("mvc/model.php");
    require_once("mvc/view.php");

function getArticles() {
    $results = listAll();
    //print_r($results);
    $html = createArticle($results);
    return $html;
}