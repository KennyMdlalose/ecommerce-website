<?php
session_start();
require('database.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>HERD CARE | ECOMMERCE</title>
        <link rel="icon" href="Images/logo.png">
    </head>

    <style>
         .chatbot-icon {
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background-color: #007bff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
                z-index: 1000;
            }

            .chatbot-icon i {
                color: #fff;
                font-size: 24px;
            }

            .chatbot-icon:hover {
                background-color: #0056b3;
            }
    </style>
<body>
    
    
<a href="http://127.0.0.1:5000" class="chatbot-icon">
        <i class="fa fa-comments"></i>
    </a>
    
    <div class="header">
        <div class="header-home">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index2.php"><img src="Images/logo.png" width="100px"></a>
                </div>  
            <nav>
                <ul id="MenuItems">
                    <li class="breadcrumbs-item"><a href="index2.php" class="breadcrumbs-link">Home</a></li>
                    <li class="breadcrumbs-item"><a href="Product1.php" class="breadcrumbs-link">Products</a></li>
                    <li class="breadcrumbs-item"><a href="Contact2.php" class="breadcrumbs-link">Contact Us</a></li>
                    <li class="breadcrumbs-item"><a href="About2.php" class="breadcrumbs-link">About Us</a></li>
                    <li class="breadcrumbs-item"><a href="Account.php" class="breadcrumbs-link">LogOut</a></li>
                </ul>
            </nav> 
            <a href="Cart.php"><img src="Images/Septy.png" width="30px" height="25px"></a>
            <img src="Images/Menu.png" class="menu-icon" height="100px" onclick="menutoggle()">
        </div> 
    </div>
</div>

        <div class="row">
            <div class="col-2">
                <h1 style="margin-left: 50px;">Enhance Your Health Routine!</h1> <p style="margin-left: 50px;">Achieving wellness isn't just about big changes; it's about consistency. Regular use of the right medication can lead to better health outcomes. Stick to your regimen, and results will follow.</p>
                <a style="margin-left: 50px;" href="Product2.php" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img style="border-top-left-radius: 20%;border-bottom-right-radius: 20%;margin-left:100px;height:350px; " src="Images/service.jpeg">
            </div>
            </div>
        </div>

   <!--Featured Categoris-->

<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="Images/airmune.png">
            </div>
            <div class="col-3">
                <img src="Images/calvit500.png">
            </div>
            <div class="col-3">
                <img src="Images/disposerx.jpeg">
            </div>
    </div>
    </div>
</div>

<!--Featured Product-->
 
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <a href="proDuct_details.php"><img src="Images/de_witt's.png" ></a>
            <a href="ProDuct_details.php"></a><h4>De Witt's</h4></a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p>R50.00</p>
        </div>
        <div class="col-4">
            <a href="NikeShoesProduct-details2.php"> <img src="Images/lexan.png" ></a>
           <a href="NikeShoesProduct-details2.php"> <h4>Lexan</h4></a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p>R23.33</p>
        </div>
        <div class="col-4">
            <a href="OpenLeftGirl2.php"> <img src="Images/sinoxit.png" ></a>
           <a href="OpenLeftGirl2.php"> <h4>Sinoxit</h4> </a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
            </div>
            <p>R69.87</p>
        </div>
        <div class="col-4">
            <a href="HommeRouge2.php"><img src="Images/stress_away.png" ></a>
            <a href="HommeRouge2.php"><h4>Stress Away</h4></a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p>R19.33</p>
        </div>
    </div>
    
    <h2 class="title">Lastest Products</h2>
    <div class="row">
        <div class="col-4">
            <a href="Couple2.php"><img src="Images/equazen.png" ></a>
            <a href="Couple2.php"><h4>Equazen</h4></a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p>R50.00</p>
        </div>
        <div class="col-4">
           <a href="CutyGirl2.php"> <img src="Images/dynadol.png" ></a>
            <a href="CutyGirl2.php"><h4>Dynadol</h4></a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
            </div>
            <p>R25.99</p>
        </div>
        <div class="col-4">
           <a href="Chaussette2.php"> <img src="Images/disprin.webp" ></a>
           <a href="Chaussette2.php"><h4>Disprin</h4> </a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
                <i class="fa fa-star" ></i>
            </div>
            <p>R17.87</p>
        </div>
        <div class="col-4">
            <a href="ClassicWatch2.php"><img src="Images/disprineB.png" ></a>
           <a href="ClassicWatch2.php"> <h4>Disprine</h4></a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p>R74.34</p>
        </div>
        <div class="row">
            <div class="col-4">
               <a href="BlancShoes2.php"><img src="Images/inflamed.png" ></a> 
              <a href="BlancShoes2.php"> <h4>Inflamed</h4> </a>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>R63.23</p>
            </div>
            <div class="col-4">
                <a href="BlancShoes2.php"><img src="Images/kiddia.png" > </a>
                <a href="BlancShoes2.php"><h4>Kiddie forte</h4> </a>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>R100.00</p>
            </div>
            <div class="col-4">
               <a href="Alfanso2.php"> <img src="Images/neutracid.png" > </a>
              <a href="Alfanso2.php"> <h4>Neutracid</h4> </a>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                </div>
                <p>R82.89</p>
            </div>
            <div class="col-4">
                <a href="SchoolGirl2.php"><img src="Images/male_enlargement.png" ></a>
              <a href="SchoolGirl2.php"> <h4>Male Enlargement</h4></a>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>R29.99</p>
            </div>
</div>
</div>
</div>

<!--offer-->

<div class="offer">
    <div class="small-container">
        <div class="row">
        <div class="col-2">
        <img src="Images/glootT.jpeg" class="offer-img">
        </div>
       
        <div class="col-2">
             <p>Exclusively Available On HERD CARE</p>
             <h1>Gloot Tummy Toner</h1>
             <small>
             The Gloot Flat Tummy Toner is a supplement aimed at reducing belly fat by controlling appetite.
              It is taken three times daily, with each major meal, to help lower calorie intake. For optimal results,
               it should be used consistently, accompanied by a balanced diet, regular exercise (cardio, strength training,
                and flexibility workouts), and adequate hydration. Maintaining healthy lifestyle habits, such as stress management,
                 proper sleep, and avoiding processed foods, further enhances its effectivenes
                </small>
                <br>
                <input type="number" id="product-quantity" value="1">
           <button class="btn" onclick="addToCart('Gloot Tummy Toner', 209.99)">BUY NOW</button>

    
        </div>
        </div>

    </div>
</div>

<!---- Testimonial ---->

<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left" ></i>
             <p>
             Hello! Since the beginning of my journey in the pharmaceutical industry, HERD CARE Pharmacy has been a trusted partner in my health and well-being. Their dedication to quality, accessibility, and compassionate care has been a constant support, inspiring me to pursue excellence in my field. HERD CARE Pharmacy isn’t just a pharmacy—it’s a source of trust and inspiration, shaping healthier futures for everyone they serve.   </p>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <img src="Images/patient.jpeg">
            <h3>Charles Pritchard</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left" ></i>
             <p> 
                I view the owner of HERD CARE as my mentor. At HERD CARE, medication prices are lower than anywhere else, especially in South Africa. We need more dedicated entrepreneurs like him in our country to ensure accessible healthcare for all.
            </p>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
            </div>
            <img src="Images/doc1.jpg">
            <h3>Dr. Thakgalo Thibela</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left" ></i>
             <p> 
                My colleague, Dr. Thakgalo Thibela, and I worked closely on a major healthcare project. I admire his mindset and his ambition to revolutionize the pharmaceutical industry, aiming to build a significant impact in advancing medical care and accessibility. 
            </p>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <img src="Images/doctors.jpg">
            <h3>Dumisani Madonsela</h3>
            </div>
        </div>
    </div>
</div>

<!----Brands------>
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="Images/visa.JPG">
            </div>
            <div class="col-5">
                <img src="Images/googlepay.JPG">
            </div>
            <div class="col-5">
                <img src="Images/paypal.png">
            </div>
            <div class="col-5">
                <img src="Images/mastercard.JPG">
            </div>
            <div class="col-5">
                <img src="Images/applepay.JPG">
            </div>
        </div>
    </div>
</div>


<!------footer------->


<div class="footer" style="background: radial-gradient(#fff,#72c6f7);">
    <div class="container"  >
        <div class="row" >
            <div class="footer-col-1" style="margin-top:30px ;" >
                <h3>Download Our App</h3>
            <p>Download App for Android and IOS Mobile Phone</p>
            <div class="app-logo">
                <img src="Images/gogogoolePlay.png">
                <img src="Images/StoryApp.svg">
            </div>    
            </div>
            <div class="footer-col-2">
        <h3>Address</h3>
            <p>
             Cnr of Ascot and Newmarket Roads,<br>
              Alberton,<br>
              Gauteng,<br> South Africa
            </p>    
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
         <ul>
            <li>Gift Card</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
         </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
         <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
         </ul>
            </div>
        </div>

    <div class="row-contact" >
            <div class="col-2-contact" >
            
                <li style="margin-left:500px;">
                    <i class="fa fa-phone"> </i>
                    <p>(011)65 305 0492</p>
                </li>
              
             </div>
            </div>
        <hr>
        <p class="copyright">Copyright 2024 - HERD CARE</p>
    </div>
</div>

<!-------JavaScript for Toggle Menu------->

<script>

var MenuItems=document.getElementById("MenuItems");

MenuItems.style.maxHeight= "0px";

function menutoggle(){
    if(MenuItems.style.maxHeight == "0px")
    {
        MenuItems.style.maxHeight= "200px"
    }
    else
    {
        MenuItems.style.maxHeight= "0px"
    }
}
</script>

<!-----------JavaScript for Product Gallery  ------------->

<script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight= "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }

        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function() {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function() {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function() {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function() {
            ProductImg.src = SmallImg[3].src;
        }

        // Function to add product to cart and store in localStorage
function addToCart(productName, productPrice) {
    var quantity = document.getElementById("product-quantity").value;
    var product = {
        name: productName,
        price: productPrice,
        quantity: quantity,
        totalPrice: productPrice * quantity
    };

    // Retrieve cart data from localStorage (if any)
    var cart = localStorage.getItem("cart");
    if (cart) {
        cart = JSON.parse(cart);
    } else {
        cart = [];
    }

    // Add new product to the cart
    cart.push(product);

    // Store updated cart data back in localStorage
    localStorage.setItem("cart", JSON.stringify(cart));

    alert(productName + " added to cart!\nQuantity: " + quantity + "\nTotal Price: R" + product.totalPrice.toFixed(2));
}
    </script>

</body>
</html>


    </body>
</html>