<?php
include('database.php');

$product_id = $_GET['id']; // Get product ID from URL

// Fetch product details
$sql = "SELECT * FROM products WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

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
    <title><?php echo $product['name']; ?> - Herd Care Pharmacy</title>
   
    <title>Product details - HERD CARE</title>
        <link rel="icon" href="Images/logo.png">
        <style>
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

            .product-container {
    display:inline;
    flex-wrap: wrap;
    gap: 20px;
  }
  .product {
    border: 1px solid #ccc;
    padding: 15px;
    width: 200px;
  }
  .sort-container {
    margin-bottom: 20px;
  }
            .small-container{
                background-color: #fff;
    max-width: 1080px;
    width: 100%;
    max-height: 1080px;
    margin:auto;
    padding-left: 25px;
    padding-right: 25px;
}
.product-item {
    display: inline-block;
    width: 23%;
    margin: 1%;
    text-align: center;
    border: 1px solid #ccc;
    padding: 10px;
}

.product-item img {
    max-width: 50%;
    height: auto;
}
.product-item {
    display: inline-block;
    width: 23%;
    margin: 1%;
    text-align: center;
    border: 1px solid #ccc;
    padding: 10px;
}

.product-item img {
    max-width: 100%;
    height: auto;
}
/*----------Fotter-----*/

.footer{
    background: radial-gradient(#fff,#72c6f7);
    color: #8a8a8a;
    font-size: 14px;
    padding: 80px 0 250px;
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
    width: 1080px;
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
        </style>
</head>
<body>
<div class="header-product-details">
         <div class="container">
            <div class="navbar">
                <div class="logo">
                 <a href="index.php">  <img src="Images/logo.png" width="100px"></a> 
                </div>  
            <nav>
                <ul id="MenuItems">
                <li class="breadcrumbs-item"><a href="index.php" class="breadcrumbs-link">Home</a></li>
                    <li class="breadcrumbs-item"><a href="Product.php" class="breadcrumbs-link">Products</a></li>
                    <li class="breadcrumbs-item"><a href="Contact.php" class="breadcrumbs-link">Contact Us</a></li>
                    <li class="breadcrumbs-item"><a href="About.php" class="breadcrumbs-link">About Us</a></li>
                    <li class="breadcrumbs-item"><a href="Account.php" class="breadcrumbs-link">Account</a></li>
                </ul>
            </nav> 
        
        </div> 
    <div class="small-container">
        <h1><?php echo $product['name']; ?></h1>
        <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>">
        <p><strong>Description:</strong> <?php echo $product['description']; ?></p>
        <p><strong>Price:</strong> R<?php echo $product['price']; ?></p>
        <input type="number" id="product-quantity" value="1">
                <button class="btn" onclick="addToCart('<?php echo $product['name']; ?>', '<?php echo $product['price']; ?>', document.getElementById('product-quantity').value)">Add To Cart</button>

    </div>
<br>
    <!------footer------->


<div class="footer" style="background: radial-gradient(#fff,#72c6f7);">
    <div class="container"  >
        <div class="row" >
            <div class="footer-col-1" style="margin-top:30px ;" >
                <h3>Download Our App</h3>
            <p>Download App for Android and IOS Mobile Phone</p>
            <div class="app-logo">
              <a href=""><img src="Images/gogogoolePlay.png"></a>
              <a href=""><img src="Images/StoryApp.svg"></a>  
                
            </div>    
            </div>
            <div class="footer-col-2">
        <h3>Address</h3>
          <a href=""> <p>
             Cnr of Ascot and Newmarket Roads,<br>
              Alberton,<br>
              Gauteng,<br> South Africa
            </p> </a>    
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
         <ul>
         <a href="#"><li>Gift Card</li></a>
            <a href="#"><li>Blog Post</li></a>
            <a href="#"><li>Return Policy</li></a>
            <a href="#"><li>Join Affiliate</li></a>
            
           
            
         </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
         <ul>
            <a href=""><li>Facebook</li></a>
            <a href=""><li>Twitter</li></a>
            <a href=""><li>Instagram</li></a>
            <a href=""><li>YouTube</li></a>
            
            
            
         </ul>
            </div>
        </div>

    <div class="row-contact" >
            <div class="col-2-contact" >
            
                <li style="margin-left:500px;">
                    <i class="fa fa-phone"> </i>
                  <a href=""><p>(011)65 305 0492</p></a>  
                </li>
              
             </div>
            </div>
        <hr>
        <p class="copyright">Copyright 2024 - HERD CARE</p>
    </div>
</div>


<!-------JavaScript for Toggle Menu------->

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


