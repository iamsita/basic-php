<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sqlQuery = "SELECT id, name, email FROM users";
$result = $conn->query($sqlQuery);

if ($result->num_rows > 0) {
    echo "
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["email"] . "</td><
        /tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
