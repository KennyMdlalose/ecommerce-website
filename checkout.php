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
    <title>Cart - HERD CARE</title>
    <link rel="icon" href="Images/logo.png">
    <style></style>
</head>
<body>
    <div class="header">
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

    
        <!--------Checkout details ------->

    <div class="container">
        <form id="checkout-form" method="POST">
            <div class="section">
                <h2>Contact</h2>
            <input type="email" id="email" name="email" placeholder="Email" required>
                <label><input type="checkbox"> Email me with news and offers</label>
            </div>

            <div class="section">
                <h2>Delivery</h2>
                <label><input type="radio" name="delivery" id="delivery"  value="ship" checked> Ship</label>
                <label><input type="radio" name="delivery"  id="delivery" value="pickup"> Pickup in store</label>
                
                <select id="province" name="province">
                    <option value="Gauteng">Gauteng</option>
                    <option value="Limpopo">Limpopo</option>
                    <option value="Eastern Cape">Eastern Cape</option>
                    <option value="Westren Cape">Western Cape</option>
                    

                    <!-- Add other countries as needed -->
                </select>

                <input type="text" id="name"  placeholder="First name" required>
                <input type="text" id="surname" placeholder="Last name" required>
                <input type="text" id="address" placeholder="Address" required>
                <input type="text" id="city" placeholder="City" required>
                <input type="text" id="postalCode" placeholder="Postal code" required>
                <input type="text" id="phoneNumber" placeholder="Phone" required>

                <label><input type="checkbox" > Save this information for next time</label>
            </div>

            <div class="section">
                <h2>Shipping method</h2>
                <p>Enter your shipping address to view available shipping methods.</p>
            </div>

            <div class="section">
                <h2>Payment</h2>
                <label><input type="radio" name="payment" id="payment" value="paypal" checked> PayPal</label>
                <label><input type="radio" name="payment" id="payment" value="credit"> Credit Card</label>

                <div class="payment-info">
                    <!-- Payment fields (if needed) -->
                </div>
            </div>

            <div class="section">
                <h2>Billing address</h2>
                <label><input type="checkbox" id="sameAddress" value="Same Address"  checked> Same as shipping address</label>
                <label><input type="checkbox" id="differentAddrses" value="differentAddress" value="Different Address"> Use a different billing address</label>
            </div>

            <button type="submit" class="pay-btn">Pay now</button>
        </form>

        <div class="order-summary">
            <h2>Order Summary</h2>
            <div class="item">
                <p>Precision Tools 30"</p>
                <span>R 150.00</span>
            </div>
            <div class="item">
                <p>Ultra Bond EP</p>
                <span>R 50.00</span>
            </div>
            <div class="total">
                <p>Subtotal (2 items)</p>
                <span>R 200.00</span>
            </div>
            <div class="total">
                <p>Shipping</p>
                <span>Enter shipping address</span>
            </div>
            <div class="total">
                <p>Total</p>
                <span>R 200.80</span>
            </div>
            <input type="text" placeholder="Discount code or gift card">
            <button class="apply-btn">Apply</button>
        </div>
    </div>

    <script >
        document.getElementById('checkout-form').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Payment Successful!');
        });
        
    </script>
</body>
</html>
