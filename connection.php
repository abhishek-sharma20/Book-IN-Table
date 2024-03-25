<?php      
    $host = "localhost";
    $username = "root";  
    $password = "";  
    $dbname = "reviews"; 

    // $servername = "your_database_host";
// $host = "sql309.infinityfree.com";  
// $username = "if0_35428446";
// $password = "Z3Qtr7S7VzqcSu";
// $dbname = "if0_35428446_reviews";
      
    $con = mysqli_connect($host, $username, $password, $dbname);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  
