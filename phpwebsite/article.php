<?php
require "includes/database.php";
require "includes/pre_article.php";

$connection = getDB();

if (isset($_GET['id'])) {

	$pre_article = getArticle($connection, $_GET['id']);

} else {
	$article = null;
}

?>

<?php require "includes/header.php"; ?>
<?php if (empty($articles)): ?>
	<p>No articles found.</p>
<?php else: ?>
	<ul>
		<li>
			<h3>
				<?php echo htmlspecialchars($articles['title']); ?>
			</h3>
			<p>
				<?php echo htmlspecialchars($articles['content']); ?>
			</p>
		</li>
	</ul>
<?php endif; ?>

<button onclick="window.location.href='index.php'">Home</button>

<?php require "includes/article-form.php"; ?>

<?php require "includes/footer.php"; ?>