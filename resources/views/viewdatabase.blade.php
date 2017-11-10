<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT firstName, lastName, username, password, gradYear FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["firstName"]. " " . $row["lastName"]. " - Username: " . $row["username"]. " - Password: " .$row["password"]. " - Expected Graduation Year: " .$row["gradYear"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>