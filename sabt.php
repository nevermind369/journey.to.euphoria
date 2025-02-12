<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="utf-8">
  <title>  ثبت محصول | sheglam</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <form method="post" enctype="multipart/form-data" id="productForm">
      <table width="327" height="244" border="1" align="center">
        <tbody>
          <tr>
            <td align="center" bgcolor="#D3C4B8">کد محصول</td>
            <td align="center" bgcolor="#D3C4B8">
              <input type="text" name="id" id="id" required>
            </td>
          </tr>
          <tr>
            <td align="center" bgcolor="#D3C4B8">نام محصول</td>
            <td align="center" bgcolor="#D3C4B8">
              <input type="text" name="name" id="name" required>
            </td>
          </tr>
          <tr>
            <td align="center" bgcolor="#D3C4B8">برند</td>
            <td align="center" bgcolor="#D3C4B8">
              <input type="text" name="brand" id="brand" required>
            </td>
          </tr>
          <tr>
            <td align="center" bgcolor="#D3C4B8">قیمت</td>
            <td align="center" bgcolor="#D3C4B8">
              <input type="number" name="price" id="price" required>
            </td>
          </tr>
          <tr>
            <td align="center" bgcolor="#D3C4B8">تصویر</td>
            <td align="center" bgcolor="#D3C4B8">
              <input type="file" name="picture" id="picture" required>
            </td>
          </tr>
          <tr>
            <td align="center" bgcolor="#D3C4B8">شرح</td>
            <td align="center" bgcolor="#D3C4B8">
              <textarea name="description" id="description" required></textarea>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center" bgcolor="#D3C4B8">
              <input type="submit" name="submit" value="ثبت">
              <input type="reset" value="انصراف">
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>

  <?php
  if (isset($_POST["submit"])) {
    // دریافت اطلاعات ورودی
    $id = $_POST["id"];
    $name = $_POST["name"];
    $brand = $_POST["brand"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    
    // مدیریت فایل آپلود
    $file = $_FILES["picture"];
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
    $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if (in_array($file_ext, $allowed_ext)) {
        // تعیین مسیر ذخیره فایل
        $upload_dir = "upload/";
        $file_name = uniqid() . "." . $file_ext;
        $upload_path = $upload_dir . $file_name;

        // انتقال فایل به دایرکتوری مقصد
        if (move_uploaded_file($file['tmp_name'], $upload_path)) {
            // اتصال به پایگاه داده
            $con = new mysqli("localhost", "root", "", "test1");
            if ($con->connect_error) {
                die("اتصال به دیتابیس انجام نشد: " . $con->connect_error);
            }
            $con->set_charset("utf8");

            // استفاده از Prepared Statements برای جلوگیری از SQL Injection
            $stmt = $con->prepare("INSERT INTO product (ID, p_name, p_brand, p_price, p_image, p_description) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $id, $name, $brand, $price, $file_name, $description);

            // اجرای کوئری
            if ($stmt->execute()) {
                echo "محصول با موفقیت ثبت شد.";
            } else {
                echo "خطا در ثبت محصول: " . $stmt->error;
            }

            // بستن اتصال
            $stmt->close();
            $con->close();
        } else {
            echo "مشکلی در آپلود فایل به وجود آمد.";
        }
    } else {
        echo "فرمت فایل نامعتبر است. لطفا فقط تصاویر با فرمت jpg, jpeg, png یا gif آپلود کنید.";
    }
  }
  ?>
</body>
</html>
