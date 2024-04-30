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

// Check if ID parameter is set
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Prepare SQL statement
    $sql = "DELETE FROM manager WHERE id=?";
    
    // Prepare and bind parameter
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    // Execute statement
    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
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
    <!-- Head section remains the same -->
</head>
<body>
    <!-- Body section remains the same -->
    <script>
        // Update deleteRecord function to use the correct URL for delete.php
        function deleteRecord(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                // Send AJAX request to delete.php to delete the record
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

