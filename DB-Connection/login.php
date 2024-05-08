<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaf Login</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
    <header class="header">
        <a href="home.php" class="logo">Leaf
            <img class="Leaf" src="../DB-Connection/Photos/logo.png" alt="">
        </a>
        <nav class="navbar">
            <a href="signup.php">Sign Up</a>
            <a href="login.php">Login</a>
            <a href="#">Courses</a>
            <a href="#">Contact Us</a>
            <a href="#">About Us</a>
        </nav>
    </header>
    <div class="container glass" style="height: 500px;">
        <form name="form" action="checklogin.php" method="POST">
            <div class="form">
                <br>
                <br>
                <h1>Login to Leaf Village</h1>
                <br>
                <br>
                <br>
            </div>
            <div class="formGroup">
                <input type="text" name="username" id="user name" placeholder="User Name" autocomplete="off">
            </div>
            <div class="formGroup">
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">
                <!-- <button id="showPasswordBtn">Show Password</button>  need java script will add it later-->
            </div>
            <br>
            <div class="formGroup">
                <button class="signup" value="login" name="submit">
                    Login
                </button>
            </div>
        </form>
        <div class="formGroup">
            <p>Not have a account ? |</p>
            <a href="signup.php">Sign up</a>
        </div>
    </div>

    <!-- Chat Box -->
    <div class="chatBox glass">
        Chat with us
    </div>

    <script src="index.js"></script>
</body>

</html>