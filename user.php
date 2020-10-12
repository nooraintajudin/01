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

 
// attempt insert query execution
$kata_laluan = sha1($kata_laluan);

// attempt insert query execution
session_start();
$_SESSION['sess_user']=$no_tentera;
$sql = "select * FROM users where no_tentera = '$no_tentera' AND kata_laluan =  '$kata_laluan'";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$_SESSION['no_tentera'] = $no_tentera;
	header("Location:main_peg.php");die;
} else {
    echo "<script>alert('No tentera atau Kata Laluan anda salah')</script>";
}
// close connection

mysqli_close($link);

?>