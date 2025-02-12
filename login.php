<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت ساکورا شاپ</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <div class="form">
            <h2>ورود به سایت</h2>
            <form id="form1" name="form1" method="post">
                <div class="form-group">
                    <label for="username">نام کاربری:</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">کلمه عبور:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" value="ورود" class="btn">
                </div>
            </form>
            <div class="message">
                <?php
                    if (isset($_POST["submit"])) {
                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        $con = mysqli_connect("localhost", "root", "", "test1");
                        if (mysqli_connect_errno($con)) {
                            echo "اتصال برقرار نشد";
                        } else {
                            mysqli_set_charset($con, "utf8");

                            $query = "SELECT username, password, role FROM user WHERE username='$username'";
                            $result = mysqli_query($con, $query);

                            if ($result) {
                                $row = mysqli_fetch_array($result);
                                if ($row && $row["password"] == $password) {
                                    $role = $row["role"];
                                    if ($role == "customer") {
                                        header("Location: index.php");  
                                        exit();
                                    } else if ($role == "admin") {
                                        header("Location: admin.php");  
                                        exit();
                                    } else {
                                        echo "نقش کاربری نامشخص";
                                    }
                                } else {
                                    echo "کاربری با این مشخصات یافت نشد";
                                }
                            } else {
                                echo "خطا در ورود به سیستم";
                            }

                            mysqli_close($con);
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
