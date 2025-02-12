<?php 
$con = mysqli_connect("localhost", "root", "", "test1");
if (mysqli_connect_errno($con)) {
    echo "خطا در اتصال به پایگاه داده: " . mysqli_connect_error();
} else {
    mysqli_set_charset($con, "utf8");
    $q = "SELECT * FROM product";
    $query = mysqli_query($con, $q);
    if ($query) {
        echo "<div class='products-container'>";
        while ($row = mysqli_fetch_array($query)) {
            echo "<div class='product-card'>";
            echo "<img class='product-image' src='upload/" . $row['p_image'] . "' alt='" . $row['p_name'] . "'>";
            echo "<div class='product-info'>";
            echo "<h3 class='product-name'>" . $row['p_name'] . "</h3>";
            echo "<p class='product-brand'>برند: " . $row['p_brand'] . "</p>";
            echo "<p class='product-price'>قیمت: " . $row['p_price'] . " تومان</p>";
            echo "<p class='product-description'>" . $row['p_description'] . "</p>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    }
    mysqli_close($con);
}
?>
