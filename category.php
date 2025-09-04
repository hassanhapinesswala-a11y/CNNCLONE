<?php require "db.php"; ?>
<?php include "header.php"; ?>
 
<?php
$slug = $_GET['slug'] ?? '';
$cat = $pdo->prepare("SELECT * FROM categories WHERE slug=? LIMIT 1");
$cat->execute([$slug]);
$category = $cat->fetch();
 
if(!$category){
    echo "<p>Category not found.</p>";
    include "footer.php"; exit;
}
 
$articles = $pdo->prepare("SELECT * FROM articles WHERE category_id=? AND is_published=1 ORDER BY created_at DESC");
$articles->execute([$category['id']]);
?>
<h2><?php echo $category['name']; ?> News</h2>
<?php foreach($articles as $row): ?>
  <div class="card" onclick="go('article.php?slug=<?php echo $row['slug']; ?>')">
    <div class="title"><?php echo $row['title']; ?></div>
    <div class="summary"><?php echo $row['summary']; ?></div>
  </div>
<?php endforeach; ?>
 
<?php include "footer.php"; ?>
