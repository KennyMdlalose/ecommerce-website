<?php

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
        <title>Account - HERD CARE</title>
        <link rel="icon" href="Images/logo.png">
    </head>
    <body>
        
        <div class="container">
            <div class="navbar">
                <div class="logo">
                  <a href="index.php"> <img src="Images/logo.png" width="100px"> </a> 
                </div>  
            <nav>
                <ul id="MenuItems">
            <li class="breadcrumbs-item"><a href="index.php" class="breadcrumbs-link">Home</a></li>
            <li class="breadcrumbs-item"><a href="product.php" class="breadcrumbs-link">Products</a></li>
            <li class="breadcrumbs-item"><a href="Contact.php" class="breadcrumbs-link">Contact Us</a></li>
            <li class="breadcrumbs-item"><a href="About.php" class="breadcrumbs-link">About Us</a></li>
            <li class="breadcrumbs-item"><a href="Account.php" class="breadcrumbs-link">Account</a></li>
                </ul>
            </nav> 
    
        </div> 
        </div >

<!------ Account - Page  ------>
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img style="border-radius: 15%;" src="Images/WelcomeGirl.jpg" width="100%">
            </div>
            <div class="col-2">

                <div class="form-container">
                       <div class="form-btn">

                        <span onclick="register()">ForgotPassword</span>
                        <hr id="Indicator">
                       </div>

                     
                       <form id="RegForm">
                  
                        <input type="email" placeholder="Email" id="email" name="email">
                     
                        <button  type="submit" class="btn">Submit</button> 
                        <a href="Account.php" style ="text-decoration:underline;">Login</a>
                       </form>
                </div>
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


<!------------- JavaScript for Toggle Form --------------->

<script>

   var LoginForm = document.getElementById("LoginForm");

   var RegForm =document.getElementById("RegForm");

   var Indicator =document.getElementById("Indicator")

    function register()
    {
        RegForm.style.transform="translateX(0px)";
        LoginForm.style.transform="translateX(0px)";
        Indicator.style.transform="translateX(100px)";
    }
    
    function login()
    {
        RegForm.style.transform="translateX(300px)";
        LoginForm.style.transform="translateX(300px)";
        Indicator.style.transform="translateX(0px)";
    }


</script>




    </body>
</html>