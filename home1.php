<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        body {
            background-color: #f4a460; /* Light brown background */
            color: #333; /* Default text color */
            font-family: Arial, sans-serif; /* Default font family */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        h2 {
            color: #fff; /* White heading color */
        }
        a {
            color: #fff; /* White link color */
            text-decoration: none; /* Remove default underline */
            margin: 0 10px; /* Add margin between links */
            transition: color 0.3s ease; /* Smooth color transition */
        }
        a:hover {
            color: #ffc107; /* Yellow link color on hover */
        }
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            padding: 10px 0;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        marquee {
            color: #28a745; /* Green color for marquee */
            margin-top: 20px; /* Add some space between footer and marquee */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to my housemaid website</h2>
        <div>
            <h1><a href="manager.php">Manager</a></h1>
            <br>
            <h1><a href="worker.php">Worker</a></h1>
            <br>
            <h1><a href="customer.php">Customer</a></h1><h1>
                <br>
                <a href="government.php">Government</a></h1>
            <br>
           <h1> <a href="users.php">User</a></h1>
        </div>
    </div>
    <center>
    <!-- Back to Main Page link -->
    <?php if ($_SERVER['REQUEST_URI'] !== '/register.php') { ?>
        <div class="footer">
            <a href="register.php">Back to Main Page</a>
        </div>
    </center>
    <?php } ?>
    
    <!-- Marquee at the bottom of the page with green color -->
    <marquee behavior="scroll" direction="left" scrollamount="3">
        CBE $ BUSINESS # BIT DEPARTMENT AND IS PREPARED BY MAHORO ENOCK:221023235
    </marquee>
</body>
</html>
