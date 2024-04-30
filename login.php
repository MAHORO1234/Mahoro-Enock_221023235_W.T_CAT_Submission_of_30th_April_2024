<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Update with your database password
$database = "housemaid"; // Update with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch values from the form and sanitize
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // SQL query to check user credentials
    $sql = "SELECT * FROM register WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if ($hashed_password === null) {
            // Handle null password appropriately (e.g., redirect to registration page)
            $error = "Your account is not set up. Please register first.";
        } elseif (password_verify($password, $hashed_password)) {
            // Password is correct, set session
            $_SESSION['loggedin'] = true;

            // Redirect to homepage or dashboard
            header("Location: home1.php");
            exit();
        } else {
            // Invalid password
            $error = "Invalid password";
        }
    } else {
        // User not found
        $error = "User not found";
    }
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add your CSS styles here -->
</head>
<body>
    <center>
    <h2>Login</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>


    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    </center>
</body>
</html>
