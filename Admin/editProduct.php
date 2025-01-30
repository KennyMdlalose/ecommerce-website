<?php
include('database.php'); // Include database connection

// Get product id from URL
$product_id = $_GET['id'];

// Fetch product details from the database
$sql = "SELECT * FROM products WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$product = $stmt->get_result()->fetch_assoc();

// Update product details
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $category = $_POST['category'];
    $image_url = $_POST['image_url'];

    $update_sql = "UPDATE products SET name = ?, description = ?, price = ?, stock_quantity = ?, category = ?, image_url = ? WHERE product_id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssdiisi", $name, $description, $price, $stock_quantity, $category, $image_url, $product_id);
    $stmt->execute();
    echo "Product updated successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Edit Product - HERD CARE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Images/logo.png">
</head>
<body>
<div class="header-product-details">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="index.php"><img src="Images/logo.png" width="100px"></a>
                    </div>  
                    <nav>
                        <ul id="MenuItems">
                            <li class="breadcrumbs-item"><a href="home.php" class="breadcrumbs-link">Home</a></li>
                            <li class="breadcrumbs-item"><a href="Account.php" class="breadcrumbs-link">LogOut</a></li>
                        </ul>
                    </nav>
                </div> 
            </div>
        </div>
    <h1>Edit Product</h1>
   

    <form method="POST" action="">
        <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br>
        <textarea name="description" required><?php echo $product['description']; ?></textarea><br>
        <input type="number" name="price" value="<?php echo $product['price']; ?>" required><br>
        <input type="number" name="stock_quantity" value="<?php echo $product['stock_quantity']; ?>" required><br>
        <input type="text" name="category" value="<?php echo $product['category']; ?>" required><br>
        <input type="text" name="image_url" value="<?php echo $product['image_url']; ?>" required><br>
        <button type="submit">Update Product</button>
    </form>
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
        // Form validation function
        function validateForm() {
            var name = document.forms["editProductForm"]["name"].value;
            var price = document.forms["editProductForm"]["price"].value;
            var stock_quantity = document.forms["editProductForm"]["stock_quantity"].value;
            if (name == "" || price == "" || stock_quantity == "") {
                alert("All fields must be filled out.");
                return false;
            }
        }
    </script>
</body>
</html>
