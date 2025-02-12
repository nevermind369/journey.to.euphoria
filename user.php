<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ثبت نام - Sheglam</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <div class="container">
      <h1>ثبت نام</h1>
    </div>
  </header>

  <main class="main-content">
    <div class="form-container">
      <form name="form1" method="post" class="form">
        <div class="form-group">
          <label for="fname">نام</label>
          <input type="text" name="fname" id="fname" required>
        </div>
        <div class="form-group">
          <label for="lname">نام خانوادگی</label>
          <input type="text" name="lname" id="lname" required>
        </div>
        <div class="form-group">
          <label for="username">نام کاربری</label>
          <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
          <label for="password">کلمه عبور</label>
          <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
          <label for="email">ایمیل</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="role">نوع کاربری</label>
          <select name="role" id="role" required>
            <option value="customer">مشتری</option>
            <option value="admin">ادمین</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn">ثبت</button>
        </div>
      </form>
    </div>
  </main>



  <?php
  if (isset($_POST["submit"])) {
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $username = $_POST["username"];
      $password = $_POST["password"];
      $email = $_POST["email"];
      $role = $_POST["role"];

      $con = mysqli_connect("localhost", "root", "", "test1");
      if (mysqli_connect_errno($con)) {
          echo "خطا در اتصال به پایگاه داده: " . mysqli_connect_error();
      } else {
          mysqli_set_charset($con, "utf8");
          $q = "INSERT INTO user (fname, lname, username, password, email, role)
                VALUES ('$fname', '$lname', '$username', '$password', '$email', '$role')";
          $query = mysqli_query($con, $q);
          if ($query) {
              echo "<p style='text-align: center; color: green;'>ثبت‌نام با موفقیت انجام شد</p>";
          } else {
              echo "<p style='text-align: center; color: red;'>خطا در ثبت‌نام</p>";
          }
          mysqli_close($con);
      }
  }
  ?>
</body>
</html>
