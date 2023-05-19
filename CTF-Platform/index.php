<?php
// Include necessary PHP files and start sessions

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    // Display the main dashboard or challenge page
} else {
    // Display the login or registration page
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CTF Platform</title>
    <!-- Include CSS stylesheets -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Header, navigation, and other common elements -->
    
    <!-- Content area -->
    <div class="container">
        <?php include 'content.php'; ?>
    </div>
    
    <!-- Footer and script tags -->
</body>
</html>
