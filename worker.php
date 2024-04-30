<?php

$host = "127.0.0.1"; // Host name
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "housemaid"; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepare SQL statement
    $sql = "INSERT INTO worker (id, name, email) VALUES (?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $id, $name, $email);

    // Execute statement
    if ($stmt->execute()) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data from web to database</title>
</head>
<body>
    <style>
        body {
            background-color: #ff9800; /* Orange background */
            color: #333; /* Dark gray text color */
            font-family: Arial, sans-serif; /* Default font family */
        }
        h2 {
            color: #333; /* Dark gray heading color */
        }
        a {
            color: #333; /* Dark gray link color */
        }
        a:hover {
            text-decoration: underline; /* Underline link on hover */
        }
    </style>
    <center>
    <h2>Worker Page</h2>
    <p>This is the page to add workers.</p>
    <a href="home1.php">Back to Main Page</a>


    <h2>Insert Data from worker</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</center>
</body>
</html>
 