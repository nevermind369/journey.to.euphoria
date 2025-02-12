<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>پنل ادمین - پیام‌ها</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <div class="container">
      <h1>پیام‌های کاربران</h1>
    </div>
  </header>

  <main class="main-content">
    <div class="admin-container">
      <table class="admin-table">
        <thead>
          <tr>
            <th>شناسه</th>
            <th>نام</th>
            <th>ایمیل</th>
            <th>پیام</th>
            <th>تاریخ ارسال</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "test1";

          // اتصال به دیتابیس
          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) {
              die("خطا در اتصال به دیتابیس: " . $conn->connect_error);
          }

          // دریافت پیام‌ها
          $sql = "SELECT * FROM messages ORDER BY created_at DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['name']}</td>
                          <td>{$row['email']}</td>
                          <td>{$row['message']}</td>
                          <td>{$row['created_at']}</td>
                        </tr>";
              }
          } else {
              echo "<tr><td colspan='5'>هیچ پیامی وجود ندارد.</td></tr>";
          }

          $conn->close();
          ?>
        </tbody>
      </table>
    </div>
  </main>

 
</body>
</html>
