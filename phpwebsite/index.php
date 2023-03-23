<?php
include "includes/database.php";

$connection = getDB();

$sql = "SELECT * FROM articles ORDER BY published_at;";

$results = mysqli_query($connection, $sql);

if ($results === false) {
    echo mysqli_error($connection);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>

<?php require "includes/header.php"; ?>
<?php if (empty($articles)): ?>
    <p>No articles found.</p>
<?php else: ?>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <article>
                    <h3><a href="article.php?id=<?= $article['id']; ?>"><?= $article['title']; ?></a></h3>
                    <p>
                        <?= $article['content']; ?>
                    </p>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<button onclick="window.location.href='new-article.php'">form</button>
<?php require "includes/footer.php"; ?>