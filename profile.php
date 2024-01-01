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

<h1 style='text-align: center;'>Profile</h1>

<div style='text-align: center;'>
<?php
if (!isset($_SESSION['isLoggedIn'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit;
}

include 'connection.php'; // Include your database connection file

if (isset($_SESSION['loginUsername'])) {
    $username = $_SESSION['loginUsername'];

    // Fetch the user's information from the database based on the username
    $query = "SELECT USERNAME, userType FROM user WHERE USERNAME = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $dbUsername = $row['USERNAME'];
        $userType = $row['userType']; // Fetch userType from the database

        // Display the username
        echo "<p style='font-size: 24px;'>Welcome, $dbUsername!</p>";

        // Add conditional content based on userType
        if ($userType === 'admin') {
            // Display content for admin
            echo "<p>You are logged in as an admin.</p>";
              // Display content for regular user
              echo "<a href='cart.php' style='display: inline-block; padding: 15px 25px; margin: 20px; text-decoration: none; color: black; border: 2px solid black; border-radius: 5px;'>Check Your Cart Here</a>";

            echo '<button><a href="edit_product.php" class="btn-link" style="text-decoration: none; color: inherit;padding:5px;">Edit Product</a></button>';
            // Add admin-specific functionalities or information here
        } else {
            // Display content for regular user
            echo "<a href='cart.php' style='display: inline-block; padding: 15px 25px; margin: 20px; text-decoration: none; color: black; border: 2px solid black; border-radius: 5px;'>Check Your Cart Here</a>";

            // Add a div for the shop description and thank-you note
            echo "<div style='margin: 20px; padding: 15px; border: 1px solid #ccc; background-color: #f9f9f9; text-align: justify;'>";
            echo "<p>Welcome to our Silver Shop! We offer an exquisite collection of silver jewelry meticulously designed to complement your style and personality. Our shop is dedicated to providing you with premium-quality silver jewelry for various occasions.</p>";
            echo "<p>Thank you for being a part of our community! Your support means a lot to us.</p>";
            echo "</div>";
        }
    } else {
        echo "Username not found in the database.";
    }
} else {
    echo "Username not set in the session.";
}

// Close the database connection
mysqli_close($conn);
?>


</div>


</body>
<footer>
<h4 style='text-decoration: underline;'>About us</h4>
<div class="footerLinks">
<i class='bx bxl-facebook-circle'></i>
<i class='bx bxl-twitter'></i>
<i class='bx bxl-instagram-alt'></i>
</div>
</footer>
</html>