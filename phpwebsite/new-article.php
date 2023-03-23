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
	if ($published_at != "") {
		$date_time = date_create_from_format('Y-m-d\TH:i', $published_at);

		if ($date_time === false) {
			$errors[] = "Invalid date and time";
		} else {
			$date_errors = date_get_last_errors();

			if ($date_errors['warning_count'] > 0 || $date_errors['error_count'] > 0) {
				$errors[] = "Invalid date and time";
			}
		}
	}

	if (empty($errors)) {

		$connection = getDB();

		$sql = "INSERT INTO articles (title, content, published_at)
	 VALUES (?, ?, ?)";

		$stmt = mysqli_prepare($connection, $sql);

		if ($stmt === false) {
			echo mysqli_error($connection);
		} else {

			if ($published_at == "") {
				$published_at = null;
			} else {
				$published_at = date('Y-m-d H:i:s', strtotime($published_at));
			}

			mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);

			if (mysqli_stmt_execute($stmt)) {
				$id = mysqli_insert_id($connection);

				if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
					$protocol = "https";
				} else {
					$protocol = "http";
				}

				header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/article.php?id=$id");
				exit;

			} else {
				echo mysqli_stmt_error($stmt);
			}
		}
	}
}
?>

<?php require 'includes/header.php'; ?>
<link rel="stylesheet" href="styles.css">

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


<form class="newForm" method="post">
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
</form>

<button onclick="window.location.href='index.php'">Home</button>

<?php require 'includes\footer.php'; ?>