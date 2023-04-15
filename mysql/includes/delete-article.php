<?php

require 'includes/database.php';
require 'includes/article.php';
require 'includes/url.php';

$conn = getDB();

if (isset($_GET['id'])) {

    $article = getArticle($conn, $_GET['id']);

    if ($article) {

        $id = $article['id'];
        $title = $article['title'];
        $content = $article['content'];
        $published_at = $article['published_at'];

    } else {
        die("article not found");
    }

} else {
    die("id not supplied, article not found");
}

$sql = "UPDATE articles SET title = ?, content = ?, published_at = ? WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {
    echo mysqli_error($conn);
} else {

    mysqli_stmt_bind_param($stmt, "i", $id);
    if (mysqli_stmt_execute($stmt)) {
        redirect("/mysql/index.php");
    } else {
        echo mysqli_stmt_error($stmt);
    }
}