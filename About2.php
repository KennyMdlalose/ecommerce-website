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
        <title>Contact - HERD CARE</title>
        <link rel="icon" href="Images/logo.png">
    </head>
    <style>
         h1{
        text-align: center;
      padding-top:20px ;
   
    }

    </style>
    <body>
      
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
                    <li class="breadcrumbs-item"><a href="Product2.php" class="breadcrumbs-link">Products</a></li>
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
      
   

    <section id="about" style="background-color:white;">
        <h1>About Us</h1>
       
        <div class="about-section">
            <h2>Who We Are</h2>
              <p>Herd Care Pharmacy is an online healthcare provider committed to bringing high-quality, affordable medications and healthcare products directly to you. Our team of dedicated professionals prioritizes your health, focusing on accessibility, reliability, and outstanding service.</p>
            <img src="images/us.jpg" alt="Our Team" class="about-image" style="margin-top:-100px;padding-bottom:50px;">
          
        </div>

     
        <div class="about-section">
            <h2>What We Do</h2>
            <p>Our pharmacy offers a wide selection of medications, health supplements, and wellness products. We are dedicated to making healthcare easy and accessible by delivering orders quickly, securely, and directly to your doorstep.</p>
            <img src="images/whatwedo.jpeg" alt="Pharmacy Services" class="about-image" style="margin-top:-100px;padding-bottom:50px;">
           
        </div>

  
        <div class="about-section" style="margin-left:-600px;">
            <h2>Our Mission</h2>
            <p>At Herd Care Pharmacy, our mission is to provide everyone with access to trusted healthcare products, enhancing well-being for all. We aim to be your preferred partner in health by offering comprehensive pharmaceutical services that prioritize patient care and community impact.</p>
        </div>

   
        <div class="about-section" style="margin-top:100px;">
            <h2>Milestones</h2>
            <ul>
                <li><strong>2020:</strong> Launched our online pharmacy platform, making healthcare more accessible.</li>
                <li><strong>2021:</strong> Expanded product range to include specialized healthcare products and supplements.</li>
                <li><strong>2022:</strong> Partnered with local clinics and hospitals to improve medication delivery.</li>
                <li><strong>2023:</strong> Achieved 100,000 satisfied customers nationwide.</li>
            </ul>
            <img src="images/milestone.jpeg" alt="Company Milestones" class="about-image"  style="margin-top:-100px;padding-bottom:50px;">
           
        </div>


        <div class="about-section">
            <h2>Why Choose Us?</h2>
            <ul>
                <li><strong>Wide Selection:</strong> A vast range of prescription and OTC medicines.</li>
                <li><strong>Affordable Prices:</strong> Competitive pricing to help you save on essential items.</li>
                <li><strong>Quality Assurance:</strong> Sourced from reputable manufacturers.</li>
                <li><strong>Fast Delivery:</strong> Reliable services to get your products to you on time.</li>
                <li><strong>Customer Support:</strong> Friendly, accessible team to address your needs.</li>
            </ul>
            <img src="images/quality.jpeg" alt="Quality and Service" class="about-image"  style="margin-top:-100px;padding-bottom:50px;">

        </div>


     
        <!------footer------->

   
<div class="footer" style="background: radial-gradient(#fff,#72c6f7);padding-top:-100px;">
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

<!-------- Script for breadcrumbs ----------->

<script>

var Breacrumb=document.getElementById("Breadcrumb-Contact");
var bb=document.getElementsByClassName("breadcrumbs-link--active");

function breadColor()
{
    Breacrumb.style.color= "blue";
    bb.style.color ="blue;"

}



</script>
        
    </body>
</html>