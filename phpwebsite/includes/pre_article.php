<?php
/**
 * @param $connection
 * @param $id
 * 
 * getArticle() returns an associative array of the article with the given id
 */
function getArticle($connection, $id)
{

    $sql = "SELECT * FROM articles WHERE id = ?";

    $stmt = mysqli_prepare($connection, $sql);

    if ($stmt === false) {
        echo mysqli_error($connection);
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {

            $result = mysqli_stmt_get_result($stmt);

            return mysqli_fetch_array($result, MYSQLI_ASSOC);

        }
    }

}