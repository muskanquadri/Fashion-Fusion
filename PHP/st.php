<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="includes/#styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="product-grid">
<?php
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fashion_fusion";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT DISTINCT name, images, description, price FROM st";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div class="product-item">';
            echo '<h3>' . $row['name'] . '</h3>';
            echo '<img src="' . $row['images'] . '" alt="Product Images">';
            echo '<p>Description: ' . $row['description'] . '</p>';
            echo '<p>Price: ' . $row['price'] . '</p>';
            echo '<form method="post" action="buy.php">';
            echo '<input type="hidden" name="product_name" value="' . $row['name'] . '">';
            echo '<input type="hidden" name="product_image" value="' . $row['images'] . '">';
            echo '<input type="hidden" name="product_description" value="' . $row['description'] . '">';
            echo '<input type="hidden" name="product_price" value="' . $row['price'] . '">';
            echo '<button type="submit" name="buy_now" value="' . $row['name'] . '">Buy Now</button>'; 
            echo '</form>';
            echo '<form method="post" action="cart.php">';
            echo '<input type="hidden" name="product_name" value="' . $row['name'] . '">';
            echo '<input type="hidden" name="product_image" value="' . $row['images'] . '">';
            echo '<input type="hidden" name="product_description" value="' . $row['description'] . '">';
            echo '<input type="hidden" name="product_price" value="' . $row['price'] . '">';
            echo '<button type="submit" name="add_to_cart" value="' . $row['name'] . '">Add to Cart</button>';
            echo '</form>';
            echo '<form method="post" action="wishlist.php">';
            echo '<input type="hidden" name="product_name" value="' . $row['name'] . '">';
            echo '<input type="hidden" name="product_image" value="' . $row['images'] . '">';
            echo '<input type="hidden" name="product_description" value="' . $row['description'] . '">';
            echo '<input type="hidden" name="product_price" value="' . $row['price'] . '">';
            echo '<button type="submit" name="add_to_wishlist" value="' . $row['name'] . '">Wishlist</button>';
            echo '</form>';
            echo '</div>';
        }
    } else {
        echo 'No products found.';
    }

    $conn->close();
?>
</div>
    
</body>
</html>
