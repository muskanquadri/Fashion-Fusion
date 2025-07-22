<?php include('includes/header.php'); ?>
<?php
// Database connection
include('includes/db_connection.php');

// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if username already exists
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "Username already taken!";
} else {
    // Insert the new user into the database
    $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
    if (mysqli_query($conn, $query)) {
        echo "Registration successful! You can now <a href='login.php'>login</a>.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
