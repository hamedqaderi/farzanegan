<?php require("views/partials/head.php"); ?>

<form action="/store" method="POST">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title">
  </div>

  <div class="form-group">
    <label for="body">Post Content</label>
    <textarea name="body" id="body"></textarea>
  </div>

  <div class="form-group">
    <button type="submit">Save Post</button>
  </div>
</form>

<?php foreach($errors as $error): ?>
  <li><?= $error; ?></li>
<?php endforeach; ?>

<?php require('views/partials/footer.php'); ?>