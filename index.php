<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // User is logged in, redirect to index2.html
    header("Location: index2.php");
    exit();
} else {
    // User is not logged in, redirect to index.html
    header("Location: index.html");
    exit();
}
?>
