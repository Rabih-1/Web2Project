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

<div class="locContainer">
    <p style="text-align: center; line-height: 1.5;">
        Location Name:Coming soon in Tripoli<br>
        Location Address: Dam&Farz<br>
        Now it's an Online Store
    </p>
</div>



<style>
 .locContainer {
    display: flex;
    justify-content: center;
    align-items: center;
    width: auto;
    height: calc(100vh - 350px); /* Adjust height as needed */
    /* Other styles for locContainer */
}

.locationText {
    text-align: center;
    line-height: 1.5;
    margin-top: 10px; /* Adjust the margin top as needed */
    /* Other styles for locationText */
}

</style>


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