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
$kata_laluan1 = mysqli_real_escape_string($link, $_REQUEST['kata_laluan1']);
$emel = mysqli_real_escape_string($link, $_REQUEST['emel']);
$kategori = mysqli_real_escape_string($link, $_REQUEST['kategori']);

if (strlen($kata_laluan) > 3)

{

if ($kata_laluan == $kata_laluan1) 

{

echo "Password OK and ";
// attempt insert query execution
$kata_laluan = sha1($kata_laluan);
$sql = "INSERT INTO users (no_tentera, kata_laluan, emel, kategori) VALUES ('$no_tentera', '$kata_laluan', '$emel', '$kategori')";

if(mysqli_query($link, $sql)){
    echo "Records  added successfully.";
  
} else {

    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
    echo "<script>alert('ERROR: Cannot insert data')</script>";      
}
 

}

else

{

echo "Password not verified";

}

}

else

{

echo "Password length must be over 8.Now is: "  ;
echo strlen($kata_laluan);


}
// close connection
mysqli_close($link);

?>