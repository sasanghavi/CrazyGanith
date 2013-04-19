<?php
require 'current_page.php';
require 'connection.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Login</title>
</head>

<body>
<?php
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT `id` FROM `users` WHERE `email`='".mysql_real_escape_string($email)."' AND `password`='".mysql_real_escape_string($password)."' ";
if($query_run = mysql_query($query)){
	$query_num_rows = mysql_num_rows($query_run);
	if($query_num_rows==0){
		header('Location: mismatch.html');
	} 	else if($query_num_rows==1){
		$user_id = mysql_result($query_run,0,'id');
		//mysql_query(UPDATE `users` SET `point`= 0 WHERE `id`=$_user_id);
		$_SESSION['user_id']= $user_id;
		header('Location: quizz.php');
		
		}
	}
	
?>

</body>

</html>
