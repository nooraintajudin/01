<?php
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select no_tentera from users where no_tentera = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['no_tentera'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:user.php");
   }
?>