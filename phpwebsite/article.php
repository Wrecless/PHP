<?php
include "includes/database.php";

$connection = getDB();

if (is_numeric($_GET['id']) && is_numeric($_GET['id'])) {
	$sql = "SELECT * FROM articles WHERE id = " . $_GET['id'];

	$results = mysqli_query($connection, $sql);

	if ($results === false) {
		echo mysqli_error($connection);
	} else {
		$articles = mysqli_fetch_assoc($results);
	}

} else {
	echo "Invalid ID";
}
?>

<?php require "includes/header.php"; ?>
<?php if (empty($articles)): ?>
	<p>No articles found.</p>
<?php else: ?>
	<ul>
		<li>
			<h3>
				<?php echo $articles['title']; ?>
			</h3>
			<p>
				<?php echo $articles['content']; ?>
			</p>
		</li>
	</ul>
<?php endif; ?>
<?php require "includes/footer.php"; ?>