<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link3 = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
 
// Check connection
if($link3 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$no_tentera=$_POST['no_tentera'];
$diagnosa=$_POST['diagnosa'];
$a=$_POST['jenis_ubat'];
$jenis_ubat=implode(',',$a);
$kuantiti=$_POST['kuantiti'];
 
// attempt insert query execution
$sql3 = "INSERT INTO keputusan_diagnos (no_tentera, diagnosa, jenis_ubat, kuantiti) VALUES ('$no_tentera', '$diagnosa', '$jenis_ubat', '$kuantiti')";

if(mysqli_query($link3, $sql3)){
    echo "<script>alert('Records  added successfully.')</script>";
    //header( "Location: list.php" ); die;
} else{
    echo "<script>alert('ERROR: Could not able to execute $sql3. ')</script>" . mysqli_error($link3);
}
 
// close connection
mysqli_close($link3);

?>