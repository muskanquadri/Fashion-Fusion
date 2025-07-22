<?php include('includes/header.php'); ?>
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['username']; // Retrieve the username from session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion_fusion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle payment and removal from cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pay_now'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $payment_method = $_POST['payment_method'];

    // Remove item from cart
    $sql = "DELETE FROM cart WHERE username='$user' AND product_name='$product_name'";
    if (!$conn->query($sql)) {
        echo "Error completing purchase: " . $conn->error;
    } else {
        echo "<h1>Thank You!</h1>";
        echo "<p>Thank you for your purchase of " . htmlspecialchars($product_name) . " using " . htmlspecialchars($payment_method) . ".</p>";
        echo "<p>Total amount: ₹" . htmlspecialchars($product_price) . "</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>

        <h1>Payment Confirmation</h1>
    </header>

    <main>
        <section>
            <?php
            if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                echo "<h1>Error</h1><p>Invalid request.</p>";
            }
            ?>
        </section>
    </main>
    <div style="text-align: center; margin: 20px 0;">
            <a href="categories.php" class="explore-button">Continue Shopping</a>
        </div>
    <footer>
        <p>&copy; 2025 Fashion Fusion. All rights reserved.</p>
    </footer>
</body>
</html>
