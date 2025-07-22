<?php include('includes/header.php'); ?>
<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buy_now'])) {
    $product_name = htmlspecialchars($_POST['product_name']);
    $product_image = htmlspecialchars($_POST['product_image']);
    $product_description = htmlspecialchars($_POST['product_description']);
    $product_price = htmlspecialchars($_POST['product_price']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center; 
            align-items: center;
            min-height: 100vh;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            justify-content: center;
            width: 80%;
        }

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        h3 {
            margin: 10px 0;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        p {
            color: #333;
            line-height: 1.5;
        }

        form {
            margin-top: 20px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 15px;
        }

        button:hover {
            background-color: #218838;
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="grid">
            <div class="content">
        <h3><?php echo $product_name; ?></h3>
        <img src="<?php echo $product_image; ?>" alt="Product Image">
        <p>Description: <?php echo $product_description; ?></p>
        <p>Price: <?php echo $product_price; ?></p>
        <form method="post" action="payment.php">
            <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
            <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
            <label>
                <input type="radio" name="payment_method" value="online" required> Online Payment
            </label><br>
            <label>
                <input type="radio" name="payment_method" value="cash" required> Cash on Delivery
            </label><br>
            <button type="submit" name="pay_now">Pay Now</button>
        </form>
    </div>
    </div>
</div>
</body>
</html>

<?php
} else {
    echo "No product was selected for purchase.";
}
?>
