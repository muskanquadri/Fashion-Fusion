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

// Handle removing item from cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_item'])) {
    $product_name = $_POST['product_name'];
    $sql = "DELETE FROM cart WHERE username='$user' AND product_name='$product_name'";
    if (!$conn->query($sql)) {
        echo "Error removing item: " . $conn->error;
    }
}

// Handle adding item to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_image'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    
    $sql = "INSERT INTO cart (username, product_name, product_image, product_description, product_price)
            VALUES ('$user', '$product_name', '$product_image', '$product_description', '$product_price')";
    
    if (!$conn->query($sql)) {
        echo "Error adding item to cart: " . $conn->error;
    }
}
?>

<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="includes/#styles.css">
    <main>
        <section class="cart-items">
            <h2>Recently Added Items</h2>
            <?php
            $sql = "SELECT product_name, product_image, product_description, product_price FROM cart WHERE username='$user'";
            $result = $conn->query($sql);

            if (!$result) {
                echo "Error fetching items: " . $conn->error;
            } elseif ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div>';
                    echo '<h3>' . htmlspecialchars($row['product_name']) . '</h3>';
                    echo '<img src="' . htmlspecialchars($row['product_image']) . '" alt="Product Image">';
                    echo '<p>Description: ' . htmlspecialchars($row['product_description']) . '</p>';
                    echo '<p>Price: ' . htmlspecialchars($row['product_price']) . '</p>';
                    echo '<form method="post" action="buy.php">';
                    echo '<input type="hidden" name="product_name" value="' . htmlspecialchars($row['product_name']) . '">';
                    echo '<input type="hidden" name="product_image" value="' . htmlspecialchars($row['product_image']) . '">';
                    echo '<input type="hidden" name="product_description" value="' . htmlspecialchars($row['product_description']) . '">';
                    echo '<input type="hidden" name="product_price" value="' . htmlspecialchars($row['product_price']) . '">';
                    echo '<button type="submit" name="buy_now">Buy Now</button>';
                    echo '</form>';
                    echo '<form method="post" action="cart.php">';
                    echo '<input type="hidden" name="product_name" value="' . htmlspecialchars($row['product_name']) . '">';
                    echo '<button type="submit" name="remove_item">Remove Item</button>';
                    echo '</form>';
                    echo '</div>';
                }
            } else {
                echo 'No items found in your cart.';
            }

            $conn->close();
            ?>
        </section>
    </main>

    