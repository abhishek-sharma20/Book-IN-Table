<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
         body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
        }

        .filter {
            background-color: #6c757d;
            color: white;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;

        }

        .filter label {
            margin-right: 10px;
            font-weight: bold;
        }

        #cityFilter,
        #priceRange {
            margin-right: 20px;
        }

        #noResult {
            display: none;
            color: red;
            margin-top: 10px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            background-color: rgb(251, 170, 237);
            padding: 10px;
            border-radius: 8px;
            margin: 10px;
            width: 250px;
        }

        .image {
            max-width: 100%;
            border-radius: 8px;
        }

        .title {
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .reviws {
            font-weight: bold;
        }

        .discription {
            margin-top: 5px;
        }
        .image{
            max-width:100%
        }
        .row{
            justify-content: space-between;
        }
        .discription:hover{
            cursor: pointer;
        }
        .reviws:hover{
            cursor: pointer;
        }
        .title:hover{
            cursor: pointer;
            text-decoration: underline;

        }
        a{
            color: black;
        }
        a:hover{
            text-decoration: none;
            color: black;
        }
        .card{
            background-color: rgb(251, 170, 237);
            padding: 0px;
            border-radius: 8px;
        }
        img{
            border-radius: 8px;
        }
        #noResult {
            display:none;
            color: red;
            margin-top: 10px;
            text-align: center;
            font-size: larger;
        }

        #home-btn{
            float: right;
            margin-right: 40px;
            border-radius: 8px;
            font-weight:bolder;
            
        }
        #home-btn:hover{
            opacity: 0.95;
        }
        #logout-btn{
            float: right;
            margin-right: 40px;
            border-radius: 8px;
            font-weight:bolder;
            

        }

    </style>
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
    <div class="filter">
    <label for="cityFilter">Select City:
    <select id="cityFilter">
        <option value="all">All Cities</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Banglore">Banglore</option>
        <option value="Chennai">Chennai</option>
        <option value="Mumbai">Mumbai</option>
        <!-- Add more cities as needed -->
    </select>
    </label>

    <label id="price" for="priceRange">Price Range:
    <input type="range" id="priceRange" min="100" max="2000" step="100" value="700">
    <span id="priceValue">1000</span></label>
    <button id="home-btn"><a href="index2.php">HOME</a></button>
    <button id="logout-btn"><a href="logout.php" >Log Out</button>

</div>

<div id="noResult">No results found!!</div>


<!-- <p id="result" style="text-decoration: solid;font-size: larger;text-align: center;"></p> -->


    <div class="row m-5">
    <div class="card col-lg-3 mx-auto col-md-7 col-sm-11">
    <a href="info.php">
<img src="food1.jpg" alt="1" class="image mx-auto" >
        <div class="container ">
        <div class="row ">
        <div class="title "><b>Shree ram caters</b>
        </div>
        <div class="reviws">Reviews:4.8⭐</div>
        </div>
        <div class="row">
            <div class="discription">Jaipur</div>
            <span>Veg:<div class="veg">600rs</div></span><span>Nonveg:<div class="nonveg">850rs</div></span>
        </div>
        <div class="row">
                <div class="discription">max:2000 and min:100
        </div>
    </div></a>
</div>
</div>
<div class="card col-lg-3 mx-auto col-md-7 col-sm-11">
<a href="info2.php">
<img src="food1.jpg" alt="1" class="image mx-auto" >

        <div class="container ">

        <div class="row ">
        <div class=" title "><b>Royal Indian Catering
        </b>
        </div>
        <div class="reviws">Reviews:5⭐</div>
        </div>
        <div class="row">
            <div class="discription">Banglore</div>
            <span>Veg:<div class="veg">500rs</div></span><span>Nonveg:<div class="nonveg">950rs</div></span>
        </div>
        <div class="row">
                <div class="discription">max:2000 and min:100</div>
        </div>
        </div>
    </div></a>
    <div class="card col-lg-3 mx-auto col-md-7 col-sm-11">
    <a href="info.php">
<img src="food1.jpg" alt="1" class="image mx-auto" >

        <div class="container ">

        <div class="row ">

        <div class="title  "><b>Taj Caterers</b>
        </div>
        <div class="reviws">Reviews:3.8⭐</div>
        </div>
        <div class="row">
            <div class="discription">Chennai</div>
            <span>Veg: <div class="veg">400rs</div></span><span>Nonveg:<div class="nonveg"> 700rs</Nonveg:500rs></div></span>
        </div>
        <div class="row">
                <div class="discription">max:2000 and min:100
        </div>
        </div>
    </div>
    </div>
    </div></a>

    <div class="row m-5">
        <div class="card col-lg-3 mx-auto col-md-7 col-sm-11">
        <a href="info.php">
<img src="food1.jpg" alt="1" class="image mx-auto" >

            <div class="container ">
            <div class="row ">
            <div class="title  "><b>Spice of India Catering
            </b>
            </div>
            <div class="reviws">Reviews:3.5⭐</div>
            </div>
            <div class="row">
                <div class="discription">Mumbai</div>
                <span>Veg:<div class="veg">600rs</div></span><span>Nonveg:<div class="nonveg">800rs</Nonveg:500rs></div></span>
            </div>
            <div class="row">
                    <div class="discription">max:2000 and min:100
            </div>
        </div>
    </div>
    </div></a>
    <div class="card col-lg-3 mx-auto col-md-7 col-sm-11">
    <a href="info.php">
<img src="food1.jpg" alt="1" class="image mx-auto" >

            <div class="container ">
    
            <div class="row ">
            <div class="title  "><b>Mughal Caterers</b>
            </div>
            <div class="reviws">Reviews:4.5⭐</div>
            </div>
            <div class="row">
                <div class="discription">Chennai</div>
                <span>Veg:<div class="veg">1000rs</div></span><span>Nonveg:<div class="nonveg"> 1300rs</Nonveg:500rs></div></span>
            </div>
            <div class="row">
                    <div class="discription">max:2000 and min:100
            </div>
            </div>
            </div>
        </div></a>
        <div class="card col-lg-3 mx-auto col-md-7 col-sm-11">
        <a href="info.php">
<img src="food1.jpg" alt="1" class="image mx-auto" >

            <div class="container ">

            <div class="row ">
    
            <div class="title  "><b>Namaste Catering Services</b>
            </div>
            <div class="reviws">Reviews:4.0⭐</div>
            </div>
            <div class="row">
                <div class="discription">Jaipur</div>
                <span>Veg:<div class="veg">500rs</div></span><span>Nonveg:<div class="nonveg"> 900rs</Nonveg:500rs></div></span>
            </div>
            <div class="row">
                    <div class="discription">max:2000 and min:100
            </div>
            </div>
        </div>
        </div>
        </div></a>
        <div class="row m-5">

        <div class="card col-lg-3 mx-auto col-md-7 col-sm-11">
        <a href="info.php">
<img src="food1.jpg" alt="1" class="image mx-auto" >

                <div class="container ">
                <div class="row ">
                <div class="title  "><b>Rajmahal Catering Company</b>
                </div>
                <div class="reviws">Reviews:4.8⭐</div>
                </div>
                <div class="row">
                    <div class="discription">Banglore</div>
                    <span>Veg: <div class="veg">700rs</div></span><span>Nonveg:<div class="nonveg"> 1000rs</Nonveg:500rs></div></span>
                </div>
                <div class="row">
                        <div class="discription">max:2000 and min:100
                </div>
            </div>
        </div>
        </div></a>
        <div class="card col-lg-3 mx-auto col-md-7 col-sm-11">
        <a href="info.php">
<img src="food1.jpg" alt="1" class="image mx-auto" >

                <div class="container ">
        
                <div class="row ">
                <div class="title  "><b>Chutney Caterers</b>
                </div>
                <div class="reviws">Reviews:3.0⭐</div>
                </div>
                <div class="row">
                    <div class="discription">Mumbai</div>
                    <span>Veg: <div class="veg">400rs</div></span><span>Nonveg:<div class="nonveg">800rs</Nonveg:500rs></div></span>
                </div>
                <div class="row">
                        <div class="discription">max:2000 and min:100
                </div>
                </div>
                </div>
            </div></a>
            <div class="card col-lg-3 mx-auto col-md-7 col-sm-11">
            <a href="info.php">
<img src="food1.jpg" alt="1" class="image mx-auto" >

                <div class="container ">

                <div class="row ">
        
                <div class="title  "><b>Curry House Catering</b>
                </div>
                <div class="reviws">Reviews:4.0⭐</div>
                </div>
                <div class="row">
                    <div class="discription">Jaipur</div>
                    <span>Veg: <div class="veg">1200rs</div></span><span>Nonveg:<div class="nonveg"> 1500rs</Nonveg:500rs></div></span>
                </div>
                <div class="row">
                        <div class="discription">max:2000 and min:100
                </div>
                </div>
            </div>
            </div>
            </div>
        </a>
        
            

    

            <script>
                 function result(){
                    document.getElementById("result").innerHTML="No result found"

                }
                // JavaScript for filtering cards
                const cityFilter = document.getElementById('cityFilter');
                const priceRange = document.getElementById('priceRange');
                const priceValue = document.getElementById('priceValue');
                const cardList = document.querySelectorAll('.card');
        
                // Event listeners for changes in filters
                cityFilter.addEventListener('change', filterCards);
                priceRange.addEventListener('input', updatePriceValue);
                priceRange.addEventListener('change', filterCards);
        
                function updatePriceValue() {
                    priceValue.textContent = priceRange.value;
                }
        
                function filterCards() {
                    const selectedCity = cityFilter.value;
                    const selectedPrice = parseInt(priceRange.value);
                    let anyCardDisplayed = false;

        
                    // Loop through cards and hide/show based on filters
                    cardList.forEach(card => {
                        const city = card.querySelector('.discription').textContent;
                        const VegPrice = parseInt(card.querySelector('.veg').textContent);
                        const NonvegPrice = parseInt(card.querySelector('.nonveg').textContent);
        
                        const cityMatch = selectedCity === 'all' || selectedCity === city;
                        const priceMatch = selectedPrice >= VegPrice && selectedPrice <= NonvegPrice;
        
                        // Show the card if both city and price match the selected filters, otherwise hide it
                        

                        if (cityMatch && priceMatch) {
                            card.style.display = 'block';
                            anyCardDisplayed = true;

                        } 
                        else {
                            card.style.display='none';
                            // result();
                        }
                    });

                    noResult.style.display = anyCardDisplayed ? 'none' : 'block';
                }
        
                // Initial filter to set the default price value
                updatePriceValue();
                filterCards();

               

            </script>
        

    
</body>
</html>