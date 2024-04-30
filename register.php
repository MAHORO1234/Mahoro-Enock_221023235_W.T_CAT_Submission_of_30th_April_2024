<?php
// Increase maximum execution time to 300 seconds (5 minutes)
set_time_limit(300);

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Update with your database password
$dbname = "housemaid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitize_input($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

// Initialize variables
$name = $email = $telephone = $password = "";
$name_err = $email_err = $telephone_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    } else {
        $name = sanitize_input($_POST["name"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = sanitize_input($_POST["email"]);
    }

    // Validate telephone
    if (empty(trim($_POST["telephone"]))) {
        $telephone_err = "Please enter your telephone number.";
    } else {
        $telephone = sanitize_input($_POST["telephone"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } else {
        $password = $_POST["password"]; // No need to sanitize password
    }

    // Check input errors before inserting into database
    if (empty($name_err) && empty($email_err) && empty($telephone_err) && empty($password_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO `register` (`name`, `email`, `contact`, `password`) VALUES (?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $param_name, $param_email, $param_contact, $param_password);

            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_contact = $telephone;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to homepage or success page
                header("location: home1.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 360px;
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .container p {
            margin-bottom: 30px;
            color: #666;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: calc(100% - 12px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group span.error {
            color: red;
            font-size: 12px;
            display: block;
            margin-top: 5px;
        }

        .form-group input[type="submit"],
        .form-group input[type="reset"] {
            width: 49%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group input[type="submit"]:hover,
        .form-group input[type="reset"]:hover {
            background-color: #1e88e5;
            color: #fff;
        }

        .form-group input[type="reset"] {
            background-color: #ccc;
            color: #333;
            margin-left: 2%;
        }

        .form-footer {
            margin-top: 20px;
            color: #666;
        }

        .form-footer a {
            color: #1e88e5;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                <span class="error"><?php echo $name_err; ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone (Contact)</label>
                <input type="text" id="telephone" name="telephone">
                <span class="error"><?php echo $telephone_err; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <span class="error"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
            <p class="form-footer">Already have an account? <a href="login.php">Login</a>.</p>
        </form>
    </div>
</body>
</html>

