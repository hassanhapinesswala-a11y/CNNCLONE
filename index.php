<?php require "db.php"; ?>
<?php include "header.php"; ?>
 
<?php
// Featured article
$featured = $pdo->query("SELECT * FROM articles WHERE is_published=1 ORDER BY created_at DESC LIMIT 1")->fetch();
 
// Latest 6 articles
$latest = $pdo->query("SELECT * FROM articles WHERE is_published=1 ORDER BY created_at DESC LIMIT 6")->fetchAll();
?>
 
<?php if($featured): ?>
  <div class="card" onclick="go('article.php?slug=<?php echo $featured['slug']; ?>')">
    <div class="title"><?php echo $featured['title']; ?></div>
    <div class="summary"><?php echo $featured['summary']; ?></div>
  </div>
<?php endif; ?>
 
<h2>Latest News</h2>
<?php foreach($latest as $row): ?>
  <div class="card" onclick="go('article.php?slug=<?php echo $row['slug']; ?>')">
    <div class="title"><?php echo $row['title']; ?></div>
    <div class="summary"><?php echo $row['summary']; ?></div>
  </div>
<?php endforeach; ?>
 
<?php include "footer.php"; ?>
