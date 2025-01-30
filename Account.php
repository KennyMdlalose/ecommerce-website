<?php
session_start();
require('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signUp'])) {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Check if terms are accepted
        if (!isset($_POST['acceptTerms'])) {
            $_SESSION['toaster_message'] = "Please accept the Terms and Conditions.";
            $_SESSION['toaster_type'] = "error";
            header("Location: account.php"); // Redirect to avoid resubmission issues
            exit();
        }

        // Ensure other required fields are not empty
        if (!empty($username) && !empty($email) && !empty($password)) {
            $checkEmail = "SELECT * FROM user WHERE email=?";
            $stmt = $conn->prepare($checkEmail);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $_SESSION['toaster_message'] = "Email already exists!";
                $_SESSION['toaster_type'] = "error";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                $insertQuery = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($insertQuery);
                $stmt->bind_param("sss", $username, $email, $hashedPassword);
                
               
                if ($stmt->execute()) {
                    $_SESSION['toaster_message'] = "Successfully registered";
                    $_SESSION['toaster_type'] = "success";
                } else {
                    $_SESSION['toaster_message'] = "Error: " . $stmt->error;
                    $_SESSION['toaster_type'] = "error";
                }
            }
        } else {
            $_SESSION['toaster_message'] = "Please fill in all fields";
            $_SESSION['toaster_type'] = "error";
        }
    }



    // Login
    if (isset($_POST['login'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if (!empty($username) && !empty($password)) {
            // Check in the user table
            $checkUser = "SELECT * FROM user WHERE username=?";
            $stmt = $conn->prepare($checkUser);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $resultUser = $stmt->get_result();

            if ($resultUser->num_rows > 0) {
                $user = $resultUser->fetch_assoc();

                if (password_verify($password, $user['password'])) {
                    $_SESSION['toaster_message'] = "Login successful";
                    $_SESSION['toaster_type'] = "success";
                    echo "<script type='text/javascript'>setTimeout(function() { window.location.href = 'index2.php'; }, 2000);</script>";
                    exit();
                }
            }

            // admin 
            $checkAdmin = "SELECT * FROM admin WHERE username=?";
            $stmt = $conn->prepare($checkAdmin);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $resultAdmin = $stmt->get_result();

            if ($resultAdmin->num_rows > 0) {
                $admin = $resultAdmin->fetch_assoc();

                if (password_verify($password, $admin['password'])) {
                    $_SESSION['toaster_message'] = "Admin login successful";
                    $_SESSION['toaster_type'] = "success";
                    echo "<script type='text/javascript'>setTimeout(function() { window.location.href = 'admin/index.php'; }, 2000);</script>";
                    exit();
                }
            }

            $_SESSION['toaster_message'] = "Invalid username or password";
            $_SESSION['toaster_type'] = "error";
        } else {
            $_SESSION['toaster_message'] = "Please fill in both username and password";
            $_SESSION['toaster_type'] = "error";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <title>Account - HERD CARE</title>
    <link rel="icon" href="Images/logo.png">
</head>

<style>

.toaster {
    position: fixed;
    top: 20px; 
    left: 50%; 
    transform: translateX(-50%) translateY(-100%); 
    padding: 15px 20px;
    background-color: #4CAF50; 
    color: white;
    font-size: 16px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    opacity: 0; 
}

.toaster.error {
    background-color: #f44336; 
}

.toaster.show {
    transform: translateX(-50%) translateY(0); 
    opacity: 1; 
}
/* Style for dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-menu {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 100px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 5px;
    padding: 10px 0;
}

.dropdown-menu a {
    display: block;
    padding: 5px 15px;
    text-decoration: none;
    color: black;
    transition: background-color 0.3s;
}

.dropdown-menu a:hover {
    background-color: #f2f2f2;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

p{
    color: black;
}
</style>

<body>

<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="Images/logo.png" width="100px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
            <li class="breadcrumbs-item"><a href="index.php" class="breadcrumbs-link">Home</a></li>
            <li class="breadcrumbs-item"><a href="product.php" class="breadcrumbs-link">Products</a></li>
            <li class="breadcrumbs-item"><a href="Contact.php" class="breadcrumbs-link">Contact Us</a></li>
            <li class="breadcrumbs-item"><a href="About.php" class="breadcrumbs-link">About Us</a></li>
            <li class="breadcrumbs-item dropdown">
    <a href="Account.php" class="breadcrumbs-link">Account</a>
    <div class="dropdown-menu">
        <a href="Account.php" class="dropdown-link">User </a>
        <a href="Admin/Account2.php" class="dropdown-link">Admin</a>
    </div>
</li>

            </ul>
        </nav>
    </div>
</div>

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img style="border-radius: 15%;" src="Images/WelcomeGirl.jpg" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>

                 
                    <form action="" method="POST" id="LoginForm">
                        <input type="text" placeholder="Username" name="username" required>
                        <input type="password" placeholder="Password" name="password" required>
                        <button type="submit" class="btn" name="login">Login</button>
                        <a href="forgotPassword.php">Forgot Password</a>
                    </form>

                
                    <form action="" method="POST" id="RegForm">
                        <input type="text" placeholder="Username" name="username" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" placeholder="Password" name="password" required>

                        <div style="margin-top: -10px; display: flex; align-items: center; font-size: 12px;">
                        <input type="checkbox" id="acceptTerms" name="acceptTerms" required style="width: 16px; height: 16px; margin-right: 5px;">
                        <label for="acceptTerms" style="font-size: 12px;">
                     I agree to the <a href="terms.php" target="_blank" style="color: blue;">Terms and Conditions</a>
             </label>
             </div>

         <button type="submit" class="btn" name="signUp" style="margin-bottom:50px;">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    
</footer>
<!-- Custom Toaster -->
<div id="toaster" class="toaster"></div>

<script>

document.addEventListener("DOMContentLoaded", function() {
    const toaster = document.getElementById("toaster");

    <?php if (isset($_SESSION['toaster_message'])) { ?>
        toaster.innerText = "<?php echo $_SESSION['toaster_message']; ?>";
        toaster.classList.add("show");

        <?php if ($_SESSION['toaster_type'] == "error") { ?>
            toaster.classList.add("error");
        <?php } else { ?>
            toaster.classList.remove("error");
        <?php } ?>

        setTimeout(() => {
            toaster.classList.remove("show");
        }, 5000); 

       
        <?php unset($_SESSION['toaster_message']); ?>
        <?php unset($_SESSION['toaster_type']); ?>
    <?php } ?>
});

document.getElementById("RegForm").addEventListener("submit", function(event) {
    const termsCheckbox = document.getElementById("acceptTerms");
    if (!termsCheckbox.checked) {
        alert("You must agree to the Terms and Conditions to register.");
        event.preventDefault();
    }
});

var LoginForm = document.getElementById("LoginForm");
var RegForm = document.getElementById("RegForm");
var Indicator = document.getElementById("Indicator");

function register() {
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
}

function login() {
    RegForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(0px)";
}


window.onload = function() {
    window.history.pushState(null, null, window.location.href);
    window.onpopstate = function() {
        window.history.pushState(null, null, window.location.href);
    };
};
</script>

</body>
</html>