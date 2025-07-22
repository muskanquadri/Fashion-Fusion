<?php
session_start(); // Start the session

// Database connection
include('includes/db_connection.php');

// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if the user exists
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    
    // Verify password
    if (password_verify($password, $row['password'])) {
        // Correct password, set session variables
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $row['id'];
        
        // Redirect to a protected page
        header("Location:html.php");
    } else {
        // Incorrect password
        echo "Invalid username or password!";
    }
} else {
    // User not found
    echo "Invalid username or password!";
}

// Close the database connection
mysqli_close($conn);
?>
