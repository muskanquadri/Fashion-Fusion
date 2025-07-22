<?php include('includes/header.php'); ?>
<div class="center-wrapper">
    <div class="login-container">
        <h2>Login</h2>
        <form action="authenticate.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        <p> <a href="admin.php">Admin login</a>.</p>
    </div>
</div>
<?php include('includes/footer.php'); ?>
