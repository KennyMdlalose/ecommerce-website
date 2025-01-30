<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - HERD CARE</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="Images/logo.png">
    <script src="dashboard.js" defer></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .dashboard-container {
            padding: 30px;
        }
        .metrics {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }
        .metric-card {
            background-color: #72c6f7;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            flex: 1 1 200px;
            text-align: center;
        }
        .metric-card h3 {
            margin: 10px 0;
        }
        body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
}
header, footer {
    background-color: #72c6f7;
    color: white;
    text-align: center;
    padding: 10px 0;
}
.dashboard-container h1 {
    color: #333;
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
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="home.php">Products</a></li>
                        <li><a href="orders.php">Orders</a></li>
                        <li><a href="customers.php">Customers</a></li>
                        <li><a href="Account.php">Logout</a></li>
                    </ul>
                </nav>
            </div> 
        </div>
    </div>

    <div class="dashboard-container">
        <h1>Admin Dashboard</h1>
        <div class="metrics">
            <div class="metric-card">
                <h3>Total Sales</h3>
                <p id="totalSales">Loading...</p>
            </div>
            <div class="metric-card">
                <h3>Orders Placed</h3>
                <p id="ordersPlaced">Loading...</p>
            </div>
            <div class="metric-card">
                <h3>Revenue</h3>
                <p id="revenue">Loading...</p>
            </div>
            <div class="metric-card">
                <h3>Low-Stock Alerts</h3>
                <p id="lowStock">Loading...</p>
            </div>
        </div>
    </div>
<br><br><br><br><br>
    <footer>
        <p style="text-align: center;">Copyright 2024 - HERD CARE</p>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
    // Simulate data fetching with dummy values
    const data = {
        totalSales: "R50,000",
        ordersPlaced: 120,
        revenue: "R75,000",
        lowStock: 8
    };

    // Update DOM elements
    document.getElementById("totalSales").textContent = data.totalSales;
    document.getElementById("ordersPlaced").textContent = data.ordersPlaced;
    document.getElementById("revenue").textContent = data.revenue;
    document.getElementById("lowStock").textContent = data.lowStock;
});

    </script>
</body>
</html>
