<?php
	
	$con = mysqli_connect("localhost", "root", "", "user");
	
	if(!$con)
	{
		echo 'Not Connected To Server';
	}
	
	if(!mysqli_select_db($con,'sgtrave1_test'))
	{
		echo 'Database Not Selected';
	}
	
	$Name = $_POST['username'];
	$No = $_POST['no'];
	$Email = $_POST['email'];
	$Subject = $_POST['subject'];
	
	$sql = "INSERT INTO person (Name,No,Email,Subject) VALUES ('$Name', '$No', '$Email', '$Subject')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	
	header("refresh:2; url=hubungi.html");

?>
	