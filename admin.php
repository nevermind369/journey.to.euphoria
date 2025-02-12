<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صفحه ادمین - sheglam</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <div class="container">
      <img src="header.jpg" alt="Header" class="header-image">
      <nav class="nav">
        <a href="admin.php?page=product">محصولات</a>
        <a href="admin.php?page=about">ارتباط با ما</a>
        <a href="admin.php?page=tel">تماس با ما</a>
        <a href="admin.php?page=productadmin">ادیت و حذف محصولات</a>
        <a href="admin.php?page=sabt">ثبت محصول</a>
        <a href="admin.php?page=adminpm"> پیام کاربر</a>
      </nav>
    </div>
  </header>

  <main class="main-content">
    <aside class="sidebar">
      <a href="admin.php?page=news">سوالات متداول</a>
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
        if (@$_GET["page"] == "productadmin") require("productadmin.php");
        if (@$_GET["page"] == "sabt") require("sabt.php");
        if (@$_GET["page"] == "adminpm") require("adminpm.php");
      ?>
    </section>
    <aside class="sidebar">
      <a href="admin.php?page=user">ثبت نام</a>
      <img src="aks/register.png" alt="Register Icon" class="icon">
      <a href="admin.php?page=login">ورود</a>
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
        <p>&copy; 2024  تمامی حقوق محفوظ است.</p>
        <p>طراحی و توسعه توسط تیم شگلم شاپ</p>
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
