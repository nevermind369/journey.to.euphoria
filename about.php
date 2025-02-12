<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ارتباط با ما</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <div class="container">
      <h1>ارتباط با ما</h1>
    </div>
  </header>

  <main class="main-content">
    <div class="form-container">
      <section class="content">
        <h2>با ما در تماس باشید</h2>
        <p>لطفاً فرم زیر را پر کنید. پیام شما در اسرع وقت بررسی خواهد شد.</p>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test1";

            // اطلاعات فرم
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // اتصال به دیتابیس
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("خطا در اتصال به دیتابیس: " . $conn->connect_error);
            }

            // افزودن اطلاعات به دیتابیس
            $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
            if ($conn->query($sql) === TRUE) {
                echo "<p class='success'>پیام شما با موفقیت ارسال شد!</p>";
            } else {
                echo "<p class='error'>خطا در ثبت پیام: " . $conn->error . "</p>";
            }

            $conn->close();
        }
        ?>

        <form action="" method="POST" class="contact-form">
          <div>
            <label for="name">نام:</label><br>
            <input type="text" id="name" name="name" required>
          </div>
          <div>
            <label for="email">ایمیل:</label><br>
            <input type="email" id="email" name="email" required>
          </div>
          <div>
            <label for="message">پیام:</label><br>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit">ارسال پیام</button>
        </form>
      </section>
    </div>
  </main>


</body>
</html>
