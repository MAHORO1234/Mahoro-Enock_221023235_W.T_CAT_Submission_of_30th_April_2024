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
    $sql = "INSERT INTO manager (id, name, email) VALUES (?, ?, ?)";

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

// Fetch data from database
$sql = "SELECT id, name, email FROM manager";
$result = $conn->query($sql);

// Close connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Page</title>
    <style>
        body {
            background-color: #3f51b5;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #fff;
        }
        a {
            color: #fff;
        }
        a:hover {
            text-decoration: underline;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #fff;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #1e88e5;
        }
        tr:nth-child(even) {
            background-color: #64b5f6;
        }
        .btn {
            cursor: pointer;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Manager Page</h2>
    <p>This is the page to add managers.</p>
    <a href="home1.php">Back to Main Page</a>

    <h2>Insert Data from Manager</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Manager Data</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td><button class='btn' onclick='editRecord(".$row["id"].")'>Edit</button> <button class='btn' onclick='deleteRecord(".$row["id"].")'>Delete</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>

    <script>
        function editRecord(id) {
            // Redirect to edit page or implement edit functionality here
            // You can pass the ID to the edit page using query parameters
            window.location.href = "edit.php?id=" + id;
        }

        function deleteRecord(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                // Send AJAX request to delete the record
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // Reload the page after successful deletion
                        window.location.reload();
                    }
                };
                xhttp.open("GET", "delete.php?id=" + id, true);
                xhttp.send();
            }
        }
    </script>
</body>
</html>
