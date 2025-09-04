<?php require "db.php"; ?>
<?php include "header.php"; ?>
 
<?php
$slug = $_GET['slug'] ?? '';
$art = $pdo->prepare("SELECT a.*, c.name AS catname FROM articles a JOIN categories c ON a.category_id=c.id WHERE slug=? LIMIT 1");
$art->execute([$slug]);
$article = $art->fetch();
 
if(!$article){
    echo "<p>Article not found.</p>";
    include "footer.php"; exit;
}
?>
<div class="card">
  <div class="title"><?php echo $article['title']; ?></div>
  <div class="summary"><b>Category:</b> <?php echo $article['catname']; ?> | <b>Date:</b> <?php echo $article['created_at']; ?></div>
  <p><?php echo nl2br($article['content']); ?></p>
</div>
 
<?php include "footer.php"; ?>
 
