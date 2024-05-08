<?php

include ("connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaf Signup</title>
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
    <div class="container glass">
        <div class="form">
            <br>
            <br>
            <h1>Join Leaf Village</h1>
            <br>
        </div>
        <form id="signupForm">
            <div class="formGroup">
                <input type="text" name="username" id="username" placeholder="User Name" autocomplete="off">
            </div>
            <div class="formGroup">
                <input type="email" name="email" id="email" placeholder="Email ID" autocomplete="off">
            </div>
            <div class="formGroup">
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">
            </div>
            <div class="formGroup">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password"
                    autocomplete="off">
            </div>
            <br>
            <div class="formGroup">
                <button type="button" class="signup" onclick="signup()">Signup</button>
            </div>
        </form>
        <br><br>
        <div class="formGroup">
            <p>Have an account ? |</p>
            <a href="login.php">Login</a>
        </div>
    </div>

    <!-- Chat Box -->
    <div class="chatBox glass">
        Chat with us
    </div>


    <script src="index.js"></script>
    <script>
        function signup() {
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            // Check if passwords match
            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return;
            }

            // Create a FormData object to send data to PHP
            var formData = new FormData();
            formData.append('username', username);
            formData.append('email', email);
            formData.append('password', password);

            // Send form data to PHP script using fetch API
            fetch('process_signup.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    alert(data); // Display response from PHP script
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>

</body>

</html>