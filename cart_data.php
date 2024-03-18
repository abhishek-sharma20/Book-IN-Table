<?php
session_start();

// Assuming you have a database connection established
include('connection.php');
// include('info_data.php')
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if 'cartItems' is set in the POST data
    if (isset($_POST['cartItems'])) {
        // Get the cart items as a JSON string
        $userId = $_SESSION['user_id'];

        $cartItems = $_POST['cartItems'];

        // Use proper SQL INSERT statement with your table structure
        $sql = "INSERT INTO cart (user_id,Cart_item) VALUES ('$userId','$cartItems')";

        // Execute the query (you may want to add error handling)
        mysqli_query($con, $sql);

        // Optionally, you can redirect the user to a confirmation page
        header('Location: index2.php');
        exit();
    }
}

// Handle other cases or show an error message if needed
echo 'Error: Invalid request.';
?>
