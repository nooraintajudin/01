<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "sgtrave1_person", "fakhari88", "sgtrave1_user");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$No = mysqli_real_escape_string($link, $_REQUEST['No']);
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$Subject = mysqli_real_escape_string($link, $_REQUEST['Subject']);
 
// attempt insert query execution
$sql = "INSERT INTO person (Name, No, Email, Subject) VALUES ('$Name', '$No', '$Email', '$Subject')";

if(mysqli_query($link, $sql)){
    echo "Records  added successfully.";
    header( "Location: hubungi.html" ); die;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>