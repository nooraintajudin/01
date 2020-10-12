<?php 
//insert.php
$connect = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
if(isset($_POST["framework"]))
{
 $framework = '';
 foreach($_POST["framework"] as $row)
 {
  $framework .= $row . ', ';
 }
 $framework = substr($no_tentera,$nama_peg,$diagnosa,$jenis_ubat, 0, -2);
 $query = "INSERT INTO INSERT INTO keputusan_diagnos (no_tentera, nama_peg, diagnosa, jenis_ubat) VALUES ('$no_tentera', '$nama_peg', '$diagnosa', '$jenis_ubat')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>