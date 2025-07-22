<?php include('includes/header.php'); ?>
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Fusion</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        #suggestions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        #suggestions div {
            background: #fff;
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
            text-align: center;
            width: calc(50% - 20px);
            box-sizing: border-box;
            position: relative;
        }
        #suggestions img {
            width: 100%;
            height: auto;
        }
        .description {
            font-size: 18px;
            font-style: italic;
        }
        .even-row > .description {
            order: 2; /* Ensure even items have description last */
        }
        .explore-button {
            display: inline-block;
            padding: 10px 20px;
            background: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .explore-button:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <header>
       
        
    </header>
    <main>
        <section id="suggestions">
            <h2>Product Suggestions</h2>
            <!-- Static product suggestions -->
            <div class="odd-row">
                <p class="description">Description: Stylish and comfortable.</p>
                <img src="images/PP.jpg" alt="Product Image 1">
            </div>
            <div class="even-row">
                <img src="images/P10.jpg" alt="Product Image 2">
                <p class="description">Description: Stylish and comfortable.</p>
            </div>
            <div class="odd-row">
                <p class="description">Description: Stylish and comfortable.</p>
                <img src="images/K1.jpg" alt="Product Image 3">
            </div>
            <div class="even-row">
                <img src="images/abc.jpg" alt="Product Image 4">
                <p class="description">Description: Elegant and chic.</p>
            </div>
            <div class="odd-row">
                <p class="description">Description: Trendy and versatile.</p>
                <img src="images/KK.jpg" alt="Product Image 5">
            </div>
        </section>
        <div style="text-align: center; margin: 20px 0;">
            <a href="categories.php" class="explore-button">Explore Now</a>
        </div>
    </main>
</body>
</html>
