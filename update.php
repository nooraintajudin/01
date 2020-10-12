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
$nama_peg = mysqli_real_escape_string($link, $_REQUEST['nama_peg']);
$diagnosa = mysqli_real_escape_string($link, $_REQUEST['diagnosa']);
$jenis_ubat = mysqli_real_escape_string($link, $_REQUEST['jenis_ubat']);

// attempt insert query execution
$sql = "UPDATE doktor set nama_peg = '$nama_peg', diagnosa =  '$diagnosa', jenis_ubat = '$jenis_ubat' where no_tentera = '$no_tentera'";


if(mysqli_query($link, $sql)){
    echo "Records  updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>