<?php
 include('fetch_reviews.php');

// $servername = "your_database_host";
// $host = "sql309.infinityfree.com";  
// $username = "if0_35428446";
// $password = "Z3Qtr7S7VzqcSu";
// $dbname = "if0_35428446_reviews";

$host = "localhost";  
$username = "root";
$password = "";
$dbname = "reviews";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$rating = $_POST["rating"];
$comment = $_POST["comment"];

// Validate input (add more validation if needed)

$sql = "INSERT INTO reviews (name, rating, comment) VALUES ('$name', $rating, '$comment')";

if ($conn->query($sql) === TRUE) {
    // echo "Review submitted successfully";
    header('Location:index2.php');


} else {
    echo "Error submitting review: " . $conn->error;
}

$conn->close();
?>
