<?php
// Ensure the cart is decoded properly
$cart = json_decode($_POST['cart'] ?? '[]', true);

// Calculate total subtotal and tax
$total = 0;
foreach ($cart as $item) {
    $subtotal = $item['price'] * $item['quantity'];
    $total += $subtotal;
}

// Define constants for tax and delivery
$tax_rate = 0.15; // 15% tax
$delivery_fee = 80; // R80 delivery fee

// Calculate tax and final total
$tax = $total * $tax_rate;
$final_total = $total + $tax + $delivery_fee;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Contact - HERD CARE</title>
        <link rel="icon" href="Images/logo.png">
    <title>Payment Details</title>
    <style>
  
    .container {
        background: #ffffff; /* White background for containers */
        padding: 20px;
        margin: 20px auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 800px;
    }
    h2, h3 {
        color: #1e90ff; /* Dodger blue for headers */
        border-bottom: 2px solid #1e90ff;
        padding-bottom: 5px;
        text-align: center;
        padding-top: 40px;
    }
    .details p, .cart-details p {
        font-size: 16px;
        line-height: 1.6;
        margin: 10px 0;
    }
    .details strong {
        color: #004080; /* Darker blue for emphasis */
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table th, table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }
    table th {
        background-color: #1e90ff; /* Blue headers */
        color: white;
        text-transform: uppercase;
    }
    table td {
        background-color: #f9f9f9; /* Light background for table cells */
    }

 
    .confirm-btn {
        display: block;
        margin: 20px 0;
        padding: 10px 20px;
        background-color: #1e90ff; /* Dodger blue */
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        margin-left: 250px;
    }
    .confirm-btn:hover {
        background-color: #004080; /* Darker blue for hover effect */
    }
    .cart-details {
        margin-top: 30px;
        margin-bottom: 30px;
    }
</style>

</head>
<body >

<section style="background-color:white;">
<div class="header">
        <div class="header-home">
        <div >
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

</section>
<section style="background-color:white;">
<div class="container">
        <h2>Payment Details</h2>
        <p>Below are the details submitted in the form:</p>

        <div class="details">
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email'] ?? 'N/A'); ?></p>
            <p><strong>First Name:</strong> <?php echo htmlspecialchars($_POST['first_name'] ?? 'N/A'); ?></p>
            <p><strong>Last Name:</strong> <?php echo htmlspecialchars($_POST['last_name'] ?? 'N/A'); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($_POST['address'] ?? 'N/A'); ?></p>
            <p><strong>City:</strong> <?php echo htmlspecialchars($_POST['city'] ?? 'N/A'); ?></p>
            <p><strong>Province:</strong> <?php echo htmlspecialchars($_POST['province'] ?? 'N/A'); ?></p>
            <p><strong>Postal Code:</strong> <?php echo htmlspecialchars($_POST['postal_code'] ?? 'N/A'); ?></p>
            <p><strong>Delivery Method:</strong> <?php echo htmlspecialchars($_POST['delivery_method'] ?? 'N/A'); ?></p>
            <p><strong>Payment Method:</strong> <?php echo htmlspecialchars($_POST['payment_method'] ?? 'N/A'); ?></p>

            <?php if (!empty($_POST['payment_method'])): ?>
                <?php if ($_POST['payment_method'] === 'credit_card'): ?>
                    <p><strong>Card Number:</strong> <?php echo htmlspecialchars($_POST['card_number'] ?? 'N/A'); ?></p>
                    <p><strong>Expiry Date:</strong> <?php echo htmlspecialchars($_POST['expiry_date'] ?? 'N/A'); ?></p>
                    <p><strong>CVV:</strong> <?php echo htmlspecialchars($_POST['cvv'] ?? 'N/A'); ?></p>
                <?php elseif ($_POST['payment_method'] === 'paypal'): ?>
                    <p><strong>PayPal Email:</strong> <?php echo htmlspecialchars($_POST['paypal_email'] ?? 'N/A'); ?></p>
                <?php elseif ($_POST['payment_method'] === 'bank_transfer'): ?>
                    <p><strong>Bank Name:</strong> <?php echo htmlspecialchars($_POST['bank'] ?? 'N/A'); ?></p>
                <?php elseif ($_POST['payment_method'] === 'mobile_wallet'): ?>
                    <p><strong>Wallet Provider:</strong> <?php echo htmlspecialchars($_POST['wallet_provider'] ?? 'N/A'); ?></p>
                    <p><strong>Mobile Number:</strong> <?php echo htmlspecialchars($_POST['mobile_number'] ?? 'N/A'); ?></p>
                <?php elseif ($_POST['payment_method'] === 'gift_voucher'): ?>
                    <p><strong>Voucher Code:</strong> <?php echo htmlspecialchars($_POST['voucher_code'] ?? 'N/A'); ?></p>
                    <p><strong>Redeem Value:</strong> <?php echo htmlspecialchars($_POST['redeem_value'] ?? 'N/A'); ?></p>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <form method="POST" action="track_order.php">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            <input type="hidden" name="total" value="<?php echo $final_total; ?>">
            <button type="submit" class="confirm-btn">Are you sure? Confirm Order</button>
        </form>

        
        <p><a href="payment.php" style="padding-top:50px;text-decoration:underline;">Back to Payment Page</a></p>
    </div>

    <div class="container cart-details">
        <h3>Cart Details</h3>
        <?php if (!empty($cart)): ?>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                            <td>R<?php echo number_format($item['price'], 2); ?></td>
                            <td>R<?php echo number_format($item['price'] * $item['quantity'], 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3"><strong>Subtotal</strong></td>
                        <td><strong>R<?php echo number_format($total, 2); ?></strong></td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Tax (15%)</strong></td>
                        <td><strong>R<?php echo number_format($tax, 2); ?></strong></td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Delivery Fee</strong></td>
                        <td><strong>R<?php echo number_format($delivery_fee, 2); ?></strong></td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Total</strong></td>
                        <td><strong>R<?php echo number_format($final_total, 2); ?></strong></td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p>No items in the cart.</p>
        <?php endif; ?>
        <p><a href="cart.php" style="padding-top:50px;text-decoration:underline;" >Back to Cart</a></p>
    </div>

</section>
    
 <section style="background-color:white;">
     
<div class="footer" style="background: radial-gradient(#fff,#72c6f7);padding-top:-100px;">
    <div >
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
 </section>

</body>
</html>