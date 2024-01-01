<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    
.loginBody{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url(4.jpg) no-repeat;
    background-size: cover;
    background-position: center;
}
.container{
    width: 420px;
    background:transparent ;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow:  0 0 10px rgba(0, 0, 0, .2);
    color: #fff; 
      border-radius: 10px;
      padding: 30px 40px;
}

.container h1 {
    font-size: 36px;
    text-align: center;

}

.container .inputs{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.inputs input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;

}
.inputs input::placeholder{
    color: #fff;
}

.inputs i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.container .button{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow:  0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

.container .register{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
    
}

.register p a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.register p a:hover{
    text-decoration: underline;
}

.back-button {
        position: absolute;
        top: 20px; /* Adjust the distance from the top */
        left: 20px; /* Adjust the distance from the left */
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        display: flex;
        align-items: center;
        color:black;
        border:2px solid black;
        background:#fff;
        padding:5px;
    }

    .back-button i {
        margin-right: 5px;
        color:black;
    }
   </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class='loginBody'>
    <a href="index.php" class="back-button">
        <i class='bx bx-arrow-back'></i> Back
    </a>
    <div class="container">
        <form action="" method='POST'>
            <h1>Login</h1>
            <div class="inputs">
                <input type="text" placeholder='Username' required name='loginUsername'>
                <i class='bx bxs-user'></i>
            </div>
            <div class="inputs">
                <input type="password" placeholder='Password' required name='loginPassword'>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class='button'>Login</button>
            <div class="register">
                <p>Don't have an account? <a href="signup.php">Register</a></p>
            </div>
        </form>
    </div>
  
    <?php
    include('connection.php');

    if (
        isset($_POST['loginUsername']) && !empty($_POST['loginUsername'])
        && isset($_POST['loginPassword']) && !empty($_POST['loginPassword'])
    ) {
        $username = $_POST['loginUsername'];
        $password = $_POST['loginPassword'];

        // Use prepared statements
        $query = "SELECT * FROM user WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($conn, $query);
    
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    
        // Execute the query
        mysqli_stmt_execute($stmt);

        // Get the result
        $res = mysqli_stmt_get_result($stmt);
        $nbrows = mysqli_num_rows($res);

        if ($nbrows == 0) {
            echo "<script>alert('Incorrect information!');</script>";
        } else {
            session_start();
            $_SESSION['isLoggedIn'] = 1;
            $_SESSION['loginUsername'] = $username;
            $_SESSION['userType'];
            header("location:index.php");
        }
        mysqli_stmt_close($stmt);
    }
    ?>
</body>


</html>