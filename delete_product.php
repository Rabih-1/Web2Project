<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
</head>
<body>

<form action="" method="POST">
    <label for="product_name">Enter the product name to delete from the database</label>
    <input type="text" name="product_name" id="product_name">
    <input type="submit" value="Delete">
</form>

<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['product_name']) && !empty($_POST['product_name'])) {
        $product_name = $_POST['product_name'];
        // Sanitize user input to prevent SQL injection
        $safe_product_name = mysqli_real_escape_string($conn, $product_name);

        $query = "DELETE FROM silver WHERE name = '$safe_product_name'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Product with name '$safe_product_name' deleted successfully.";
        } else {
            echo "Error deleting product: " . mysqli_error($conn);
        }

        // Redirect to edit_product.php after deletion
        header("location:edit_product.php");
        exit(); // Stop further execution of the script
    } else {
        echo "Please enter a product name to delete.";
    }
}
?>

</body>
</html>
