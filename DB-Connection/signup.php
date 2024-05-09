<?php
// Include the database connection script
include 'connection.php';

// Use the null coalescing operator to set default values
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

// Ensure required fields are provided
if ($name && $email && $password) {
    // Secure the password using `password_hash`
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Prepare the `INSERT` statement using prepared statements
    $stmt = $conn->prepare("INSERT INTO user_form (name, email, password) VALUES (?, ?, ?)");

    // Bind parameters to the statement
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<h3>Data stored in the database successfully. Please check your database to view the updated data.</h3>";
        echo nl2br("\nName: $name\nEmail: $email\nPassword: [hashed for security]");
    } else {
        echo "ERROR: Could not execute the query: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    echo "ERROR: All form fields must be filled.";
}

// Close the database connection
$conn->close();
?>
