<?php
$db = new SQLite3('../database/springfield_news.db');


if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_REQUEST['visibilitat'])) {
    $resultats = $db->query("SELECT * FROM articles ORDER BY art_id");

    $articles = [];

    while ($row = $resultats->fetchArray(SQLITE3_ASSOC)) {
        $articles[] = $row;
    }

    echo json_encode($articles);
}

$db->close();
?>
