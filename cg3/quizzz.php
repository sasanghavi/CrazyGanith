<?php
require 'current_page.php'; 
require 'connection.php';
//static $qid = 1;
$qid = mysql_query("SELECT `attempted` FROM `users` WHERE `id`=$_SESSION[user_id]");
//echo $qid;
$row = mysql_fetch_array($qid);
$qid = $row['attempted']+1;
$check = "SELECT `taken` FROM `users` WHERE `id` = $_SESSION[user_id]";
$check_run = mysql_query($check);
while($row1 = mysql_fetch_assoc($check_run)){
$bit = $row1['taken'];
}

if($bit!=0){
echo "You have already taken the quiz once<br/>";
header('Location: completed.html');
}
if(!loggedin()){
	echo("Please Login !!");
	header('Location: must.html');
}

 //$p2 = mysql_query("SELECT `point` from `users` where `id`=$_SESSION['user_id']");
 //$row2 = mysql_fetch_array($p2);
 //echo $row2;
 //static $point2 = $row2['point'];
 //  $zero = '0';
// mysql_query("UPDATE `users` SET `point`= $zero where `id`=$_SESSION[user_id]");
if($bit==0){

//echo 'last qid '.$_POST['qid'].'<br>last ans = '.$_POST['opt'].'<br>';
date_default_timezone_set('Asia/Kolkata');
	$hour = date('h', time());
	date_default_timezone_set('Asia/Kolkata');
	$min = date('i', time());
	$finish = false;
	if(($hour == 12&& $min<=10))
	{
	  die("Quiz has not started yet...Chilll ");
	}
	
	if(!(($hour == 12&& $min>=30) || ($hour==1&& $min < 30)))
	{
	  die("Time Over .<br/> Results will be out by midnight. All the best !! ");
	}

if(isset($_POST['qid'])){
//	echo "entered";
	$qid = $_POST['qid'];
	$ans = mysql_query("SELECT `ans` FROM `quiz` WHERE `qid`='".mysql_real_escape_string($qid)."'");
	$row = mysql_fetch_array($ans);
	$ans = $row['ans'];
//	echo '<br> expected : '.$ans;
	$last_ans = $_POST['opt'];
	$userID = $_SESSION['user_id'];
	$point = mysql_query("SELECT `point` from `users` where `id`=$userID");
	$row = mysql_fetch_array($point);
	$point = $row['point'];
	
	
	if($ans == $last_ans){
//	echo '<br/>';
//		echo '<br>correct ans';
//		echo "current point = $point";
		$point= $point + 5;
//		echo "after point = $point";
		mysql_query("UPDATE `users` SET attempted=$qid where `id`=$userID");
		mysql_query("UPDATE `users` SET point=$point where `id`=$userID");
	}elseif($last_ans != ""){
//		echo '<br>incorrect ans';
//		echo "current point = $point";
		$point = $point - 2;
//		echo "after point = $point";
		mysql_query("UPDATE `users` SET attempted=$qid where `id`=$userID");
		mysql_query("UPDATE `users` SET point=$point where `id`=$userID");
	}
	$qid = $qid + 1;
}/*
$question = $_POST['question'];
$ans = $_POST['ans'];
$opt1 = $_POST['opt1'];
$opt2 = $_POST['opt2'];
$opt3 = $_POST['opt3'];
$opt4 = $_POST['opt4'];
$binary = $_POST['binary']; 
	*/
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
<head>

	   <noscript>
	      <meta http-equiv="refresh" content="0; URL=2.html">
	  </noscript>
	  
	  	<link rel="stylesheet" type="text/css" href="css/cskf2.css">
	
	
	<link href="css/style2.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" type="text/css" href="css/style92.css">
    <link rel="stylesheet" type="text/css" href="css/demo2.css">    

<link rel="shortcut icon" href="icon.png">
<link href="css" rel="stylesheet" type="text/css">


<script type="text/javascript" async="" src="css/ga.js"></script><script src="css/jquery-1.6.3.min.js" type="text/javascript"></script>
<script src="css/jquery.spritely-0.6.js" type="text/javascript"></script>

</head>
<body>

 <div id="mainLogo"><a href="https://synapse.daiict.ac.in/cg/"target="_blank"><img onclick="part()" src="images/new.png" width="350" style="padding-left:5%;" alt="CRAZY GANITH (Synapse-2013)"></a></div>
   <div id="nav_social">	
   <a href="https://www.facebook.com/events/131888113652942" target="_blank"><img src="images/facebook_32.png" alt="Become a fan" width="32" height="32"></a>
		<a href="awards.html" target="_blank"><img src="images/gift.png" alt="Prizes"></a>
		<a href="proepi.html"target="_blank"><img src="images/qm.png" alt="Rules"></a>
		<a href="connect1.html"target="_blank"><img src="images/email_32.png" alt="Contact" width="32" height="32"></a>	</div>
  <div id="logout">
<form action="logout.php" method="POST" >
<input type="submit" value="Logout" />
</form>
</div>
  
<div id="cent">
<div id="quest">
 <?php 
//echo "qid = $qid\n";
$query = "SELECT `question`,`binary` FROM `quiz` WHERE `qid`=".mysql_real_escape_string($qid)."";
$query_run = mysql_query($query);
if(mysql_num_rows($query_run) == 0){
	//header('Location: completed.php');
	//$taken = "SELECT `taken` FROM `users` WHERE `id` = $_SESSION['user_id'];
	//$taken_query = mysql_query($taken);
	$taken = "UPDATE `users` SET `taken` = 1 WHERE `id`= $_SESSION[user_id]";
	$taken_run = mysql_query($taken);
	die("You have Successfully Completed the Quiz !!  Congratualations. Results will be out by midnight !!");
}
$row = mysql_fetch_array($query_run);
echo("<p> Q .".$qid." ".$row['question']."</p>");
//echo 'binary : '.$row['binary'];
$bin = $row['binary'];
?>
</div>


<div <?php if($bin==1){echo 'style="display: none;"';} ?>  id="formq" >
<form action="quizz.php" method="POST" >
<input type="radio" name="opt" value=<?php $query2 = "SELECT `opt1` FROM `quiz` WHERE `qid`=".mysql_real_escape_string($qid).""; $query_run2=mysql_query($query2); $row = mysql_fetch_array($query_run2); echo('"'.$row['opt1'].'"');?> />
<label ><?php echo $row['opt1'];?></label><br>
<input type="radio" name="opt" value=<?php $query3 = "SELECT `opt2` FROM `quiz` WHERE `qid`=".mysql_real_escape_string($qid).""; $query_run3=mysql_query($query3); $row = mysql_fetch_array($query_run3); echo('"'.$row['opt2'].'"');?> />
<label ><?php echo $row['opt2'];?></label><br>
<input type="radio" name="opt" value=<?php $query4 = "SELECT `opt3` FROM `quiz` WHERE `qid`=".mysql_real_escape_string($qid).""; $query_run4=mysql_query($query4); $row = mysql_fetch_array($query_run4); echo('"'.$row['opt3'].'"');?> />
<label ><?php echo $row['opt3'];?></label><br>
<input type="radio" name="opt" value=<?php $query5 = "SELECT `opt4` FROM `quiz` WHERE `qid`=".mysql_real_escape_string($qid).""; $query_run5=mysql_query($query5); $row = mysql_fetch_array($query_run5); echo('"'.$row['opt4'].'"');?> />
<label ><?php echo $row['opt4'];?></label><br>
<input type="text" name="qid" value=<?php echo $qid; ?> hidden="true" />
<input type="submit" value="next" />
</form>
</div></div>

<?php
 // echo 'a;sldfkjsadlf = '.$bin;
?>
<div <?php if($bin==0){echo 'style="display: none;"';} ?> >
<form action="quizz.php" method="POST" >
<input type="text" name="opt" />
<input type="text" name="qid" value=<?php echo $qid; ?> hidden="true" />
<input type="submit" value="next" />
</form>
</div>
<div id="sponsors">


<img src="images/sub.jpeg" width="35%" align="center">
</div>

<div id="summary">
<p><a href="#" target="_blank">Synapse-2013</a>
  Copyright &copy; <a href="connect1.html" target="_blank">Crazy Gantih team-2013</a></p></div>
<!--<input type='submit" value="Next" onclick=-->
</body>
</html>