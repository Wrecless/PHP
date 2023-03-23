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

    <button>Save</button>
</form>