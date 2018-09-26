<?php require("views/partials/head.php"); ?>
    <h1>Blog Posts</h1>  

    <hr>

    <?php foreach($posts as $post): ?>
      <h3><?= $post->title; ?></h3>

      <div class="post-body">
        <?= $post->body; ?>
      </div>

      <span><?= $post->created_at; ?></span>
    <?php endforeach; ?>
<?php require('views/partials/footer.php'); ?>