<?php

$dsn = 'mysql:host=localhost;dbname=diagnosis';
$username = 'root';
$password = 'ain6314';

try{

	$con = new PDO($dsn,$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (Exception $ex) {

	echo 'Not Connected'.$ex->getMessage();
	
}

$username = '';
$name = '';
$date = '';
$gender = '';
$bp = '';
$pulse = '';
$pr = '';
$temp = '';

function getPost()
{
	$posts = array();
	$posts[0] = $_POST['username'];
	$posts[1] = $_POST['name'];
	$posts[2] = $_POST['date'];
	$posts[3] = $_POST['gender'];
	$posts[4] = $_POST['bp'];
	$posts[5] = $_POST['pulse'];
	$posts[6] = $_POST['pr'];
	$posts[7] = $_POST['temp'];
	
	return $posts;
}

//Search And Display Data

if (isset($_POST['search']))
{
	$data = getPosts();
	if(empty($data[0]))
	{
		echo 'Enter The User Id To Search';
	}	else {
	
		$searchStmt = $con->prepare('SELECT * FROM data_pesakit WHERE username = :username');
		$searchStmt->execute(array(
					'username'=> $data[0]
		));
		
		if($searchStmt)
		{
			$user = $searchStmt->fetch();
		
			$username 	= $user[0];
			$name 		= $user[1];
			$date 		= $user[2];
			$gender 	= $user[3];
			$bp		 	= $user[4];
			$pulse		= $user[5];
			$pr 		= $user[6];
			$temp		= $user[7];
		}
	}
}

?>