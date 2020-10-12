<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$no_tentera = mysqli_real_escape_string($link, $_REQUEST['no_tentera']);
$kata_laluan = mysqli_real_escape_string($link, $_REQUEST['kata_laluan']);
$emel = mysqli_real_escape_string($link, $_REQUEST['emel']);
$kategori = mysqli_real_escape_string($link, $_REQUEST['kategori']);

// attempt insert query execution
$kata_laluan = sha1($kata_laluan);
$sql = "UPDATE users set kata_laluan = '$kata_laluan', emel =  '$emel', kategori = '$kategori' where no_tentera = '$no_tentera'";

if(mysqli_query($link, $sql)){
    echo "<script>alert('Records  updated successfully')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>