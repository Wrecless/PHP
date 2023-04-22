<?php

class Article
{
    public static function getAll($conn)
    {
        $sql = "SELECT * FROM article ORDER BY published_at DESC";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getByID($conn, $id, $columns = '*')
    {
        $sql = "SELECT $columns
            FROM article
            WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return null;
        }
    }
}