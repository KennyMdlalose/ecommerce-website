<?php
//  order tracking system 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? 'Unknown';
    $total = $_POST['total'] ?? 0;

    // order status and delivery progress
    $order_status ="Ordered"; // statuses: Ordered, Processed, Shipped, Out for Delivery, Delivered
    $delivery_days_left = 3;

    //  progress percentage 
    $progress = 0;
    switch ($order_status) {
        case "Ordered":
            $progress = 20;
            break;
        case "Processed":
            $progress = 40;
            break;
        case "Shipped":
            $progress = 60;
            break;
        case "Out for Delivery":
            $progress = 80;
            break;
        case "Delivered":
            $progress = 100;
            break;
    }

    // confirmation and tracking
    echo"<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta charset='UTF-8>
        <meta name='viewport' content='width=device-width,initial-scale=1.0'>
  <link rel='stylesheet' href='style.css'>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap' rel='stylesheet'>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <title>Contact - HERD CARE</title>
        <link rel='icon' href='Images/logo.png'>
    <title>Payment Details</title>
    <style>
  
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-color: white;
      
    }
    .container {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: inline-block;
        margin-top: 50px;
        width:800px;
        height:300px;
    }
    h2 {
        color: #4CAF50;
    }

     .progress-container {
            background-color: #e0e0e0;
            border-radius: 25px;
            margin: 20px 0;
            overflow: hidden;
            width: 100%;
            height: 25px;
        }
        .progress-bar {
            background-color: #4CAF50;
            height: 100%;
            width: $progress%;
            text-align: center;
            line-height: 25px;
            color: white;
            font-weight: bold;
        }
        .status {
            margin: 10px 0;
            font-size: 18px;
        }
        .days-left {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }
   
</style>

</head>
<body >
<section style='background-color:white;margin-bottom:100px;'>
<div class='header'>
        <div class='header-home'>
        <div >
            <div class='navbar'>
                <div class='logo'>
                    <a href='index2.php'><img src='Images/logo.png' width='100px'></a>
                </div>  
            <nav>
                <ul id='MenuItems'>
                    <li class='breadcrumbs-item'><a href='index2.php' class='breadcrumbs-link'>Home</a></li>
                    <li class='breadcrumbs-item'><a href='Product2.php' class='breadcrumbs-link'>Products</a></li>
                    <li class='breadcrumbs-item'><a href='Contact2.php' class='breadcrumbs-link'>Contact Us</a></li>
                    <li class='breadcrumbs-item'><a href='About2.php' class='breadcrumbs-link'>About Us</a></li>
                    <li class='breadcrumbs-item'><a href='Account.php' class='breadcrumbs-link'>LogOut</a></li>
                </ul>
            </nav> 
            <a href='Cart.php'><img src='Images/Septy.png' width='30px' height='25px'></a>
            <img src='Images/Menu.png' class='menu-icon' height='100px' onclick='menutoggle()'>
        </div> 
    </div>
</div>

</section>
<section style='background-color:white;margin-bottom:100px;margin-top:100px;'>
   <div class='container'>
        <h2>Order Tracking</h2>
        <p>Your total is <strong>R$total</strong>.</p>
        <p>We will send updates to <strong>$email</strong>.</p>

        <div class='progress-container'>
            <div class='progress-bar' style='width: {$progress}%'>
                {$progress}%
            </div>
        </div>
        <p class='status'><strong>Current Status:</strong> $order_status</p>
        <p class='days-left'>Estimated Delivery: <strong>$delivery_days_left days</strong></p>

        <div style='text-decoration: underline;margin-top:50px;'>
        <a href='index2.php' >Return to Home</a>
        </div>
    </div>
</section>

 <section style='background-color:white;'>
     
<div class='footer' style='background: radial-gradient(#fff,#72c6f7);padding-top:-100px;'>
    <div >
        <div class='row' >
            <div class='footer-col-1' style='margin-top:30px ;' >
                <h3>Download Our App</h3>
            <p>Download App for Android and IOS Mobile Phone</p>
            <div class='app-logo'>
                <img src='Images/gogogoolePlay.png'>
                <img src='Images/StoryApp.svg'>
            </div>    
            </div>
            <div class='footer-col-2'>
        <h3>Address</h3>
            <p>
             Cnr of Ascot and Newmarket Roads,<br>
              Alberton,<br>
              Gauteng,<br> South Africa
            </p>    
            </div>
            <div class='footer-col-3'>
                <h3>Useful Links</h3>
         <ul>
            <li>Gift Card</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
         </ul>
            </div>
            <div class='footer-col-4'>
                <h3>Follow us</h3>
         <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
         </ul>
            </div>
        </div>

    <div class='row-contact' >
            <div class='col-2-contact' >
            
                <li style='margin-left:500px;'>
                    <i class='fa fa-phone'> </i>
                    <p>(011)65 305 0492</p>
                </li>
              
             </div>
            </div>
        <hr>
        <p class='copyright'>Copyright 2024 - HERD CARE</p>
    </div>
</div>
 </section>

</body>
</html>";
}
?>