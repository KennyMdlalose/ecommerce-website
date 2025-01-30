<?php
include 'database.php';

// Get customer ID from the URL
$customer_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch customer details
$sql = "SELECT * FROM customers WHERE customer_id = $customer_id";
$result = mysqli_query($conn, $sql);

// Check if the customer exists
if ($result && mysqli_num_rows($result) > 0) {
    $customer = mysqli_fetch_assoc($result);
} else {
    die("Customer not found.");
}
// Fetch customer orders and totals
$order_sql = "
    SELECT 
        o.order_id, 
        p.product_name, 
        oi.quantity, 
        (oi.quantity * p.price) AS item_total, 
        SUM(oi.quantity * p.price) OVER(PARTITION BY o.order_id) AS order_total
    FROM orders o
    JOIN order_items oi ON o.order_id = oi.order_id
    JOIN products p ON oi.product_id = p.product_id
    WHERE o.customer_id = $customer_id
";
$order_result = $conn->query($order_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <link rel="icon" href="Images/logo.png">
    <title>View Customer</title>
    <link rel="stylesheet" href="style.css">
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


        <h1>Customer Details</h1>
        <table>
            <tr>
                <th>Customer ID</th>
                <td><?php echo $customer['customer_id']; ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $customer['first_name']; ?>
                <?php echo $customer['last_name']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $customer['email']; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $customer['phone_number']; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $customer['address']; ?></td>
            </tr>
            <h2>Order Details</h2>
            <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Item Total</th>
                        <th>Order Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $current_order = null;
                 
                        if ($current_order !== $row['order_id']):
                            $current_order = $row['order_id'];
                        endif; ?>
                        <tr>
                            <td><?php echo $row['order_id']; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td>R<?php echo number_format($row['item_total'], 2); ?></td>
                            <td>R<?php echo number_format($row['order_total'], 2); ?></td>
                        </tr>
                    <?php  ?>
                </tbody>
            </table>
       
    </div>
        </table>
        <a href="customers.php" class="btn">Back to Customers</a>
    </div>
    <br><br>

    </div>
    
</body>
</html>
