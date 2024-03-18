<?php
// $host = "sql309.infinityfree.com";  
// $username = "if0_35428446";
// $password = "Z3Qtr7S7VzqcSu";
// $dbname = "if0_35428446_reviews";
session_start();


$host = "localhost";  
$username = "root";
$password = "";
$dbname = "reviews";
// $servername = "your_database_host";
// $host = "sql309.infinityfree.com";  
// $username = "if0_35428446";
// $password = "Z3Qtr7S7VzqcSu";
// $dbname = "if0_35428446_reviews";
// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs to prevent SQL injection
$userId = $_SESSION['user_id'];

$vendor_name = $conn->real_escape_string($_POST['vendor_name']);
$full_name = $conn->real_escape_string($_POST['full_name']);
$number = $conn->real_escape_string($_POST['number']);
$email = $conn->real_escape_string($_POST['email']);
$group_size = $conn->real_escape_string($_POST['group_size']);
$date = $conn->real_escape_string($_POST['date']);
$time = $conn->real_escape_string($_POST['time']);
$address = $conn->real_escape_string($_POST['address']);

// Insert data into the database
$sql = "INSERT INTO reservations (user_id,vendor_name, full_name, number, email, group_size, date, time, address)
        VALUES ('$userId','$vendor_name', '$full_name', '$number', '$email', '$group_size', '$date', '$time', '$address')";

if ($conn->query($sql) === TRUE) {
    echo '<p>Reservation submitted successfully.</p>';
    // header('Location:cart.html');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add To Cart</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    a:hover{
        color:none;
        background-color: white;
        text-decoration: none;


    }
    #logout-btn:hover{
        background-color: white;
        float: right;

        
    }
    #logout-btn{
        /* background-color: white; */
        float: right;
        margin-right: 20px;
    }
    </style>
</head>
<body>
    <?php


// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header("Location: login.html");
    exit();
}
?>

    <div><button id="logout-btn"><a href="logout.php" >Log Out</a></button></div>
    <div><button id="logout-btn"><a href="index2.php" >Home</a></button></div>


<div style="background-color:#F0F0F0">
    <h4 class="text-center text-success font-weight-bold" id="cartt">Order Now</h1>
        <p class="text-center text-danger font-weight-bold">Add on some more food items in our your list now...</p>
    <div class="menu" >
        <div class="menu-section col-10 col-lg-4 col-sm-8 col-md-7 mx-auto">
            <h2>Veg</h2>
            <div class="menu-item">
                <h2>Spring Rolls</h2>
                <p>Price: $6.99</p>
                <div class="add-to-cart" data-name="Spring Rolls" data-price="6.99">
                    <button class="minus">-</button>
                    <span class="quantity">0</span>
                    <button class="plus">+</button>
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>

            <div class="menu-item">
                <h2>Caprese Salad</h2>
                <p>Price: $8.99</p>
                <div class="add-to-cart" data-name="Caprese Salad" data-price="8.99">
                    <button class="minus">-</button>
                    <span class="quantity">0</span>
                    <button class="plus">+</button>
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="menu-section col-10 col-lg-4 col-sm-8 col-md-7 mx-auto">
            <h2>Non-Veg</h2>
            <div class="menu-item">
                <h2>Chicken Alfredo</h2>
                <p>Price: $14.99</p>
                <div class="add-to-cart" data-name="Chicken Alfredo" data-price="14.99">
                    <button class="minus">-</button>
                    <span class="quantity">0</span>
                    <button class="plus">+</button>
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>

            <div class="menu-item">
                <h2>Beef Burger</h2>
                <p>Price: $11.99</p>
                <div class="add-to-cart" data-name="Beef Burger" data-price="11.99">
                    <button class="minus">-</button>
                    <span class="quantity">0</span>
                    <button class="plus">+</button>
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="menu-section col-10 col-lg-4 col-sm-8 col-md-7 mx-auto">
            <h2>Drinks</h2>
            <div class="menu-item">
                <h2>Cola</h2>
                <p>Price: $2.99</p>
                <div class="add-to-cart" data-name="Cola" data-price="2.99">
                    <button class="minus">-</button>
                    <span class="quantity">0</span>
                    <button class="plus">+</button>
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>

            <div class="menu-item">
                <h2>Orange Juice</h2>
                <p>Price: $3.99</p>
                <div class="add-to-cart" data-name="Orange Juice" data-price="3.99">
                    <button class="minus">-</button>
                    <span class="quantity">0</span>
                    <button class="plus">+</button>
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
<form action="cart_data.php" method="post" id="cartForm">

    <div class="cart-container">
        <h2>Cart</h2>
        <ul id="cart"></ul>
        <p class="total">Total: $<span id="total">0</span></p>
        <button type="button" class="buy-button" style="display: none" onclick="submitCart()">Buy</button>
    </div>
</form>

    <script>
        
        function submitCart() {
            const cartForm = document.getElementById('cartForm');
            const cartItemsInput = document.createElement('input');
            cartItemsInput.type = 'hidden';
            cartItemsInput.name = 'cartItems';
            cartItemsInput.value = JSON.stringify(cartItems);
            cartForm.appendChild(cartItemsInput);
            cartForm.submit();
        }
        // JavaScript for adding items to the cart
        const addButtons = document.querySelectorAll('.plus');
        const minusButtons = document.querySelectorAll('.minus');
        const quantityElements = document.querySelectorAll('.quantity');
        const cartButtons = document.querySelectorAll('.add-to-cart-button');
        const cart = document.getElementById('cart');
        const total = document.getElementById('total');
        const buyButton = document.querySelector('.buy-button');

        let cartItems = [];

        addButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                incrementQuantity(index);
            });
        });

        minusButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                decrementQuantity(index);
            });
        });

        cartButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                const name = button.parentElement.getAttribute('data-name');
                const price = parseFloat(button.parentElement.getAttribute('data-price'));
                const quantity = parseInt(quantityElements[index].textContent);

                if (quantity > 0) {
                    const existingItem = cartItems.find(item => item.name === name);

                    if (existingItem) {
                        existingItem.quantity += quantity;
                    } else {
                        cartItems.push({ name, price, quantity });
                    }

                    quantityElements[index].textContent = '0';
                    updateCart();
                }
            });
        });

        function incrementQuantity(index) {
            const quantity = parseInt(quantityElements[index].textContent);
            quantityElements[index].textContent = quantity + 1;
        }

        function decrementQuantity(index) {
            const quantity = parseInt(quantityElements[index].textContent);
            if (quantity > 0) {
                quantityElements[index].textContent = quantity - 1;
            }
        }

        function updateCart() {
            cart.innerHTML = '';
            let cartTotal = 0;

            cartItems.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = `${item.name} - Quantity: ${item.quantity} - $${(item.price * item.quantity).toFixed(2)}`;
                cart.appendChild(listItem);
                cartTotal += item.price * item.quantity;
            });

            total.textContent = cartTotal.toFixed(2);

            if (cartItems.length > 0) {
                buyButton.style.display = 'block';
            } else {
                buyButton.style.display = 'none';
            }
            
    buyButton.addEventListener('click', () => {
        if (cartItems.length > 0) {
            // Simulate a purchase by showing an alert message
            const totalAmount = parseFloat(total.textContent);
            alert(`Total amount: $${totalAmount}\nThank you for your purchase!. We will communicate to you via your given contact details soon for more info`);
            
            // Reset the cart and hide the "Buy" button
            cartItems = [];
            updateCart();
        }
    });
        }
    </script>

</body>
</html>


