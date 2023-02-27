<?php
class NewsArticles {
    private object $objArticle;

    // constructor runs when creating an object
    public function __construct() {
        require_once("oop/clsNewsArticle.php");
        $this->objArticle = new NewsArticle();
    }

    // returns article
    public function getArticleToHTML($listType="all") {
        $aList = $this->listAll();
        $sHtml = "";

        foreach($aList as $key => $record) {
            $sHtml .= $this->objArticle->articleToHtml($record);
        }
        return $sHtml; //return jsonstring
    }

    private function listAll() {
        $sql = "SELECT * FROM tb_articles 
                    WHERE status = ?";
        $data = array('1');
        return Database::getData($sql, $data);
    }

    //not used yet
    public function listTop5() {
        $sql = "SELECT * FROM tb_articles 
                    WHERE status = ? 
                    ORDER BY publishdate DESC 
                    LIMIT ?";
        $data = array(1,5);
        return Database::getData($sql, $data);
    }

    //not used yet
    public function archive() {
        $sql = "SELECT * FROM tb_articles 
                    WHERE status = ?";
        $data = array(9);
        return Database::getData($sql, $data);
    }
}