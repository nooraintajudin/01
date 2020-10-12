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
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$bp = mysqli_real_escape_string($link, $_REQUEST['bp']);
$pulse = mysqli_real_escape_string($link, $_REQUEST['pulse']);
$pr = mysqli_real_escape_string($link, $_REQUEST['pr']);
$temp = mysqli_real_escape_string($link, $_REQUEST['temp']);

// attempt insert query execution
$password = sha1($password);
$sql = "UPDATE data_pesakit set name = '$name', date =  '$date', gender = '$gender', bp =  '$bp', pulse = '$pulse', pr =  '$pr', temp = '$temp' where username = '$username'";


if(mysqli_query($link, $sql)){
    echo "Records  updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>