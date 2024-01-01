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
      body {
  overflow-x: hidden;
  margin: 0;
  padding: 0;
  
}

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
    width: 200px;
    height: 200px;
    margin: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 24px;
    text-align: center;
    cursor: pointer;
}

.square:nth-child(1) {
    background-image: url('background1.jpg'); /* Replace 'rings_image.jpg' with your image path */
}

.square:nth-child(2) {
    background-image: url('background1.jpg'); /* Replace 'necklaces_image.jpg' with your image path */
}

.square:nth-child(3) {
    background-image: url('background1.jpg'); /* Replace 'earrings_image.jpg' with your image path */
}

.square:nth-child(4) {
    background-image: url('background1.jpg'); /* Replace 'bracelets_image.jpg' with your image path */
}

.square h2 {
    margin: 0; /* Remove any default margins */
    padding: 10px; /* Add padding for better visibility */
    color: #fff; /* Text color */
}
.smallContainer {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
  margin-bottom: 30px;
  max-width: 100%; /* Add some bottom margin for spacing */
}

.smallContainer .visitImage {
  max-width: 100%; /* Ensure the image does not exceed its parent's width */
  height: auto; /* Maintain aspect ratio */
}
footer{
  width:100%;
  height:250px;
  background-color:#f9b49b;
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
        .footerLinks a:hover i {
        transform: scale(1.2); 
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

<nav class="navbar navbar-expand-lg bg-body-tertiary" >
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
      
      <form class="d-flex" role="search" id="searchForm">
    <input class="form-control me-2" type="search" placeholder="Name Your CATERGORY" aria-label="Search" id="searchInput">
    <div id="hints"></div>
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#searchForm').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission behavior
        
        // Get the value entered in the search input field
        var searchQuery = $('#searchInput').val().toLowerCase();
        
        // Define predefined names and their corresponding page URLs
        var predefinedNames = {
            'rings': 'rings.php',
            'necklaces': 'necklaces.php',
            'earrings': 'earrings.php',
            'bracelets': 'bracelets.php'
        };

        // Check if the entered search query matches any predefined names
        if (predefinedNames.hasOwnProperty(searchQuery)) {
            // Redirect to the corresponding page
            window.location.href = predefinedNames[searchQuery];
        } else {
            // Provide feedback that the search query doesn't match any predefined names
            $('#hints').html('No matching result found.');
        }
    });
});
</script>



    </div>
  </div>
</nav>

<div class='title'>
    <h1>Welcome to our SilverShop</h1>
</div>

<div id="carouselExample" class="carousel slide" style='margin-top=0;'>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
   </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<h1 style=' text-align: center;'>LATEST COLLECTIONS</h1>

  <div class="row">
  <?php
include 'connection.php'; // Include your database connection file

// Assuming you have established a database connection already

// Fetch images from the 'silver' table
$query = "SELECT img FROM silver WHERE type = 'ring'";
$result = mysqli_query($conn, $query);

// Check if there are any rows in the result
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Display each image inside the div with a class of 'row'
        echo '<div class="row" style="margin: 0; padding: 0;">';
        echo '<img src="' . $row['img'] . '" alt="Image" style=" padding: 0;width: 200px; height: 200px; object-fit: cover; margin: 10px 20px; border: 2px dotted black; border-radius: 50%;">';
        echo '</div>';

        
    }
} else {
    echo "No images found!";
}

// Close the database connection
mysqli_close($conn);
?>
  </div>

  <h1 style=' text-align: center;'>SHOP BY CATERGORY</h1>

  <div class="row">
    <div class="square" onclick="location.href='rings.php';">
        <h2 style='color:black;'>Rings</h2>
    </div>
    <div class="square" onclick="location.href='necklaces.php';">
        <h2 style='color:black;'>Necklaces</h2>
    </div>
    <div class="square" onclick="location.href='earrings.php';">
        <h2 style='color:black;'>Earrings</h2>
    </div>
    <div class="square" onclick="location.href='bracelets.php';">
        <h2 style='color:black;'>Bracelets</h2>
    </div>
</div>


<div class="smallContainer">
<img src="visit.jpg" alt="" class="visitImage">
  <div>
    <h3 style=' text-align: center;'>VISIT US</h3>
    <p style=' text-align: center;'>Shop our amazing range of brands in-store and let our silver stylists help you to express your style through the jewellery you wear.</p>
    <a href="location.php" style="display: block; text-align: center; text-decoration: none;">
            <button style="margin: 0 auto; padding: 5px;">FIND A LOCATION</button>
        </a>
  </div>
</div>


<h1 style=' text-align: center;'>COMING SOON</h1>
<div class="row">
<?php
include 'connection.php'; // Include your database connection file

// Assuming you have established a database connection already

// Fetch images from the 'silver' table
$query = "SELECT img FROM silver WHERE type = 'coming'";
$result = mysqli_query($conn, $query);

// Check if there are any rows in the result
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Display each image inside the div with a class of 'row'
        echo '<div class="row" style="margin: 0; padding: 0;">';
        echo '<img src="' . $row['img'] . '" alt="Image" style=" padding: 0;width: 220px; height: 200px; object-fit: cover; margin: 10px 20px; border: 3px solid black;">';
        echo '</div>';

        
    }
} else {
    echo "No images found!";
}

// Close the database connection
mysqli_close($conn);
?>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#searchInput').on('input', function() {
        var searchQuery = $(this).val();
        if (searchQuery.length >= 2) { // Minimum characters to start showing hints
            $.ajax({
                url: 'get_hints.php', // Replace with the correct path to your PHP script
                method: 'POST',
                data: { query: searchQuery },
                success: function(response) {
                    $('#hints').html(response);
                },
                error: function() {
                    $('#hints').html('Error fetching hints.');
                }
            });
        } else {
            $('#hints').html('');
        }
    });

    // Hide hints on form submit
    $('form').submit(function(e) {
        $('#hints').html('');
        e.preventDefault();
        // Add logic to handle form submission (e.g., redirect to search results page)
    });
});
</script>










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