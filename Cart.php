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

        <style>
    /* Style for the Remove button */
    .remove-btn {
        background-color:rgb(177, 14, 2); /* Red color for the button */
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    /* Change background color on hover */
    .remove-btn:hover {
        background-color: #e53935;
    }

    /* Disable button styling */
    .remove-btn:disabled {
        background-color: #ccc;
        cursor: not-allowed;
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
  <!-- Cart Items Section -->
  <div class="small-container cart-page">
        <table id="cart-table">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th >Remove</th>
            </tr>
            <!-- Cart items will be dynamically inserted here -->
        </table>

        <!-- Total Price Section -->
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td id="subtotal">R0.00</td>
                </tr>
                <tr>
                    <td>Tax (15%)</td>
                    <td id="tax">R0.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td id="total">R0.00</td>
                </tr>
            </table>
        </div>

        <!-- Checkout Button -->
        <div class="checkout-btn">
            <button onclick="checkout()">Proceed to Checkout</button>
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
 <!-- JavaScript for Cart Functionality and Menu Toggle -->
 <script>
let cart = JSON.parse(localStorage.getItem('cart')) || [];

function updateCart() {
    let cartTable = document.getElementById('cart-table');
    cartTable.innerHTML = `
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Remove</th>
        </tr>
    `;

    let subtotal = 0;
    cart.forEach((product, index) => {
        let productSubtotal = product.price * product.quantity;
        subtotal += productSubtotal;

        cartTable.innerHTML += `
            <tr>
                <td>${product.name}</td>
                <td>${product.quantity}</td>
                <td>R${productSubtotal.toFixed(2)}</td>
                <td><button onclick="removeFromCart(${index})" class="remove-btn">Remove</button></td>
            </tr>
        `;
    });

    // Update subtotal, tax, and total
    let tax = subtotal * 0.15;
    let total = subtotal + tax;

    document.getElementById('subtotal').innerText = `R${subtotal.toFixed(2)}`;
    document.getElementById('tax').innerText = `R${tax.toFixed(2)}`;
    document.getElementById('total').innerText = `R${total.toFixed(2)}`;

    // Disable checkout button if cart is empty
    const checkoutBtn = document.querySelector('.checkout-btn button');
    if (cart.length === 0) {
        checkoutBtn.disabled = true;
        checkoutBtn.style.backgroundColor = '#ccc';  // Change button color to indicate disabled state
    } else {
        checkoutBtn.disabled = false;
        checkoutBtn.style.backgroundColor = '';  // Reset button color
    }
}

function removeFromCart(index) {
    cart.splice(index, 1);  // Remove product from cart
    localStorage.setItem('cart', JSON.stringify(cart));  // Save updated cart to localStorage
    updateCart();  // Refresh the cart display
}

function checkout() {
    if (cart.length === 0) {
        alert('Your cart is empty! Please add at least one product.');
    } else {
        // Save cart data in localStorage and redirect to payment.php
        localStorage.setItem('cart', JSON.stringify(cart));
        window.location.href = 'payment.php'; // Redirect to payment page
    }
}

// Load cart when page loads
window.onload = updateCart;
</script>
    </body>
</html>