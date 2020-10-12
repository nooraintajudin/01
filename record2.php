<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);

// attempt insert query execution
$sql = "select * FROM data_pesakit where username = '$username'";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "NO.TENTERA: " . $row["username"]. " - NAMA: " . $row["name"]. "   - TARIKH:   " . $row["date"]. " - JANTINA: " . $row["gender"]. " - BP: " . $row["bp"]. " - PULSE: " . $row["pulse"]. " - PR: " . $row["pr"]. " - SUHU: " . $row["temp"]."<br>";
    }
} else {
    echo "0 results";
}
// close connection

mysqli_close($link);
?>