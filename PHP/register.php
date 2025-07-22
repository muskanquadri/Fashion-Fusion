<?php include('includes/header.php'); ?>
<div class="register-container">
    <h2>Register</h2>
    <form action="register_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        
        <button type="submit">Register</button>
    </form>
</div>
<?php include('includes/footer.php'); ?>
