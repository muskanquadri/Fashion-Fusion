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

// Handle adding item to wishlist
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_wishlist'])) {
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_image'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    
    $sql = "INSERT INTO wishlist (username, product_name, product_image, product_description, product_price)
            VALUES ('$user', '$product_name', '$product_image', '$product_description', '$product_price')";

    if (!$conn->query($sql)) {
        echo "Error adding item to wishlist: " . $conn->error;
    }
}

// Handle removing item from wishlist
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_item'])) {
    $product_name = $_POST['product_name'];
    $sql = "DELETE FROM wishlist WHERE username='$user' AND product_name='$product_name'";

    if (!$conn->query($sql)) {
        echo "Error removing item from wishlist: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <style>
        /* wishlist-items Section */
        .wishlist-items {
            width: 80%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .wishlist-items h2 {
            grid-column: span 2;
            text-align: center;
            color: #333;
        }

        .wishlist-items div {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            text-align: center;
        }

        .wishlist-items img {
            width: 150px;
            max-width: 250px;
            height: auto; /* Ensures aspect ratio is maintained */
            object-fit: contain;
        }

        /* Buttons */
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Ensure that images in two rows remain of equal size */
        .wishlist-items img {
            max-width: 100%;
            height: auto; /* Ensures aspect ratio is maintained */
        }
    </style>
</head>
<body>
    <header>
   
        <h1>My Wishlist</h1>
    </header>

    <main>
        <section class="wishlist-items">
            <h2>Saved Items</h2>
            <?php
            $sql = "SELECT product_name, product_image, product_description, product_price FROM wishlist WHERE username='$user'";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div>';
                    echo '<h3>' . htmlspecialchars($row['product_name']) . '</h3>';
                    echo '<img src="' . htmlspecialchars($row['product_image']) . '" alt="Product Image">';
                    echo '<p>Description: ' . htmlspecialchars($row['product_description']) . '</p>';
                    echo '<p>Price: ₹' . htmlspecialchars($row['product_price']) . '</p>';
                    // Buy Now button
                    echo '<form method="post" action="buy.php">';
                    echo '<input type="hidden" name="product_name" value="' . htmlspecialchars($row['product_name']) . '">';
                    echo '<input type="hidden" name="product_image" value="' . htmlspecialchars($row['product_image']) . '">';
                    echo '<input type="hidden" name="product_description" value="' . htmlspecialchars($row['product_description']) . '">';
                    echo '<input type="hidden" name="product_price" value="' . htmlspecialchars($row['product_price']) . '">';
                    echo '<button type="submit" name="buy_now">Buy Now</button>';
                    echo '</form>';
                    // Remove button
                    echo '<form method="post" action="">';
                    echo '<input type="hidden" name="product_name" value="' . htmlspecialchars($row['product_name']) . '">';
                    echo '<button type="submit" name="remove_item">Remove</button>';
                    echo '</form>';
                    echo '</div>';
                }
            } else {
                echo "<p>No items in your wishlist.</p>";
            }
            $conn->close();
            ?>
        </section>
    </main>
</body>
</html>
