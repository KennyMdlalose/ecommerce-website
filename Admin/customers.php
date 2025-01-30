<?php
include 'database.php';

$sql = "SELECT * FROM customers";
$result = mysqli_query($conn, $sql);
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
       
        <link rel="icon" href="Images/logo.png">
    <title>Customer Management</title>
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
<div>
    <div class="container">
        <h1>Customer Management</h1>
        <table>
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['customer_id']; ?></td>
                        <td><?php echo $row['first_name']; ?>
                            <?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td>
                            <a href="view-customer.php?id=<?php echo $row['customer_id']; ?>">View</a> |
                            <a href="delete-customer.php?id=<?php echo $row['customer_id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
   </div>

</body>
</html>
