<?php
include 'database.php';
$query = "SELECT * FROM orders"; // Replace with your actual query
$result = mysqli_query($conn, $query);

if (!$result) {
    // Output the error message
    die("Query failed: " . mysqli_error($conn));
}

$sql = "SELECT * FROM orders.order_id,customers.name AS customer_name, 
        products.product_name, 
        orders.quantity, 
        orders.total_price, 
        orders.status  FROM orders
    JOIN customers ON orders.customer_id = customers.customer_id
    JOIN products ON orders.product_id = products.product_id";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Management</title>
    <link rel="stylesheet" href="style.css">
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

    <div class="container">
        <h1>Order Management</h1>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

               <?php
while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['order_id']; ?></td>
        <td><?php echo $row['customer_name']; ?></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $row['total_price']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td>
            <a href="update-order.php?id=<?php echo $row['order_id']; ?>">Update</a> |
            <a href="delete-order.php?id=<?php echo $row['order_id']; ?>" onclick="return confirm('Are you sure you want to delete this order?')">Delete</a>
        </td>
    </tr>
<?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
