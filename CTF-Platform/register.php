<?php
// Handle registration form submission and user creation logic

// Display the registration form
?>
<h2>Register</h2>
<form action="index.php?page=register" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>
<p>Already have an account? <a href="index.php?page=login">Login here</a>.</p>
