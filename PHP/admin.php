<?php
session_start();
include('db_config.php');

// Handle login logic
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['admin'] = $username;
    } else {
        echo "Invalid credentials";
    }
}

// Handle logout logic
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit();
}

// Handle add/edit/delete product logic for multiple tables
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    // Add product to 'st' table
    if (isset($_POST['add_st_product'])) {
        $name = $_POST['st_name'];
        $price = $_POST['st_price'];
        $description = $_POST['st_description'];
        $images = $_POST['st_images'];

        $sql = "INSERT INTO st (name, price, description, images) VALUES ('$name', '$price', '$description', '$images')";
        mysqli_query($conn, $sql);
    }

    // Add product to 'mh' table
    if (isset($_POST['add_mh_product'])) {
        $name = $_POST['mh_name'];
        $price = $_POST['mh_price'];
        $description = $_POST['mh_description'];
        $images = $_POST['mh_images'];

        $sql = "INSERT INTO mh (name, price, description, images) VALUES ('$name', '$price', '$description', '$images')";
        mysqli_query($conn, $sql);
    }

    // Add product to 'kh' table
    if (isset($_POST['add_kh_product'])) {
        $name = $_POST['kh_name'];
        $price = $_POST['kh_price'];
        $description = $_POST['kh_description'];
        $images = $_POST['kh_images'];

        $sql = "INSERT INTO kh (name, price, description, images) VALUES ('$name', '$price', '$description', '$images')";
        mysqli_query($conn, $sql);
    }

    // Add product to 'wd' table
    if (isset($_POST['add_wd_product'])) {
        $name = $_POST['wd_name'];
        $price = $_POST['wd_price'];
        $description = $_POST['wd_description'];
        $images = $_POST['wd_images'];

        $sql = "INSERT INTO wd (name, price, description, images) VALUES ('$name', '$price', '$description', '$images')";
        mysqli_query($conn, $sql);
    }

     // Add product to 'fm' table
     if (isset($_POST['add_fm_product'])) {
        $name = $_POST['fm_name'];
        $price = $_POST['fm_price'];
        $description = $_POST['fm_description'];
        $images = $_POST['fm_images'];

        $sql = "INSERT INTO fm (name, price, description, images) VALUES ('$name', '$price', '$description', '$images')";
        mysqli_query($conn, $sql);
    }

     // Add product to 'gh' table
     if (isset($_POST['add_gh_product'])) {
        $name = $_POST['gh_name'];
        $price = $_POST['gh_price'];
        $description = $_POST['gh_description'];
        $images = $_POST['gh_images'];

        $sql = "INSERT INTO gh (name, price, description, images) VALUES ('$name', '$price', '$description', '$images')";
        mysqli_query($conn, $sql);
    }

     // Add product to 'pb' table
     if (isset($_POST['add_pb_product'])) {
        $name = $_POST['pb_name'];
        $price = $_POST['pb_price'];
        $description = $_POST['pb_description'];
        $images = $_POST['pb_images'];

        $sql = "INSERT INTO pb (name, price, description, images) VALUES ('$name', '$price', '$description', '$images')";
        mysqli_query($conn, $sql);
    }

     // Add product to 'sa' table
     if (isset($_POST['add_sa_product'])) {
        $name = $_POST['sa_name'];
        $price = $_POST['sa_price'];
        $description = $_POST['sa_description'];
        $images = $_POST['sa_images'];

        $sql = "INSERT INTO sa (name, price, description, images) VALUES ('$name', '$price', '$description', '$images')";
        mysqli_query($conn, $sql);
    }
}

// Fetch products from multiple tables
$products_st = mysqli_query($conn, "SELECT * FROM st");
$products_wd = mysqli_query($conn, "SELECT * FROM wd");
$products_mh = mysqli_query($conn, "SELECT * FROM mh");
$products_kh = mysqli_query($conn, "SELECT * FROM kh");
$products_fm = mysqli_query($conn, "SELECT * FROM fm");
$products_gh = mysqli_query($conn, "SELECT * FROM gh");
$products_pb = mysqli_query($conn, "SELECT * FROM pb");
$products_sa = mysqli_query($conn, "SELECT * FROM sa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <style>
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h1, h2 {
        text-align: center;
        color: #333;
    }

    /* Container Style */
    .container {
        width: 80%;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Form Styles */
    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 100%;
    }

    input[type="text"],
    input[type="password"],
    textarea,
    button {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    input[type="text"],
    input[type="password"],
    textarea {
        width: 100%;
    }

    button {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    /* Table Styles */
    table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    td img {
        max-width: 100px;
        border-radius: 5px;
    }

    /* Logout Button Style */
    .logout {
        display: block;
        width: 80px;
        margin: 20px auto;
        padding: 10px;
        text-align: center;
        background-color: #ff4d4d;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
    }

    .logout:hover {
        background-color: #e60000;
    }

    /* Message Style */
    .message {
        width: 300px;
        margin: 20px auto;
        padding: 10px;
        background-color: #ffdddd;
        border-left: 6px solid #f44336;
        color: #333;
    }
    </style>
</head>
<body>
<div class="container">

    <?php if (!isset($_SESSION['admin'])): ?>
        <!-- Login Form -->
        <form action="admin.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
    <?php else: ?>
        <!-- Admin Dashboard -->
        <h1>Welcome to the Admin Dashboard</h1>
        <a href="admin.php?logout=true">Logout</a>

        <!-- Manage Products for 'st' table -->
        <h2>Manage Products (st)</h2>
        <form method="post" action="admin.php">
            <input type="text" name="st_name" placeholder="Product Name" required>
            <input type="text" name="st_price" placeholder="Price" required>
            <textarea name="st_description" placeholder="Description" required></textarea>
            <input type="text" name="st_images" placeholder="Image URL" required>
            <button type="submit" name="add_st_product">Add Product</button>
        </form>

        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Images</th>
            </tr>
            <?php while($product = mysqli_fetch_assoc($products_st)): ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img src="<?= $product['images'] ?>" alt="<?= $product['name'] ?>" width="100"></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <!-- Manage Products for 'mh' table -->
        <h2>Manage Products (mh)</h2>
        <form method="post" action="admin.php">
            <input type="text" name="mh_name" placeholder="Product Name" required>
            <input type="text" name="mh_price" placeholder="Price" required>
            <textarea name="mh_description" placeholder="Description" required></textarea>
            <input type="text" name="mh_images" placeholder="Image URL" required>
            <button type="submit" name="add_mh_product">Add Product</button>
        </form>

        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Images</th>
            </tr>
            <?php while($product = mysqli_fetch_assoc($products_mh)): ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img src="<?= $product['images'] ?>" alt="<?= $product['name'] ?>" width="100"></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <!-- Manage Products for 'kh' table -->
        <h2>Manage Products (kh)</h2>
        <form method="post" action="admin.php">
            <input type="text" name="kh_name" placeholder="Product Name" required>
            <input type="text" name="kh_price" placeholder="Price" required>
            <textarea name="kh_description" placeholder="Description" required></textarea>
            <input type="text" name="kh_images" placeholder="Image URL" required>
            <button type="submit" name="add_kh_product">Add Product</button>
        </form>

        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Images</th>
            </tr>
            <?php while($product = mysqli_fetch_assoc($products_kh)): ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img src="<?= $product['images'] ?>" alt="<?= $product['name'] ?>" width="100"></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <!-- Manage Products for 'wd' table -->
        <h2>Manage Products (wd)</h2>
        <form method="post" action="admin.php">
            <input type="text" name="wd_name" placeholder="Product Name" required>
            <input type="text" name="wd_price" placeholder="Price" required>
            <textarea name="wd_description" placeholder="Description" required></textarea>
            <input type="text" name="wd_images" placeholder="Image URL" required>
            <button type="submit" name="add_wd_product">Add Product</button>
        </form>

        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Images</th>
            </tr>
            <?php while($product = mysqli_fetch_assoc($products_wd)): ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img src="<?= $product['images'] ?>" alt="<?= $product['name'] ?>" width="100"></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <!-- Manage Products for 'fm' table -->
        <h2>Manage Products (fm)</h2>
        <form method="post" action="admin.php">
            <input type="text" name="fm_name" placeholder="Product Name" required>
            <input type="text" name="fm_price" placeholder="Price" required>
            <textarea name="fm_description" placeholder="Description" required></textarea>
            <input type="text" name="fm_images" placeholder="Image URL" required>
            <button type="submit" name="add_fm_product">Add Product</button>
        </form>

        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Images</th>
            </tr>
            <?php while($product = mysqli_fetch_assoc($products_fm)): ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img src="<?= $product['images'] ?>" alt="<?= $product['name'] ?>" width="100"></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <!-- Manage Products for 'gh' table -->
        <h2>Manage Products (gh)</h2>
        <form method="post" action="admin.php">
            <input type="text" name="gh_name" placeholder="Product Name" required>
            <input type="text" name="gh_price" placeholder="Price" required>
            <textarea name="gh_description" placeholder="Description" required></textarea>
            <input type="text" name="gh_images" placeholder="Image URL" required>
            <button type="submit" name="add_gh_product">Add Product</button>
        </form>

        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Images</th>
            </tr>
            <?php while($product = mysqli_fetch_assoc($products_gh)): ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img src="<?= $product['images'] ?>" alt="<?= $product['name'] ?>" width="100"></td>
                </tr>
            <?php endwhile; ?>
        </table>
        
        <!-- Manage Products for 'pb' table -->
        <h2>Manage Products (pb)</h2>
        <form method="post" action="admin.php">
            <input type="text" name="pb_name" placeholder="Product Name" required>
            <input type="text" name="pb_price" placeholder="Price" required>
            <textarea name="pb_description" placeholder="Description" required></textarea>
            <input type="text" name="pb_images" placeholder="Image URL" required>
            <button type="submit" name="add_pb_product">Add Product</button>
        </form>

        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Images</th>
            </tr>
            <?php while($product = mysqli_fetch_assoc($products_pb)): ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img src="<?= $product['images'] ?>" alt="<?= $product['name'] ?>" width="100"></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <!-- Manage Products for 'sa' table -->
        <h2>Manage Products (sa)</h2>
        <form method="post" action="admin.php">
            <input type="text" name="sa_name" placeholder="Product Name" required>
            <input type="text" name="sa_price" placeholder="Price" required>
            <textarea name="sa_description" placeholder="Description" required></textarea>
            <input type="text" name="sa_images" placeholder="Image URL" required>
            <button type="submit" name="add_sa_product">Add Product</button>
        </form>

        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Images</th>
            </tr>
            <?php while($product = mysqli_fetch_assoc($products_sa)): ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img src="<?= $product['images'] ?>" alt="<?= $product['name'] ?>" width="100"></td>
                </tr>
            <?php endwhile; ?>
        </table>

    <?php endif; ?>
</body>
</html>
