<?php
require "includes/database.php";
require "includes/pre_article.php";

$connection = getDB();

if (isset($_GET['id'])) {

    $pre_article = getArticle($connection, $_GET['id']);

} else {
    echo "Invalid ID";
}

var_dump($article);