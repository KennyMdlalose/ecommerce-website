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
        <title>All Products - HERD CARE</title>
        <link rel="icon" href="Images/logo.png">
        <style>
             .product-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                gap: 20px;
                margin-top: 20px;
            }

            .product-item {
                flex: 0 1 calc(25% - 20px); /* Each item takes 25% width minus spacing */
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
                border: 1px solid #ccc;
                padding: 15px;
                box-sizing: border-box;
                border-radius: 10px;
                background-color: #fff;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                text-align: center;
            }

            .product-item img {
                max-width: 100%;
                height: 100px;
                object-fit: cover;
                margin-bottom: 10px;
            }

            .product-item h3 {
                font-size: 16px;
                margin: 10px 0;
            }

            .product-item p {
                font-size: 14px;
                color: #555;
                margin: 5px 0;
            }

            .product-item a {
                text-decoration: none;
                color: #007bff;
                font-weight: bold;
                margin-top: 10px;
            }

            .product-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }
            .pagination {
                margin-top: 20px;
                text-align: center;
            }

            .pagination a {
                text-decoration: none;
                margin: 0 5px;
                padding: 8px 12px;
                border: 1px solid #ccc;
                border-radius: 5px;
                color: #007bff;
                transition: background-color 0.3s, color 0.3s;
            }

            .pagination a.active {
                background-color: #007bff;
                color: white;
            }

            .pagination a:hover {
                background-color: #ddd;
            }
        </style>
    </head>
    <body>
         
    <div class="header">
   
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="Images/logo.png" width="100px"></a>
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
           
            <img src="Images/Menu.png" class="menu-icon" height="100px" onclick="menutoggle()">
        </div> 
    </div>
</div>
    <div class="small-container">
            <div class="row row-2">
                <h2>All Products</h2>
               <select id="sortOptions" onchange="sortProducts()">
                    <option value="default">Default Sorting</option>
                    <option value="price">Sort By Price</option>
                    <option value="popularity">Sort By Popularity</option>
                    <option value="rating">Sort By Rating</option>
                    <option value="sale">Sort By Sale</option>
                </select>
            </div>
            <div class="row">
                <div class="col-4">
                   
                </div>
                <?php
               
                include('database.php');
                
               // Pagination variables
               $itemsPerPage = 17;
               $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
               $offset = ($page - 1) * $itemsPerPage;

               // Get total number of products
               $totalResult = $conn->query("SELECT COUNT(*) AS total FROM products");
               $totalItems = $totalResult->fetch_assoc()['total'];
               $totalPages = ceil($totalItems / $itemsPerPage);

               // Fetch products for the current page
               $sql = "SELECT * FROM products LIMIT $offset, $itemsPerPage";
               $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-item'>
                        <img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'>
                        <h3>" . $row['name'] . "</h3>
                        <p><strong>Price:</strong> R" . $row['price'] . "</p>
                        
                        <a href='proDuct_details.php?id=" . $row['product_id'] . "'>View Details</a>
                    </div>";
            }
        } else {
            echo "<p>No products available</p>";
        }
        ?>
              </div>

               <div class="pagination">
                <?php
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo "<a href='?page=$i' class='" . ($page == $i ? "active" : "") . "'>$i</a>";
                }
                ?>
            </div>
           
        </div>
        </div>
        
            

</div>

<br>
        
<!------footer------->

<div class="footer" style="background: radial-gradient(#fff,#72c6f7); ">
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
            function sortProducts() {
                const sortOption = document.getElementById('sortOptions').value;
                const productList = document.getElementById('product-list');
                const products = Array.from(productList.getElementsByClassName('col-4'));

                products.sort((a, b) => {
                    let aValue, bValue;
                    switch (sortOption) {
                        case 'price':
                            aValue = parseFloat(a.getAttribute('data-price'));
                            bValue = parseFloat(b.getAttribute('data-price'));
                            return aValue - bValue;
                        case 'popularity':
                            aValue = parseInt(a.getAttribute('data-popularity'));
                            bValue = parseInt(b.getAttribute('data-popularity'));
                            return bValue - aValue;
                        case 'rating':
                            aValue = parseFloat(a.getAttribute('data-rating'));
                            bValue = parseFloat(b.getAttribute('data-rating'));
                            return bValue - aValue;
                        case 'sale':
                            aValue = parseInt(a.getAttribute('data-sale'));
                            bValue = parseInt(b.getAttribute('data-sale'));
                            return bValue - aValue;
                        default:
                            return 0; // Default Sorting (no change)
                    }
                });

                // Clear existing products
                productList.innerHTML = '';

                // Re-add sorted products
                products.forEach(product => productList.appendChild(product));
            }

            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight= "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight= "200px";
                } else {
                    MenuItems.style.maxHeight= "0px";
                }
            }
            // JavaScript to handle "Next" and "Back" button functionality
    document.getElementById("next-btn").addEventListener("click", function () {
        navigate("next");
    });

    document.getElementById("prev-btn").addEventListener("click", function () {
        navigate("prev");
    });

    function navigate(direction) {
        // Get the current URL
        const currentUrl = window.location.href;

        // Define page sequence
        const pages = [
            "Product.php",
            "Product2.2.php",
            "Product3.php",
            "Product4.php"
        ];

        // Find the index of the current page
        const currentPage = pages.findIndex(page => currentUrl.includes(page));

        // Navigate based on direction
        if (direction === "next") {
            if (currentPage !== -1 && currentPage < pages.length - 1) {
                window.location.href = pages[currentPage + 1];
            } else {
                alert("You are already on the last page.");
            }
        } else if (direction === "prev") {
            if (currentPage > 0) {
                window.location.href = pages[currentPage - 1];
            } else {
                alert("You are already on the first page.");
            }
        }
    }
        </script>    
    </body>
</html>