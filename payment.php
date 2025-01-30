<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .payment-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 14px;
            color: #666;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="checkbox"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        .payment-methods div {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .payment-methods label {
            font-size: 16px;
            margin-left: 10px;
            color: #333;
        }

        .payment-methods img.icon {
            margin-left: 10px;
            width: 40px;
        }

        .billing-address h3 {
            font-size: 18px;
            margin-top: 20px;
        }

        .billing-address div {
            margin-top: 10px;
        }

        .pay-btn {
            background-color: #90c03e;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        .pay-btn:hover {
            background-color: #7aa12e;
        }

        /* Details section for each payment method */
        .payment-details {
            display: none;
            margin-top: 20px;
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
        }

        .payment-details img {
            width: 50px;
            margin: 10px;
        }

        .payment-details p {
            color: #666;
        }

        /* Contact and Delivery Section */
        .section-title {
            font-size: 20px;
            margin-bottom: 15px;
            color: #333;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
        }

        .checkbox-label input[type="checkbox"] {
            margin-right: 10px;
        }


*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}

.logo img
{
    border-radius: 20%;
}

.footer-col-2 img
{
    border-radius: 30%;
}

body{
    font-family: 'Poppins', sans-serif;
}

body img
{
    border-radius: 10%;
}

.navbar{
    display:flex;
    align-items:center;
    padding: 20px;
}

nav{ 
    flex:1;
    text-align: right;
}

nav ul{
    display:inline-block;
    list-style-type: none;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
    padding-top:0px;
}
a{
    text-decoration: none;
    color: #555;
}
p{
    color: #555;
}
.container
{
    max-width:1300px;
    margin:auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    display:flex;
    align-items:center;
    flex-wrap: wrap;
    justify-content: space-around;
}


.col-2{
    flex: 50%;
    min-width:300px;
}
.col-2 img{
    max-width: 100%;
    padding: 50px 0;
}

.col-2 h1 {
font-size: 50px;
line-height:60px;
margin:25px 0px;
}

.btn{
    display:inline-block;
    background-color: #006eff;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius:30px;
    transition: background 0.5s;
}

.btn:hover{
    background: #563434;
}

.header{
    background: radial-gradient(#fff,#72c6f7);
}

/*----- Make the menu Stay on Place ----*/
.header-contact{
    background: radial-gradient(#fff,#72c6f7);
    position: sticky;
    top: 0;
}

.header-product{
    background: radial-gradient(#fff,#72c6f7);
    position: sticky;
    top: 0;
}

.header-home{
    background: radial-gradient(#fff,#72c6f7);
    position: sticky;
    top: 0;
}

.header-product-details{
    background: radial-gradient(#fff,#72c6f7);
    position: sticky;
    top: 0;
}

.header .row {
    margin-top:70px; 
}

.categories{
    margin: 70px 0;
}
.col-3{
    flex-basis:30%;
    min-width: 250px;
    margin-bottom: 30px;
}
.col-3 img{
    width:100%;
}

.small-container{
    max-width: 1080px;
    margin:auto;
    padding-left: 25px;
    padding-right: 25px;
}

.col-4{
    flex-basis:25%;
    padding:10px;
    min-width:200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
}

.col-4 img{
    width:100%;
}
.title{
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color:#555;
}
.title::after{
    content: '';
    background: #006eff;
    width:80px;
    height: 5px;
    border-radius:5px;
    position:absolute;
    bottom:0;
    left: 50%;
    transform: translate(-50%);
}
h4{
    color:#555;
    font-weight: normal;
}

.col-4 p{
    font-size: 14px;
}

.rating .fa{
    color: #006eff;
}

.col-4:hover{
    transform: translateY(-5px) ;
}

/*------offer-------*/
.offer{
    background: radial-gradient(#fff,#72c6f7);
    margin-top: 80px;
    padding: 30px 0;
}

.col-2 .offer-img{
    padding: 50px ;
}

small{
    color:#555;
}

/*----------testimonial----------*/

.testimonial{
    padding-top:100px;
}

.testimonial .col-3{
    text-align:center;
    padding: 40px 20px;
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
    cursor:pointer;
    transition: transform 0.5s;
}

.testimonial .col-3 img
{
    width:50px;
    margin-top: 20px;
    border-radius: 50%;
}

.testimonial .col-3:hover{
    transform: translateY(-10px);
}

.fa.fa-quote-left{
    font-size:34px;
    color:#006eff;
}
.col-3 p{
    font-size:12px;
    margin: 12px 0;
    color: #777;
}

.testimonial .col-3 h3{
font-weight: 600px;
color: #555;
font-size: 16px;
}

/*------brands------*/
.brands{
    margin:100px auto;
}
.col-5{
    width:160px;
}

.col-5 img{
    width: 100%;
    cursor: pointer;
    filter: grayscale(100%);
}
.col-5 img:hover{
     filter: grayscale(0);
}

/*----------Fotter-----*/

.footer{
    background: #3347ff;
    color: #8a8a8a;
    font-size: 14px;
    padding: 60px 0 20px;
}
.footer p
{
    color: #8a8a8a;
}
.footer h3{
    color: #fff;
    margin-bottom: 20px;
}

.footer-col-2 img
{
    width: 180px;
    margin-bottom: 20px;
}

.footer-col-1, .footer-col-2,.footer-col-3, .footer-col-4 {
    min-width: 250px;
    margin-bottom: 20px;
}
.footer-col-1{
    flex-basis: 30px;
}
.footer-col-2{
    flex: 1;
    text-align: center;
}
.footer-col-3,.footer-col-4{
    flex-basis: 12%;
    text-align: center;
}

ul
{
    list-style-type: none;
}
.app-logo{
    margin-top: 20px;   
}

.app-logo img{
    width: 120px;
}

.footer hr{
    border: none;
    background: #b5b5b5;
    height:1px;
    margin:20px 0;
}

.copyright{
    text-align: center;
}

.menu-icon{
    width: 130px;
    margin-left:20px ;
    display: none;
}

/*-------- media query for menu ------*/

@media only screen and (max-width: 800px)
{
    nav ul {
        position: absolute;
        top: 130px;
        left: 0;
        background: #333;
        width: 100%;
        overflow: hidden;
        transition: max-height 0.5s;
    }

    nav ul li
    {
        display: block;
        margin-right: 50px;
        margin-bottom: 10px;
        margin-top: 10px;

    }

    nav ul li a{
        color: #fff;
    }

    .menu-icon{
        display: block;
        cursor: pointer;
    }
}

/*------ All Products --------*/

.row-2{
    justify-content: space-around;
    margin: 100px auto 50px;
}

select
{
    border:1px solid #006eff;
    padding: 5px;
}

select:focus{
    outline: none;
}

.page-btn
{
    margin: 0 auto 80px;
}

.page-btn span{
    display: inline-block;
    border: 1px solid #006eff;
    margin-left: 10px;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
}

.page-btn span:hover
{
    background: #006eff;
    color: #fff;
}

/*--------Contact Page -------*/

.small-container-contact{
    max-width: 1080px;
    margin:auto;
    padding-left: 25px;
    padding-right: 25px;
    margin-top: 25px;
    margin-bottom: 25px;
}

.row-contact{
    display:flex;
    align-items:center;
    flex-wrap: wrap;
    justify-content: space-around;
}

.col-2-contact{
    flex: 50%;
    min-width:300px;
}

.row-contact .col-2-contact span,.form-details form span
{
    font-size: 12px;
}
.row-contact .col-2-contact h2,.form-details form h2
{
    font-size: 26px;
    line-height: 35px;
    padding: 20px 0;
}
.row-contact .col-2-contact h3
{
  font-size: 16px;
  padding-bottom: 15px;
}
.row-contact .col-2-contact li
{
    list-style: none;
    display: flex;
    padding: 20px 0;
} 

.row-contact .col-2-contact li i
{
    font-size: 14px;
    padding-right: 22px;
}

.row-contact .col-2-contact li p
{
    margin: 0;
    font-size: 14px;
}

.row-contact .col-2-contact .map
{
    width: 55%;
    height: 400px;
}

.row-contact .col-2-contact .map iframe
{
    width: 100%;
    height: 100%;
}

.form-details 
{
    margin: 30px;
    padding: 50px;
    border: 1px solid #563434;
    display: flex;
    justify-content: space-between;
}


.form-details form button
{
    width: 20%;
    background: rgb(0, 128, 43);
}

.form-details form
{
    width: 50%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.row-contact form input, .row-contact form textarea
{
    width: 100%;
    padding: 12px 25px;
    outline: none;
    margin-bottom: 20px;
    border: 2px solid #555;
}

.form-details .people div
{
    padding-bottom: 25px;
    display: flex;
    align-items: flex-start;
    margin-top: 30px;
    margin-left: 50px;
}

.form-details .people div img{
    width: 65px;
    height: 65px;
    object-fit: cover;
    margin-right: 15px;
}

.form-details .people div p
{
    margin: 0;
    font-size: 13px;
    line-height: 25px;

}

.form-details .people div p span
{
    display: block;
    font-size: 25px;
    font-weight: 600;
    color: #000;
}
.people img
{
    width:50px;
    margin-top: 20px;
    border-radius: 50%;
}

/*------ Breadcrumbs -------- */

.breadcrumbs-item:not(:last-of-type)::after
{
    content: ' /';
    margin: 0 5px;
    color: #cccccc;
}

.breadcrumbs-link:hover
{
    font-size: 22px;
    font-weight: bold;
    color: rgb(128, 30, 255);
}

.breadcrumbs-link--active-Contact
{
 color: dodgerblue;
}

.breadcrumbs-link--active-Home
{
 color: dodgerblue;
}

.breadcrumbs-link--active-Product
{
 color: dodgerblue;
}

.breadcrumbs-link--active-Account
{
 color: dodgerblue;
}

.breadcrumbs-link--active-Gallery
{
 color: dodgerblue;
}

.breadcrumbs-link--active-Gallery:hover
{
    font-size: 22px;
    font-weight: bold;
    color: rgb(128, 30, 255);
}


/*----- Media query for less than 600 screen size -------*/

@media only screen and (max-width: 600px)
{
    .row {
        text-align: center;
    }

    .col-2,.col-3,.col-4{
        flex-basis: 100%;
    }

    .single-product .row
    {
        text-align: left;
    }

    .single-product .col-2
    {
        padding: 20px 0;
    }

    .single-product h1{
        font-size: 26px;
        line-height: 32px;
    }

    .cart-info p
    {
        display: none;
    }
}

h2{
    text-align: center;
    font-size:40px;
}
    </style>
</head>
<body>

<div class="header-product">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                  <a href="index2.php">  <img src="Images/logo.png" width="100px"> </a>
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

 

    <div class="payment-container" >
        <h2>Payment</h2>
        <p>All transactions are secure and encrypted.</p><br>

        <form action="process_payment.php" method="POST">

            <!-- Contact Section -->
            <div class="form-group">
                <h3 class="section-title">Contact</h3>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <div class="checkbox-label">
                    <input type="checkbox" id="newsletter" name="newsletter" style="margin-left: -80px;">
                    <label for="newsletter" style="margin-left: -200px;">Email me with news and offers</label>
                </div>
            </div><br>

            <!-- Delivery Section -->
            <div class="form-group">
                <h3 class="section-title">Delivery</h3>

                <div>
                    <input type="radio" id="ship" name="delivery_method" value="ship" checked>
                    <label for="ship">Ship</label>
                </div>
                <div>
                    <input type="radio" id="pickup" name="delivery_method" value="pickup">
                    <label for="pickup">Pickup in store</label>
                </div><br>

                <label for="country">Country/Region</label>
                <select id="country" name="country">
                    <option value="South Africa">South Africa</option>
                    <!-- Add more country options if needed -->
                </select><br><br>

                <div style="display: flex; gap: 10px;">
                    <div style="flex: 1;">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" required>
                    </div>
                    <div style="flex: 1;">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" required>
                    </div>
                </div>

                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>

                <label for="apartment">Company, apartment, suite, etc. (optional)</label>
                <input type="text" id="apartment" name="apartment">

                <div style="display: flex; gap: 10px;">
                    <div style="flex: 1;">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <div style="flex: 1;">
                        <label for="province">Province</label>
                        <select id="province" name="province">
                            <option value="Gauteng">Gauteng</option>
                            <!-- Add more province options if needed -->
                        </select>
                    </div>
                    <div style="flex: 1;">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" id="postal_code" name="postal_code" required>
                    </div>
                </div>
            </div>

            <!-- Payment Methods -->
            <h1>Choose Your Payment Method</h1><br>
        <form action="process_payment.php" method="POST">
            <!-- Payment method options -->
            <label>
                <input type="radio" name="payment_method" value="credit_card" onclick="toggleFields('credit_card')"> Credit/Debit Card
            </label>
            <label>
                <input type="radio" name="payment_method" value="paypal" onclick="toggleFields('paypal')"> PayPal
            </label>
            <label>
                <input type="radio" name="payment_method" value="bank_transfer" onclick="toggleFields('bank_transfer')"> Bank Transfer
            </label>
            <label>
                <input type="radio" name="payment_method" value="mobile_wallet" onclick="toggleFields('mobile_wallet')"> Mobile Wallet
            </label>
            <label>
                <input type="radio" name="payment_method" value="gift_voucher" onclick="toggleFields('gift_voucher')"> Gift Voucher
            </label>

            <!-- Credit/Debit Card fields -->
            <div id="credit_card-fields" class="method-fields"><br>
                <label>Card Number</label>
                <input type="text" name="card_number" placeholder="Enter card number">
                <label>Expiry Date</label>
                <input type="text" name="expiry_date" placeholder="MM/YY">
                <label>CVV</label>
                <input type="text" name="cvv" placeholder="Enter CVV">
            </div>

            <!-- PayPal fields -->
            <div id="paypal-fields" class="method-fields">
                <label>Email Address</label>
                <input type="email" name="paypal_email" placeholder="Enter your PayPal email">
            </div><br>

            <!-- Bank Transfer fields -->
            <div id="bank_transfer-fields" class="method-fields">
                <label>Select Bank</label>
                <select id="bank-select" name="bank" onchange="showBankDetails()">
                    <option value="">--Select a Bank--</option>
                    <option value="Standard Bank">Standard Bank</option>
                    <option value="ABSA">ABSA</option>
                    <option value="Nedbank">Nedbank</option>
                    <option value="FNB">FNB</option>
                </select>
                <div id="bank-details" class="bank-details"></div>
            </div>

            <!-- Mobile Wallet fields -->
            <div id="mobile_wallet-fields" class="method-fields">
                <label>Wallet Provider</label>
                <input type="text" name="wallet_provider" placeholder="Enter wallet provider (e.g., SnapScan)">
                <label>Mobile Number</label>
                <input type="text" name="mobile_number" placeholder="Enter registered mobile number">
            </div>

            <!-- Gift Voucher fields -->
            <div id="gift_voucher-fields" class="method-fields">
                <label>Voucher Code</label>
                <input type="text" name="voucher_code" placeholder="Enter your gift voucher code">
                <label>Redeem Value</label>
                <input type="text" name="redeem_value" placeholder="Enter the voucher redeem value">
            </div><br>

            <button type="submit" class="btn" style="margin-left:160px;">Proceed to Payment</button>
            <input type="hidden" id="cart" name="cart">
           
            
        </form>

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

    <script>
       function toggleFields(paymentMethod) {
            // Hide all input fields
            document.querySelectorAll('.method-fields').forEach(field => field.style.display = 'none');

            // Show the relevant input fields
            const selectedFields = document.getElementById(paymentMethod + '-fields');
            if (selectedFields) {
                selectedFields.style.display = 'block';
            }
        }

        function showBankDetails() {
            const bank = document.getElementById('bank-select').value;
            const bankDetails = {
                "Standard Bank": {
                    accountNumber: "123456789",
                    reference: "SB-Order123"
                },
                "ABSA": {
                    accountNumber: "987654321",
                    reference: "AB-Order123"
                },
                "Nedbank": {
                    accountNumber: "456123789",
                    reference: "NB-Order123"
                },
                "FNB": {
                    accountNumber: "321654987",
                    reference: "FN-Order123"
                }
            };

            const details = bankDetails[bank];
            if (details) {
                document.getElementById('bank-details').innerHTML = `
                    <strong>Bank Name:</strong> ${bank}<br>
                    <strong>Account Number:</strong> ${details.accountNumber}<br>
                    <strong>Reference:</strong> ${details.reference}<br>
                `;
            } else {
                document.getElementById('bank-details').innerHTML = "";
            }
        }

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
 const cart = localStorage.getItem('cart');
document.getElementById('cart').value = cart;

    </script>
</body>
</html>
