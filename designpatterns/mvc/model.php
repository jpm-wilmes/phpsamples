<?php
    require_once("includes/database.inc.php");

    function listAll() {
        $sql = "SELECT * FROM tb_articles 
                    WHERE status = ?";
        $data = array('1');
        return Database::getData($sql, $data);
    }