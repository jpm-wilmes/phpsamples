<?php
    abstract class NewsList {

        protected string $sReturnValue;
        protected array $aData;

        public function __construct() {
            require_once("includes/database.inc.php");
            $sql = "SELECT * FROM tb_articles 
                    WHERE status = ?";
            $data = array('1');
            $this->aData = Database::getData($sql, $data);
        }

        public function getHtml() {
            return $this->sReturnValue;
        }

        protected function publishdate($p_sDate) {
            $date=date_create($p_sDate);
            return date_format($date,"d - m - Y");
        }
    }

    class newsToHtml extends NewsList {
        public function __construct() {
            parent::__construct();
            $this->sReturnValue = $this->getNews();
        }

        private function getNews() {
            $sArticle = "";
            foreach($this->aData as $key => $record) {
                $sTitle         = $record['title'];
                $sIntroduction  = $record['introduction'];
                $sText          = $record['text'];
                $sPublishdate   = $record['publishdate'];
                $sPublishdate   = $this->publishdate($sPublishdate);
                $sAuthor        = $record['author'];

                //use heredoc to create article layout
                $sArticle .= <<<ARTICLE
            
                <article>
                    <h3>$sTitle</h3>
                    <h6>Maastricht, $sPublishdate</h6>
                    <p class='introduction'>
                        $sIntroduction
                    </p>
                    $sText
                    <h6>Geschreven door: $sAuthor</h6>
                </article>

                ARTICLE;
            }
            return $sArticle;
        }
    }

    class newsToJson extends NewsList {
        public function __construct() {
            parent::__construct();
            $this->sReturnValue = $this->getNews();
        }

        private function getNews() {
            return json_encode($this->aData);
        }
    }