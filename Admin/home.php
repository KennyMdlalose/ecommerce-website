
<?php
include('database.php'); // Include database connection

// Fetch all products for admin view
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Handle form submission for adding a new product
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $category = $_POST['category'];
    $image_url = $_POST['image_url'];

    $sql = "INSERT INTO products (name, description, price, stock_quantity, category, image_url) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdiss", $name, $description, $price, $stock_quantity, $category, $image_url);

    if ($stmt->execute()) {
        echo "<script>alert('Product added successfully!');</script>";
    } else {
        echo "<script>alert('Error adding product. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Product details - HERD CARE</title>
        <link rel="icon" href="Images/logo.png">
        <style>
            .small-container {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                gap: 100px; 
                margin: 50px 0;
            }
            .col-2 {
                flex: 1;
            }
            .col-2 input, .col-2 select, .col-2 textarea {
                width: 100%;
                margin-bottom: 20px;
            }
            #uploadImg {
                display: block;
                width: 400px;
            }
            #ProductImg {
                width: 400px;
                height: 400px;
                object-fit: contain;
                display: block;
                margin-top: 20px;
            }
            .btn {
                display: inline-block;
                background: #72c6f7;
                color: white;
                padding: 10px 20px;
                text-align: center;
                border-radius: 5px;
                text-decoration: none;
                cursor: pointer;
            }
        </style>
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
                        <li class="breadcrumbs-item"><a href="dashboard.php" class="breadcrumbs-link">Dashboard</a></li>
                            <li class="breadcrumbs-item"><a href="home.php" class="breadcrumbs-link"> Products</a></li>
                            <li class="breadcrumbs-item"><a href="orders.php" class="breadcrumbs-link"> Orders</a></li>
                            <li class="breadcrumbs-item"><a href="customers.php" class="breadcrumbs-link"> Customers</a></li>
                            <li class="breadcrumbs-item"><a href="Account.php" class="breadcrumbs-link">LogOut</a></li>
                          
                        </ul>
                    </nav>
                </div> 
            </div>
        </div>

        <!--------Single Product details --------->
        <div class="small-container single-product">
            <div class="col-2">
                <!-- File input for image upload -->
                <p>Image:</p>
        <input type="file" id="uploadImg" name="image" accept="image/*" onchange="previewImage(this)" required>
        <img id="ProductImg" src="#" alt="Product Image Preview" style="display: none;">
                <!-- Image preview -->
                <img id="ProductImg" src="#" alt="Product Image Preview" style="display: none;">
            </div>

            <div class="col-2">
            <form method="POST" action="" enctype="multipart/form-data">
        <p>Name:</p>
        <input type="text" id="name" name="name" required>
        <p>Price:</p>
        <input type="number" id="price" name="price" step="0.01" required>
        <p>Category:</p>
        <select name="category" required>
            <option value="">Select</option>
            <option value="Tablets">Tablets</option>
            <option value="Syrup">Syrup</option>
            <option value="Injections">Injections</option>
            <option value="Capsules">Capsules</option>
            <option value="Creams">Creams</option>
            <option value="Ointments">Ointments</option>
        </select>
        <p>Stock Quantity:</p>
        <input type="number" id="stock_quantity" name="stock_quantity" required>
        <label for="image_url">Image URL:</label><br>
        <input type="text" name="image_url" placeholder="Image URL" required><br>

        <p>Product Details:</p>
        <textarea name="description" id="productDetails" style="height:200px; border-color:darkcyan;" required></textarea>
        <br><br>
        <button type="submit" class="btn" style="margin-left:150px">Add Product</button>
    </form>
            </div>
        </div>

         <!-- Display List of Products -->
    <h2>Current Products</h2>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Stock Quantity</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['price'] . "</td>
                        <td>" . $row['stock_quantity'] . "</td>
                        <td>" . $row['category'] . "</td>
                        <td>
                            <a href='editProduct.php?id=" . $row['product_id'] . "'>Edit</a>
                            <a href='deleteProduct.php?id=" . $row['product_id'] . "'>Delete</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No products found</td></tr>";
            }
            ?>
        </tbody>
    </table>
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
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                } else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
       

     
            function previewImage(input) {
                var file = input.files[0];
                var reader = new FileReader();
                reader.onload = function(e) {
                    var productImg = document.getElementById("ProductImg");
                    productImg.src = e.target.result;
                    productImg.style.display = "block"; 
                };
                if (file) {
                    reader.readAsDataURL(file);
                }
                // Form validation function
        function validateForm() {
            var name = document.forms["addProductForm"]["name"].value;
            var price = document.forms["addProductForm"]["price"].value;
            var stock_quantity = document.forms["addProductForm"]["stock_quantity"].value;
            if (name == "" || price == "" || stock_quantity == "") {
                alert("All fields must be filled out.");
                return false;
            }
        }

        // Confirmation for delete action
        function confirmDelete() {
            return confirm("Are you sure you want to delete this product?");
        }
            }

        </script>
    </body>
</html>
