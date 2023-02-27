<?php
function createArticle($aNewsArticles) {
    //print_r($aNewsArticles);
    $sArticle       = "";

    foreach($aNewsArticles as $key => $rArticle) {
        $sTitle         = $rArticle['title'];
        $sIntroduction  = $rArticle['introduction'];
        $sText          = $rArticle['text'];
        $sPublishdate   = $rArticle['publishdate'];
        $sPublishdate   = publishdate($sPublishdate);
        $sAuthor        = $rArticle['author'];
        
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

    function publishdate($p_sDate) {
        $date=date_create($p_sDate);
        return date_format($date,"d - m - Y");
    }