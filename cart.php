<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
  <style>
    img{
        width:200px;
        height:200px;
    }
  </style>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['loginUsername'])) {
  $username = $_SESSION['loginUsername'];

  include 'connection.php'; // Include your database connection file

  // Fetch the userid based on loginUsername from your users table
  $query = "SELECT userid FROM user WHERE username = '$username'";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $userID = $row['userid'];

    if (isset($_POST['selectedProducts'])) {
      $selectedProducts = json_decode($_POST['selectedProducts'], true);

      if (!empty($selectedProducts)) {
        // Fetch product details (names and image URLs) from the database based on the selected product names
        $selectedProductsList = implode("','", $selectedProducts);

        // Check for existing products in the cart for the specific user
        $existingProductsQuery = "SELECT sid FROM cart WHERE userid = '$userID' AND sid IN ('$selectedProductsList')";
        $existingProductsResult = mysqli_query($conn, $existingProductsQuery);
        $existingProducts = [];

        if ($existingProductsResult && mysqli_num_rows($existingProductsResult) > 0) {
          while ($row = mysqli_fetch_assoc($existingProductsResult)) {
            $existingProducts[] = $row['sid'];
          }
        }

        $query = "SELECT sid FROM silver WHERE name IN ('$selectedProductsList')";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
          $insertQuery = "INSERT INTO cart (userid, sid) VALUES ";
          $values = [];

          while ($row = mysqli_fetch_assoc($result)) {
            $sid = $row['sid'];
            if (!in_array($sid, $existingProducts)) {
              $values[] = "('$userID', '$sid')";
            }
          }

          // Insert the fetched products into the cart table
          if (!empty($values)) {
            $insertQuery .= implode(", ", $values);
            if (mysqli_query($conn, $insertQuery)) {
              // Product added.
            } else {
              echo "Error inserting products into cart: " . mysqli_error($conn);
            }
          }
        }
      } else {
        echo 'No products selected.';
      }
    } else {
      echo 'No data received.';
    }
  } else {
    echo 'User not found.';
  }

  mysqli_close($conn);
} else {
  echo 'User not logged in.';
}
?>


 <div class="product">
 <?php

if (isset($_SESSION['loginUsername'])) {
    $username = $_SESSION['loginUsername'];
    
    include 'connection.php'; // Include your database connection file
    
    // Fetch the userid based on loginUsername from your users table
    $query = "SELECT userid FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $userID = $row['userid'];
        
        // Fetch products from the cart for the specific user
        $cartQuery = "SELECT s.name, s.img FROM cart c
                      JOIN silver s ON c.sid = s.sid
                      WHERE c.userid = '$userID'";
        $cartResult = mysqli_query($conn, $cartQuery);
        
        if ($cartResult && mysqli_num_rows($cartResult) > 0) {
            // Display the products from the cart
            while ($row = mysqli_fetch_assoc($cartResult)) {
                echo '<div class="product">';
                echo '<img src="' . $row['img'] . '" alt="' . $row['name'] . '">';
                echo '<p>' . $row['name'] . '</p>';
                echo '</div>';
            }
        } else {
            echo 'No products found in the cart.';
        }
    } else {
        echo 'User not found.';
    }
    
    mysqli_close($conn);
} else {
    echo 'User not logged in.';
}
?>

 </div>
</body>
</html>
