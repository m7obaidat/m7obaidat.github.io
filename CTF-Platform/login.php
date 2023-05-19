<?php
// Handle login form submission and authentication logic

// Display the login form
?>
<h2>Login</h2>
<form action="index.php?page=login" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
<p>Don't have an account? <a href="index.php?page=register">Register here</a>.</p>
