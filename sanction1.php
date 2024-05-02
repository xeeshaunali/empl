<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "emp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to count rows for each distinct value in the "status" column
$sql = "SELECT designation, COUNT(*) as count FROM employee GROUP BY designation";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output Bootstrap table
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name of Post</th>
                    <th>Scale</th>
                </tr>
            </thead>
            <tbody>";

    // Initialize serial number
    $serialNumber = 1;

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $serialNumber . "</td>
                <td>" . $row["designation"] . "</td>
                <td>" . $row["bps"] . "</td>
                <td>" . $row["count"] . "</td>
              </tr>";

        // Increment serial number
        $serialNumber++;
    }

    // Close Bootstrap table
    echo "</tbody>
          </table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();

?>
