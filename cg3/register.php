<?php
require 'current_page.php';
require 'connection.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Register</title>
</head>

<body>
<?php
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$college = $_POST['college'];
$contact = $_POST['contact'];
$query1 = "SELECT * FROM `users` WHERE `username` = '$username' OR `email` = '$email'";
$query1_run = mysql_query($query1);
if($query_rows = mysql_num_rows($query1_run)){
echo 'username or email already in use';
}	else{
$query = "INSERT INTO `users`(`id`, `name`, `username`, `password`, `email`,`college`, `contact`) VALUES ('','".mysql_real_escape_string($name)."','".mysql_real_escape_string($username)."','".mysql_real_escape_string(md5($password))."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($college)."','".mysql_real_escape_string($contact)."')";
$query_run = mysql_query($query);
echo ' Successfully registered';
}
?>
</body>

</html>
