






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
</head>
<body>

<form action="" method="POST">
    <label for="product_name">Product Name</label>
    <input type="text" name="product_name" id="product_name" required><br><br>

    <label for="product_price">Product Price</label>
    <input type="text" name="product_price" id="product_price" required><br><br>

    <label for="product_type">Product Type</label>
    <input type="text" name="product_type" id="product_type" required><br><br>

    <label for="product_img">Product Image URL</label>
    <input type="text" name="product_img" id="product_img" required><br><br>

    <input type="submit" value="Insert Product">
</form>

<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_type = $_POST['product_type'];
    $product_img = $_POST['product_img'];

    // Sanitize user input to prevent SQL injection
    $safe_product_name = mysqli_real_escape_string($conn, $product_name);
    $safe_product_price = mysqli_real_escape_string($conn, $product_price);
    $safe_product_type = mysqli_real_escape_string($conn, $product_type);
    $safe_product_img = mysqli_real_escape_string($conn, $product_img);

    $query = "INSERT INTO silver (sid, name, price, type, img) VALUES (NULL, '$safe_product_name', '$safe_product_price', '$safe_product_type', '$safe_product_img')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Product inserted successfully.";
    } else {
        echo "Error inserting product: " . mysqli_error($conn);
    }
}
?>

</body>
</html>
