<?php
$servername = "localhost";
$username = "sgtrave1_person";
$password = "fakhari88";
$dbname = "sgtrave1_user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Name, No, Email, Subject FROM person";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Name"]. " - No: " . $row["No"]. " " . $row["Email"]. " -Subject: " . $row["Subject"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>