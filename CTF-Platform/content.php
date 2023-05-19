<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'login':
            include 'login.php';
            break;
        case 'register':
            include 'register.php';
            break;
        case 'challenges':
            include 'challenges.php';
            break;
        // Add other page cases as needed
        default:
            include 'login.php';
            break;
    }
} else {
    include 'login.php'; // Default to the login page
}
?>
