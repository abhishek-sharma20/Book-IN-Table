<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header("Location: login.html");
    exit();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="styles.css">
     <!----  box icon link--><link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
    <!--------------------Jquery Cdn--------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--------------------Jquery Cdn--------->
    
    <!-----------------------Bootstrap CDN fo jquery,popper and js--------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-----------------------Bootstrap CDN fo jquery,popper and js--------------->
    
    <!------------------LIght BOx for Gallery-------------->
    <link rel="stylesheet" href="lightbox.min.css">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
    <!------------------LIght BOx for Gallery-------------->
    
    <!-- -----------------------Flickity For Slider----- -->
    <link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">
    <script src="https://npmcdn.com/flickity@1.2/dist/flickity.pkgd.min.js"></script>
    
    <!-------------------------Flickity For Slider------->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: skyblue;
    }
    
    .container {
        max-width: 100%;
        margin: 30px auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    #reviews-container {
        margin-top:50px;
        border-color: black;
        border-style: solid;
        background-color:white;
        padding-left: 20px;

    }
    
    .review {
        border-bottom: 1px solid #ccc;
        padding: 10px 0;
    }
    
    .review p {
        margin: 0;
    }
    
    form {
        margin-top: 20px;
        padding-left: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
    }
    .button{
       display: flex;
       margin-top: auto;
       margin-bottom: auto;
    }
    .buttonn{
        margin-top: auto;
        margin-bottom: auto;
        margin-left: 20px;
    }
    #form{
        border-color: black;
        border-style: solid;

    }
    .containerr{
        /* text-align: center; */
        margin-left: auto;
         margin-right: auto;
        /* align-items: center;
        justify-content: center;  */


    }
    /* ul{
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        align-items: center;
        justify-content: center;
    } */
    
</style>

<script>
    function review()
    {
         alert("Review submit successfully.Thanks!!")
    }
</script>
</head>
<body>
    <!-- reviews -->

<div class="container mt-0 p-0" id="review">
    <div id="reviews-container">
    <h1 class="text-center text-danger font-weight-bold" >Reviews</h1>

        <?php include 'fetch_reviews.php'; ?>
        </div>

    <!-- </div> -->
    <div id="form">
    <h2 class="text-center text-danger font-weight-bold">Submit Your Review</h2>
    <form action="submit_review.php" method="post" onsubmit="review()"  >
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="rating">Rating (1-5):</label>
        <input type="number" id="rating" min="1" max="5" name="rating" required>
        <label for="comment">Review:</label>
        <div class="button"><textarea id="comment" name="comment" required></textarea>
      <div class="buttonn"><button type="submit" >Submit Review</button></div></div>
    </form>
    </div>
    
</div>

    
</body>
</html>