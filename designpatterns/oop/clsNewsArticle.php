<?php
class NewsArticle {

    public function articleToHtml($rArticle) { 

        $sTitle         = $rArticle['title'];
        $sIntroduction  = $rArticle['introduction'];
        $sText          = $rArticle['text'];
        $sPublishdate   = $rArticle['publishdate'];
        $sPublishdate   = $this->publishdate($sPublishdate);
        $sAuthor        = $rArticle['author'];

        //use heredoc to create article layout
        $sArticle = <<<ARTICLE
       
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
        return $sArticle;
    }

    private function publishdate($p_sDate) {
        $date=date_create($p_sDate);
        return date_format($date,"d - m - Y");
    }

}