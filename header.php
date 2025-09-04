?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CNNCLONE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {margin:0; font-family:Arial, sans-serif; background:#f4f4f4;}
    .navbar {background:#cc0000; padding:10px; display:flex; justify-content:space-between; align-items:center; color:#fff;}
    .navbar .logo {font-size:24px; font-weight:bold; cursor:pointer;}
    .navbar .menu span {margin:0 10px; cursor:pointer; font-weight:bold;}
    .container {width:90%; max-width:1200px; margin:20px auto;}
    .card {background:#fff; border-radius:8px; padding:15px; margin-bottom:20px; box-shadow:0 2px 6px rgba(0,0,0,0.1); cursor:pointer;}
    .card:hover {box-shadow:0 4px 10px rgba(0,0,0,0.2);}
    .title {font-size:20px; color:#222;}
    .summary {color:#555; font-size:14px;}
    .footer {background:#333; color:#fff; text-align:center; padding:15px; margin-top:30px;}
  </style>
  <script>
    function go(url){ window.location.href = url; }
  </script>
</head>
<body>
  <div class="navbar">
    <div class="logo" onclick="go('index.php')">CNNCLONE</div>
    <div class="menu">
      <span onclick="go('category.php?slug=world')">World</span>
      <span onclick="go('category.php?slug=sports')">Sports</span>
      <span onclick="go('category.php?slug=technology')">Technology</span>
      <span onclick="go('category.php?slug=entertainment')">Entertainment</span>
      <span onclick="go('category.php?slug=business')">Business</span>
      <span onclick="go('category.php?slug=health')">Health</span>
    </div>
  </div>
  <div class="container">
