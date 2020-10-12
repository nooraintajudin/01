<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
 
// Check connection
if($link === false)

    {
    
      die("ERROR: Could not connect. " . mysqli_connect_error());
    
    }   
 
// Escape user inputs for security
$no_tentera = mysqli_real_escape_string($link, $_REQUEST['no_tentera']);

// attempt insert query execution

$sql = "SELECT * FROM users where no_tentera = '$no_tentera'";

$result = $link->query($sql);

if ($result->num_rows > 0) 

    {

      $sql = "DELETE FROM users where no_tentera = '$no_tentera'";

        if(mysqli_query($link, $sql)) 
     
        {
     
          echo "<script>alert('Records deleted.')</script>";
      
        } 
              
     }
      
else  

    {
 
      echo "<script>alert('Record not found')</script>";
      
    }   
  

// close connection
mysqli_close($link);

?>