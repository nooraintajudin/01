<?php>
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

mysql_connect("localhost:3306","root","");
mysql_select_db("sgtrave1_test");
$select="insert into project(name,email,message) values ('".$name"'.'".$email"'.'"$message"')";
$sql=mysql_query($select);

print '<script type="text/javascript">';
print 'alert("The data is inserted....")';
print '</script>';

mysql_close();
?>