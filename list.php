<?php
$servername = "localhost";
$username = "root";
$password = "ain6314";
$dbname = "diagnosis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT no_tentera, kata_laluan, emel, kategori FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "No_Tentera: " . $row["no_tentera"]. " - Kata Laluan: " . $row["kata_laluan"]. " - E-mel: " . $row["emel"]. " - Kategori: " . $row["kategori"]."<br>";
		
    }
} 

else
 
    {
    echo "0 results";
    }
    
    
$conn->close();

?>

