<?php

include "includes/database.php";

$errors = [];
$title = "";
$content = "";
$published_at = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$title = $_POST['title'];
	$content = $_POST['content'];
	$published_at = $_POST['published_at'];

	if ($title == "") {
		$errors[] = "Title is required";
	}
	if ($content == "") {
		$errors[] = "Content is required";
	}
	if ($published_at == "") {
		$errors[] = "Published at is required";
	}
	if (empty($errors)) {

		$connection = getDB();

		$sql = "INSERT INTO articles (title, content, published_at)
	 VALUES (?, ?, ?)";

		$stmt = mysqli_prepare($connection, $sql);

		if ($stmt === false) {
			echo mysqli_error($connection);
		} else {
			mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);

			if (mysqli_stmt_execute($stmt)) {
				$id = mysqli_insert_id($connection);
				echo "Inserted record with ID: $id";
			} else {
				echo mysqli_stmt_error($stmt);
			}
		}
	}
}
?>

<?php require 'includes/header.php'; ?>

<h2>
	New article
</h2>

<?php if (!empty($errors)): ?>
	<ul>
		<?php foreach ($errors as $error): ?>
			<li>
				<?= $error; ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>


<form method="post">
	<div>
		<label for="title">Title</label>
		<input name="title" id="title" type="text" placeholder="Title" value="<?= htmlspecialchars($title); ?>">
	</div>

	<div>
		<label for="content">Content</label>
		<textarea name="content" placeholder="content" value="<?= htmlspecialchars($content); ?>"></textarea>
	</div>

	<div>
		<label for="published_at">Published at</label>
		<input name="published_at" id="published_at" type="datetime-local" value="<?= $published_at; ?>">
	</div>

	<button>Add</button>
	<button href="index.php">Home</button>
</form>

<?php require 'includes\footer.php'; ?>