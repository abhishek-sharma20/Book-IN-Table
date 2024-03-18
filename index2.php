<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
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






<title>Book-IN-Table</title>

<script src="script.js"></script>
    


</head>
<body>
<?php
    session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header("Location: login.html");
    exit();
}
?>


    <!-------------------Navigation--------->


    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar bg-info">
        <div class="container">

            <a href="index.html" class="navbar-brand" id="logo">Book-IN-Table</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse text-capitalize" id="responsive">


                    <!-------------Left nav-------------->
                    <ul class="navbar-nav ">
                        <li class="nav-item active"><a href="#about" class="nav-link">About Us</a>
                         <!-- <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>

                            <div class="dropdown-menu border-0">
                                <a href="#menu "class="dropdown-item">menu: Veg</a>
                                <a href="#menu "class="dropdown-item">menu: Non-veg</a>
                                <a href="#menu "class="dropdown-item">menu: Drinks</a>


                            </div>
                         -->
                        

                            <li class="nav-item active"><a href="#newsletter" class="nav-link">Newsletter</a>

                    </ul>
                    <!--------------------Right Nav---------->

                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="#gallery" class="nav-link text-warning font-weight-bolder " >Gallery</a>
                                <li class="nav-item active"><a href="#contact" class="nav-link text-warning font-weight-bolder " >Contact</a>
                                    <li class="nav-item active" id="review"><a href="reviews.php" class="nav-link font-weight-bolder">Reviews</a></li>

                                    <li class="nav-item active"><a href="logout.php" class="nav-link text-warning font-weight-bolder " >Log Out</a>


                    </ul>




                </div>


        </div>



    </nav>



    <!------------------------BAnner Big Image---------------->




   
            <!----------------------Menu main -------------->


                                <!--------------------------DISHES SECTION-->


                                <!-- <div class="video-wrapper">
                                    <video playsinline autoplay muted loop poster="cake.jpg">
                                      <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                      Your browser does not support the video tag.
                                    </video> -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center padding">
                                            <h1 class="my-4 text-danger">Book your place now!!</h1>
                                            <p class="text-dark mt-5"> Reserve a space for such exciting events like:- <span class="text-danger">Birthday Bash</span>  , <span class="text-primary">Annversary</span>  ,<span class="text-success">Wedding Reception</span>
                                                and Many more events... </p>

                                        </div>

                                    </div>

                                </div>

                                <!--------------------------- 1St   Flickity  Images  Options-------------->



                                                    <div class="carousel padding" id="carousel">

                                                            <div class="carousel-cell shadow-lg col-sm-12 col-lg-5 col-md-12 ">
                                                            <a href="caters.php"><div class="carousel-cell-img img1">
                                                                    <div class="row text-white  ">
                                                                        <div class="col-10">
                                                                            <p class="fli-p"><button class="bt">BOOK CATERS</button></p>
                        
                                                                        </div>
                        
                                                                        
                                                                            <div class="col-2 fli-p-d">
                                                                                <p class="badge bg-danger text-white">20% off</p></div>
                        
                                                                    </div>
                                                                     
                        
                                                                </div></a>
                                                               
                        
                                                            </div>
                        
                                                            <div class="carousel-cell col-sm-12 col-lg-5 col-md-12">
                        
                                                            <a href="caters.php"><div class="carousel-cell-img img2">
                                                                            <div class="row text-white ">
                                                                                <div class="col-10 ">
                                                                                    <p class="fli-p"><button class="bt">BOOK A HALL</button></p>
                                
                                                                                </div>
                                
                                                                                
                                                                                    <div class="col-2 fli-p-d"><p class="badge bg-danger text-white">30% off</p>
                                                                                        
                                
                                                                                        </div>
                                
                                                                            </div>
                                                                             
                                
                                                                        </div></a>
                                                                    
                        
                        
                                                                </div>
                        
                                                                <div class="carousel-cell col-sm-12 col-lg-5 col-md-12">
                        
                                                                <a href="caters.php"> <div class="carousel-cell-img img3">
                                                                                <div class="row text-white ">
                                                                                    <div class="col-10 ">
                                                                                        <p class="fli-p"><button class="bt">BOOK AN EVENT GROUND</button></p>
                                    
                                                                                    </div>
                                                                                    <div class="col-2 fli-p-d"><p class="badge bg-danger text-white">20% off</p>
                                                                                        
                                
                                                                                    </div>
                                
                                    
                                                                                </div>
                                                                                 
                                    
                                                                            </div></a>
                                                                        
                        
                        
                                                                    </div>
                        
                                                                    <div class="carousel-cell col-sm-12 col-lg-5 col-md-12">
                        
                                                                    <a href="caters.php"><div class="carousel-cell-img img4" >
                                                                                    <div class="row text-white ">
                                                                                        <div class="col-10 ">
                                                                                            <p class="fli-p"><button class="bt">BOOK TABLE</button></p>
                                        
                                                                                        </div>
                                        
                                                                                        
                                                                                            <div class="col-2 fli-p-d"><p class="badge bg-danger text-white">25% off</p>
                                                                                                
                                        
                                                                                                </div>
                                                                                    </div>
                                                                                    
                                                                                </div></a>
                                                                            
                            
                            
                                                                        </div>
                            
                                                        </div>

                                <!---------------------End 1St Flickity Images Section-------------->



                                <!----------------------Online Reservation------------->


                                <!-- <section id="reservation" class="Reserv padding" style="background-color:#F0F0F0">


                            
                                    <div class="container">

                                        <div class="row">

                                            <div class="col-12" >
                                                <div class="reserve-title text-center">
                                                    <h3 class="my-4">Make Online Reservation</h3>
                                                    <p>Enter Details:-</p>
                                        

                                                </div>

                                            </div>


                                            <div class="col-sm-6 col-xs-12 text-center mx-auto">
                                                <div class="reserv-form">

                                                    <form onsubmit="return order()">
                                                        <div class="box"><i class='bx bx-user'></i> <input type="text" name="Full name" id="full name" class="form-control mb-4 form-control-lg col-sm-6 col-md-6" placeholder="Full name" required></div>
                                                        <div class="box"><i class='bx bx-phone' ></i><input type="number" name="Full name" id="full name" class="form-control mb-4 form-control-lg col-sm-6 col-md-6" placeholder="Phone number" required></div>
                                                        <div class="box"><i class='bx bx-envelope'></i><input type="email" name="Full name" id="full name" class="form-control mb-4 form-control-lg col-sm-6 col-md-6 " placeholder="E-mail address" required></div>
                                                        
                                                       
                                            
                                                        <div class="box"><i class='bx bxs-group'></i><select name="select" id="select-option" class="custom-select custom-select-lg mb-4 col-sm-6 col-md-6" required>
                                                        <option value="1">1-10 Persons</option>
                                                        <option value="2">10-50 Persons</option>
                                                        <option value="3">50-100 Persons</option>
                                                        <option value="3">Large number</option>

                                                    </select></div>


                                                    <div class="box"><i class='bx bxs-checkbox-minus' ></i><input type="date" name="date" id="date" class="form-control form-control-lg mb-4 col-sm-6 col-md-6" required></div>
                                                    <div class="box"><i class='bx bx-time' ></i><input type="time" name="date" id="date" class="form-control form-control-lg mb-4 col-sm-6 col-md-6" required></div>
                                                    <div class="box"><i class='bx bx-current-location' ></i><input type="text" name="date" id="date" class="form-control form-control-lg mb-4 col-sm-6 col-md-6" placeholder="Location" required></div>

                                                    
                                                    <button  type="submit"  class="btn btn-outline-warning btn-lg mx-auto d-block" >RESERVE</button>


                                                </form>



                                                </div>


                                            </div>
                                        
                                </section> -->

                                <!----------------------------------- end of online reservation -->

                                <!-- menu code is in the info.php -->

          <!-- end of menu -->
            
                       
        <hr class="my-4 bg-dark"> 

        <!-- cart system menu -->
        <!-- <h1>Food Menu</h1>

    <div class="menu">
        <-- Veg 
        <div class="menu-item">
            <h2>Spring Rolls</h2>
            <p class="category">Veg</p>
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
            <p class="category">Veg</p>
            <p>Price: $8.99</p>
            <div class="add-to-cart" data-name="Caprese Salad" data-price="8.99">
                <button class="minus">-</button>
                <span class="quantity">0</span>
                <button class="plus">+</button>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
        </div>

        <-- Non-Veg --
        <div class="menu-item">
            <h2>Chicken Alfredo</h2>
            <p class="category">Non-Veg</p>
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
            <p class="category">Non-Veg</p>
            <p>Price: $11.99</p>
            <div class="add-to-cart" data-name="Beef Burger" data-price="11.99">
                <button class="minus">-</button>
                <span class="quantity">0</span>
                <button class="plus">+</button>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
        </div>

        <-- Drinks --
        <div class="menu-item">
            <h2>Cola</h2>
            <p class="category">Drinks</p>
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
            <p class="category">Drinks</p>
            <p>Price: $3.99</p>
            <div class="add-to-cart" data-name="Orange Juice" data-price="3.99">
                <button class="minus">-</button>
                <span class="quantity">0</span>
                <button class="plus">+</button>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="cart-container">
        <h2>Cart</h2>
        <ul id="cart"></ul>
        <p class="total">Total: $<span id="total">0</span></p>
        <button class="buy-button" style="display: none">Buy</button>
    </div>

    <script>
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
            buyButton.addEventListener('click', () => {
        if (cartItems.length > 0) {
            // Simulate a purchase by showing an alert message
            const totalAmount = parseFloat(total.textContent);
            alert(`Total amount: $${totalAmount}\nThank you for your purchase!`);
            
            // Reset the cart and hide the "Buy" button
            cartItems = [];
            updateCart();
        }
    });

            total.textContent = cartTotal.toFixed(2);

            if (cartItems.length > 0) {
                buyButton.style.display = 'block';
            } else {
                buyButton.style.display = 'none';
            }
        }
    </script> -->

    <!-- end of cart -->




    <!----------------------------------------------------------- second cart type it is main ----------------------------------------------------------->
    <!-- <h4 class="text-center text-success">Order Now</h1>
        <p class="text-center">Order your food items before your Scheduled Event !!</p>
    <div class="menu">
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

    <div class="cart-container">
        <h2>Cart</h2>
        <ul id="cart"></ul>
        <p class="total">Total: $<span id="total">0</span></p>
        <button class="buy-button" style="display: none">Buy</button>
    </div>

    <script>
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

-->

        


                                <!---------------------------------Flickity 2 Section------------>


                                <h4 class="text-center text-danger font-weight-bold font-italic mt-5">About us</h4>
                                <div class="container padding p-5 bg-light" id="about">
                                    <div class="row">
                                        <div class="col-lg-8 col-sm-12 col-md-10 text-center mx-auto">
                                                <div class="carousel" >
                                                        <div class="carousel-cellx">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                                                                        <img src="food1.jpg" alt="img" class="img-fluid rounded-circle ">
                
                                                                    </div>
                                                                    <div class="col-md-10 col-lg-8 col-sm-12 mt-4" >
                                                                        <p  class="lead text-left"><strong class="font-weight-bold">By David:</strong>
                                                                        
                                                                            "I've been planning corporate events for years, and this website has become my go-to platform. It offers an impressive selection of venues, and the booking process is seamless. What sets it apart is the support from their customer service team. Whenever I had a question or needed assistance, 
                                                                            their team was quick to respond and incredibly helpful. It's clear that they value their customers. This website has made my event planning tasks so much smoother."</p>
                                                                            
                                                                             <footer >
                                                                                 <p class="text-right"> --David</p>
                                                                                </footer>
                                                                            
                                                                            
                                                                            </p>
                
                                                                </div>
                
                                                            </div>
                
                                                        </div></div>
                                                        <div class="carousel-cellx">


                                                                <div class="container">
                                                                        <div class="row">
                                                                        
                        
                                                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                                                            <img src="food2.jpg" alt="img" class="img-fluid rounded-circle ">
                    
                                                                        </div>
                                                                            <div class="col-md-10 col-lg-8 col-sm-12 mt-4" >
                                                                                <p class="lead text-left"><strong class="font-weight-bold">By Sarah:</strong>
                                                                                    
                                                                                    "I've used many hotel and event booking websites in the past, but this one stands out. It's incredibly
                                                                                     user-friendly, making it a breeze to find and book the perfect accommodation and events for my trips. The search filters are comprehensive, and the site's layout is clean and intuitive. Plus, the discounts and deals I've found here have saved me a lot of money. I'll definitely continue using this website for all my future travel and event planning needs."</p>
                                                                                
                                                                                     <footer>
                                                                                         
                                                                                       <p class="text-right">--Sarah</p> 

                                                                                     </footer>
                                                                                    
                                                                                    
                                                                                    </p>
                    
                                                                        </div>
                                                                       
                        
                                                                    </div>
                                                                </div>


                
                                                        </div>
                                                        <div class="carousel-cellx">

                                                                <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-12 ">
                                                                                <img src="food3.jpg" alt="img" class="img-fluid rounded-circle ">
                        
                                                                            </div>
                                                                            <div class="col-md-10 col-lg-8 col-sm-12 mt-4" >
                                                                                <p  class="lead text-left"><strong class="font-weight-bold">By Lisa:</strong>
                                                                                    "I recently used this hotel and event booking website to plan my dream vacation, and I couldn't be happier with the experience. Not only did I find a fantastic hotel with great reviews, but the events and activities section helped me discover some hidden gems I wouldn't have found elsewhere. The website's detailed descriptions, high-quality photos,
                                                                                     and real customer reviews gave me confidence in my choices. Thanks to this platform, my vacation exceeded all expectations!"</p>
                                                                                   
                                                                                     <footer>
                                                                                         
                                                                               <p class="text-right"> --Lisa</p>        
                                                                                    
                                                                                    </footer>
                                                                                    
                                                                                    
                                                                                    </p>
                        
                                                                            </div>
                        
                                                                            
                        
                                                                        </div>
                                                                        
                        
                                                                    </div>
                
                                                        </div>
                                                
                
                                                </div>

                                        </div>

                                    </div>
                                </div>
                                
                                

                                

                            </div> 
                            <hr class="my-4 bg-dark">

                            <!---------------------------------------Evente Section==========---------------------------->

                            
                                <!-- <div class="container padding" id="events">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h3>Upcoming events</h3>
                                            <p>Commodi rem veritatis quis eaque mollitia.</p>

                                

                                        </div>

                                    </div>

                                </div>



                                <div class="event-img">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-9 col-sm-text-center">
                                                <div class="event-img-title mt-4 text-justify">

                                                        <span  class="text-warning font-weight-bold"> SEPTEMBER 30, 2017</span>
                                                        <h3 class="text-dark font-weight-bold mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptas, aut ea quae!</h3>
                                                        <p class="text-dark font-weight-bold mt-4">Alias earum, labore doloremque iusto a modi et, dolorem veritatis iste quis ab. Facere est optio, voluptate molestias aspernatur impedit perferendis odit?</p>



                                                </div>
                                                
                                            </div>

                                        </div>

                                    </div>



                                </div> -->

                                <!---------------------------News Letter Section-------------------->


                                <div class="news padding" id="newsletter">

                                    <div class="container">
                                        <div class="row text-center">
                                            <div class="col-12 ">
                                                <div class="news-title">
                                                    <h3>Newsletter</h3>
                                                    <p>Connect with us for exciting deals and offer updates and much more..</p>
                                                

                                                </div>

                                            </div>

                                            <!-- <div class="col-md-2 text-center col-sm-12"> -->
                                                    


                                                </div>


<form onsubmit="return news()">
                                            <div class="col-md-6 text-center col-sm-12 mx-auto">
                                                <div class="news-form d-flex text-center ">
                                                    <input type="email" name="e" id="e" class="form-control m-3" placeholder="E-mail" required>
                                                    <!-- <a href="#" class="btn btn-outline-warning ml-2" id="subscribe"><b>Subscribe</b></a> -->
                                                    <!-- <button  type="submit"  class="btn btn-outline-warning btn-lg mx-auto d-block " >Subscribe</button> -->

                                                </div>
                                                <button  type="submit"  class="btn btn-outline-warning btn-lg mx-auto d-block " >Subscribe</button>


                                            </div>
</form>

                                            
                                            <!-- <div class="col-md-4 col-sm-12"> -->

                                                </div>


                                        </div>

                                    </div>


                                </div>
                                <script>
                                function news(){
                                    var email = document.getElementById("e").value;
                                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                    if (!emailRegex.test(email)) {
                                      alert("Please enter a valid email address");
                                      return false;
                                    }
                                
                                    alert("Thank you for connecting with us!!")
                                    return true;
                                }
                                </script>




                                <!-------------------------------------Our Gallery Section----------------->


                                <hr class="my-4 bg-dark">

                               <div class="gallery padding" id="gallery">

                                <div class="container" id="gallery">

                                    <div class="row mb-4 ">
                                        <div class="col-12 gallery-top">
                                            <div class="gallery-title text-center">
                                                <h3>Our Gallery</h3>
                                                <p>Here are some memories that we have organized till now.. </p>

                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-lg-4 col-md-6 col-12">
                                        <img src="food2.jpg" alt="" class="img-fluid mb-2">
                                            <img src="food1.jpg" alt="" class="img-fluid mb-2">
                                          <img src="food3.jpg" alt="" class="img-fluid mb-2" >

                                           
            

                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-6 col-12">
                                             <img src="food3.jpg" alt="" class="img-fluid mb-2">
                                             <img src="food2.jpg" alt="" class="img-fluid mb-2">
                                              <img src="food1.jpg" alt="" class="img-fluid mb-2" >
 
                                            
             
 
                                         </div>
                                         <div class="col-sm-12 col-lg-4 col-md-6 col-12 ">
                                             <img src="food2.jpg" alt="" class="img-fluid mb-2">
                                             <img src="food1.jpg" alt="" class="img-fluid mb-2">
                                              <img src="food3.jpg" alt="" class="img-fluid mb-2" >
 
                                            
             
 
                                         </div>
                                        
                                        </div>

                        




                                    </div>

                                </div>

                               </div>
               <!------------------------------End GAllery Section----------->





                               <!--------------------MAp Section----------------->
                               <hr class="my-4 bg-dark">


                               <div class="map" style="width:100%;">

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.439920026814!2d91.8862122528944!3d24.88488345175586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751ab3685a934c1%3A0x209742c05ad193b8!2sBangladesh+Bank+School!5e0!3m2!1sen!2shk!4v1555516427328!5m2!1sen!2shk" 
                                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                               </div>
                        <!-----------------------Footer Section----------->


                               <footer class="below" >

                                <div class="container " id="contact">
                                    <div class="row">
                                        <div class="col-sm-4 my-4 col-xs-12">
                                            <div class="footer-about">
                                                <p class="text-warning "> 
                                            About us</p>


                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                                Corrupti dolorum, sint corporis nostrum, 
                                                possimus unde eos vitae eius quasi saepe</p>

                                                <p>_____&copy;2019 Touché. All rights reserved.</p>

                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-4 col-xs-12">


                                            <div class="footer-contact">

                                                    <p class="text-warning "> 
                                                            Contact us</p>
                                                            <i class="fa-solid fa-envelope fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; --fa-bounce-rebound: 0;" ></i>


                                                <p><i class="fas fa-map-marker"></i> 1234 Altschul, New York, NY 10027-0000</p>
                                                <p> <i class="fas fa-phone-volume"></i>   +1 987 654 3210</p>
                                                <p> <i class="fas fa-envelope"></i>  admin@domain.com</p>



                                            </div>

                                            </div>


                                            <div class="col-sm-4 my-4 col-xs-12">

                                                <div class="footer-hours">

                                                        <p class="text-warning">OPENING HOURS</p>
                                                        <p>MONDAY - THURSDAY</p>
                                                        <p>10:00 AM - 11:00 PM</p>
                                                        <p>FRIDAY - SUNDAY</p>
                                                        <p>12:00 AM - 03:00 AM</p>
        

                                                </div>

                                                
                                                </div>
                                    </div>

                                </div>


                               </footer>
                               <p class="text-center">&copy;2023-2024 Copyrighted by Abhishek.Inc</p> <!--copyrighted symbol-->

<!---------------------------------------------------JQuery For FLickity---------------->

                                <!-- <script>

                                    $(document).ready(function(){

                                        $('.carousel').flickity({ // options
                                        cellAlign: 'left',
                                        wrapAround: true,
                                        pageDots: false,
                                        autoPlay: true,
                                        
                                        });
                                    })
                                

                                    $(document).ready(function(){
                                        $('.carousely').flickity({ // options
                                        cellAlign: 'left',
                                        wrapAround: true,
                                        pageDots: true,
                                        
});

})

                                </script>






<------------------------Light BOx OPtions-------------
<script>
        lightbox.option({
          'resizeDuration': 100,
          'wrapAround': true,
          'alwaysShowNavOnTouchDevices': true
        })
    </script>
 -->


<!------------------------Light BOx OPtions------------->

</body>
</html>
