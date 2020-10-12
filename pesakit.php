<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link1 = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
$link2 = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
 
// Check connection
if($link1 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($link2 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$no_tentera = mysqli_real_escape_string($link1, $_REQUEST['no_tentera']);
$nama = mysqli_real_escape_string($link1, $_REQUEST['nama']);
$tarikh_lahir = mysqli_real_escape_string($link1, $_REQUEST['tarikh_lahir']);
$jenis_darah = mysqli_real_escape_string($link1, $_REQUEST['jenis_darah']);
$tinggi = mysqli_real_escape_string($link1, $_REQUEST['tinggi']);
$berat = mysqli_real_escape_string($link1, $_REQUEST['berat']);
$jantina = mysqli_real_escape_string($link1, $_REQUEST['jantina']);
$no_tentera = mysqli_real_escape_string($link2, $_REQUEST['no_tentera']);
$tarikh = mysqli_real_escape_string($link2, $_REQUEST['tarikh']);
$bp = mysqli_real_escape_string($link2, $_REQUEST['bp']);
$pulse = mysqli_real_escape_string($link2, $_REQUEST['pulse']);
$pr = mysqli_real_escape_string($link2, $_REQUEST['pr']);
$suhu = mysqli_real_escape_string($link2, $_REQUEST['suhu']);
 
// attempt insert query execution
$sql1 = "INSERT INTO rekod_pesakit(no_tentera, nama, tarikh_lahir, jenis_darah, tinggi, berat, jantina) VALUES ('$no_tentera', '$nama', '$tarikh_lahir', '$jenis_darah', '$tinggi', '$berat', '$jantina')";

$sql2 = "INSERT INTO diagnos_awal(no_tentera, tarikh, bp, pulse, pr, suhu) VALUES ('$no_tentera', '$tarikh', '$bp', '$pulse', '$pr', '$suhu')";


if(mysqli_query($link1, $sql1)){
    echo "<script>alert('Records  added successfully')</script>";

} else{
    echo "<script>alert('ERROR: Could not able to execute $sql1.')</script>" . mysqli_error($link1);
}

if(mysqli_query($link2, $sql2)){
    // echo "Records  added successfully.";

} else{
    echo "<script>alert('ERROR: Could not able to execute $sql2.')</script>" . mysqli_error($link2);
}
 
// close connection
mysqli_close($link1);

Mysqli_close($link2);


?>