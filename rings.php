<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
    /* Custom styles for carousel control buttons */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black; /* Change the background color */
    }

    /* Styling the color of the icons inside the buttons */
    .carousel-control-prev-icon::before,
    .carousel-control-next-icon::before {
        color: black; /* Change the color of the icon */
    }
    h1{
      margin: 30px;
    }

    .latestimg{
      width:200px;
      height: 200px;
      background:red;
      margin:3px;
    }
    .latestimg .img img {
      width:auto;
      height:auto;
      
    }
    
    .row{
      width:auto;
      display: flex;
    justify-content: center;
    align-items: center;
    }

    img {
    background-image: url('Tiffany&Co/Rings/pic2.jpg'); /* Set the background image */
    background-size: cover; /* Adjust to cover the entire element */
    /* Other background properties can be added as needed */
}
.square {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 200px; /* Adjust the square width */
    height: 200px; /* Adjust the square height */
    background-color: #ccc; /* Change the background color as desired */
    margin: 10px; /* Adjust margin for spacing between squares */
    cursor: pointer; /* Show pointer cursor on hover */
    /* Add additional styling as needed */
}

.square h2 {
    margin: 0; /* Remove any default margins */
    padding: 10px; /* Add padding for better visibility */
    color: #fff; /* Text color */
}
.smallContainer{
  display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
footer{
  width:100%;
  height:250px;
  background-color:orange;
  display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: column;
}
.footerLinks{
  display: flex;
  gap:60px;
}
.footerLinks i {
    font-size: 30px; /* Adjust the size to your preference */
    /* Other styles can be added as needed */
  }

  .img {
            width: 300px; /* Set the width of the div */
            height: 300px; /* Set the height of the div */
            overflow: hidden; /* Hide overflowing image */
        }

        .img img {
            width: 100%; /* Make the image fill the width of the div */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Ensure the image doesn't have any extra space */
        }
</style>
  </head>
<body>
<?php
session_start();
if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == 1) {
  $user = isset($_SESSION['loginUsername']) ? $_SESSION['loginUsername'] : 'User';
  header("locatio:logout.php");
} 

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://cdn.pixabay.com/photo/2017/08/02/01/34/pocket-watch-2569573_1280.jpg" alt="LOGO" class='logo'></a>
    <h3><span > L </span><span style='color:orange;'> A </span><span> M </span><span style='color:orange;'> A </span><span> R </span></h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class='title'>
    <h1>Rings</h1>
  </div>

  <form id="cartForm" action="cart.php" method="post">
    <div class="row" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
      <?php
      include 'connection.php'; // Include your database connection file

      // Assuming you have established a database connection already

      // Check if the session variable exists (adjust this condition based on your specific session variable)
      $sessionExists = isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == 1;

      // Fetch images, names, and prices from the 'silver' table for rings
      $query = "SELECT img, name, price FROM silver WHERE type = 'ring'";
      $result = mysqli_query($conn, $query);

      // Check if there are any rows in the result and if the session exists
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // Display each image, name, and price inside the div with a class of 'product'
          echo '<div class="product" style="text-align: center; margin: 15px; width: 230px; height: 350px; border: 2px solid black; padding: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center;">';
          echo '<img src="' . $row['img'] . '" alt="Image" style="padding: 0; width: 200px; height: 200px; object-fit: cover; border: 2px dotted black; border-radius: 50%;">';

          // Check if the 'name' index exists in the fetched row before displaying it
          if (!empty($row['name'])) {
            echo '<h3 style="margin-top: 5px;">' . $row['name'] . '</h3>'; // Display the name below the image
          } else {
            echo '<h3>Product Name Not Available</h3>'; // Display if name is empty or not present
          }

          // Check if the 'price' index exists in the fetched row before displaying it
          if (isset($row['price'])) {
            echo '<p>Price: $' . $row['price'] . '</p>'; // Display the price below the image
          } else {
            echo '<p>Price: Not Available</p>'; // Display if price is not present
          }

          // Adding a checkbox at the bottom of each product element only if the session exists
          if ($sessionExists) {
            echo '<input type="checkbox" name="product_checkbox[]" value="' . $row['name'] . '" style="transform: scale(1.5);">';
          }

          echo '</div>';
        }
      } else {
        echo "No images found!";
      }

      // Close the database connection
      mysqli_close($conn);
      ?>
    </div>

    <?php
    // Check if the session variable exists
    $sessionExists = isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == 1;

    // Display the button only if the session does not exist
    if ($sessionExists) {
    ?>
      <button type="submit" class="btn btn-primary mt-3">Show Cart</button>
    <?php
    }
    ?>
  </form>

  <script>
    // JavaScript function to collect selected checkboxes before form submission
    document.getElementById('cartForm').addEventListener('submit', function() {
      const selectedCheckboxes = document.querySelectorAll('input[name="product_checkbox[]"]:checked');
      const selectedValues = Array.from(selectedCheckboxes).map(checkbox => checkbox.value);

      const hiddenInput = document.createElement('input');
      hiddenInput.type = 'hidden';
      hiddenInput.name = 'selectedProducts';
      hiddenInput.value = JSON.stringify(selectedValues);
      this.appendChild(hiddenInput);
    });
  </script>

  <!-- Add your additional scripts or JavaScript links here -->

</body>
<footer>
<h4 style='text-decoration: underline; '>About us</h4>
    
<div class="footerLinks">
<a href="https://www.facebook.com">
            <i class='bx bxl-facebook-circle' style='color: blue; transition: transform 0.3s;'></i>
        </a>
        <a href="https://www.instagram.com">
            <i class='bx bxl-instagram-alt' style='color: purple; transition: transform 0.3s;'></i>
        </a>
        <a href="https://www.twitter.com">
            <i class='bx bxl-twitter' style='color: black; transition: transform 0.3s;'></i>
        </a>     
  
</div>
</footer>
</html>