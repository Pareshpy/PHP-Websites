<?php
// Include the database connection script
include 'connection.php';

// Retrieve the email and password from the form submission
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

// Check if both email and password are provided
if ($email && $password) {
    // Prepare a SELECT query to find the user with the provided email
    $stmt = $conn->prepare("SELECT password FROM user_form WHERE email = ?");
    
    // Bind the email parameter
    $stmt->bind_param("s", $email);
    
    // Execute the query
    $stmt->execute();
    
    // Bind the result to a variable
    $stmt->bind_result($hashedPassword);
    
    // Check if a result was returned
    if ($stmt->fetch()) {
        // Compare the provided password with the hashed password in the database
        if (password_verify($password, $hashedPassword)) {
            // Successful login
            echo "Login successful! Welcome back!";
            // Here you can implement further actions like redirecting the user to a dashboard or setting session variables.
        } else {
            // Password does not match
            echo "Incorrect password. Please try again.";
        }
    } else {
        // No user found with the provided email
        echo "No account found with that email. Please try again.";
    }
    
    // Close the statement
    $stmt->close();
} else {
    echo "Please enter both email and password.";
}

// Close the database connection
$conn->close();
?>
