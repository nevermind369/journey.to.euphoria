<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sheglam</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <div class="container">
      <img src="header.jpg" alt="Header" class="header-image">
      <nav class="nav">
        <a href="index.php?page=product">محصولات</a>
        <a href="index.php?page=about">ارتباط با ما</a>
        <a href="index.php?page=tel"> درباره ما</a>
      </nav>
    </div>
  </header>

  <main class="main-content">
    <aside class="sidebar">
      <a href="index.php?page=news">سوالات متداول</a>
      <img src="aks/news.png" alt="News Icon" class="icon">
    </aside>
    <section class="content">
      <?php
        if (@$_GET["page"] == "about") require("about.php");
        if (@$_GET["page"] == "tel") require("tel.php");
        if (@$_GET["page"] == "product") require("product.php");
        if (@$_GET["page"] == "user") require("user.php");
        if (@$_GET["page"] == "login") require("login.php");
        if (@$_GET["page"] == "news") require("news.php");
        if (@$_GET["page"] == "edit") require("edit.php");
        if (@$_GET["page"] == "del") require("delete.php");
      ?>
    </section>
    <aside class="sidebar">
      <a href="index.php?page=user">ثبت نام</a>
      <img src="aks/register.png" alt="Register Icon" class="icon">
      <a href="index.php?page=login">ورود</a>
      <img src="aks/login.png" alt="Login Icon" class="icon">
    </aside>
  </main>

  <footer class="footer">
  <div class="container">
    <div class="footer-links">
      <a href="#">شرایط استفاده</a>
      <a href="#">حریم خصوصی</a>
      <a href="#">تماس با ما</a>
    </div>
    <div class="footer-info">
      <p>&copy; 2024 Sheglam. تمامی حقوق محفوظ است.</p>
      <p>طراحی و توسعه توسط تیم Sheglam.</p>
    </div>
    <div class="footer-social">
      <a href="#"><img src="facebook.webp" alt="Facebook"></a>
      <a href="#"><img src="inisstap.webp" alt="Instagram"></a>
      <a href="#"><img src="twitter-icon-logo" alt="Twitter"></a>
    </div>
   
  </div>
</footer>
</body>
</html>
