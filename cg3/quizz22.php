<?php
require 'current_page.php'; 
require 'connection.php';
static $qid = 1;

if(!loggedin()){
	echo("Please Login !!");
	header('Location: must.html');
}

//echo 'last qid '.$_POST['qid'].'<br>last ans = '.$_POST['opt'].'<br>';
date_default_timezone_set('Asia/Kolkata');
	$hour = date('h', time());
	date_default_timezone_set('Asia/Kolkata');
	$min = date('i', time());
	$finish = false;
	if(!(($hour == 9 && $min>=30) || ($hour==10 && $min < 30)))
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
		mysql_query("UPDATE `users` SET point=$point where `id`=$userID");
	}elseif($last_ans != ""){
//		echo '<br>incorrect ans';
//		echo "current point = $point";
		$point = $point - 2;
//		echo "after point = $point";
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
<head>

	   <noscript>
	      <meta http-equiv="refresh" content="0; URL=2.html">
	  </noscript>

</head>
<body>
<!--<div align="center" style="margin:15px 0px 0px 0px"><noscript><div align="center" style="width:140px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold"><a style="padding:2px 1px;margin:2px 1px;font-size:13px;line-height:16px;font-family:arial;text-decoration:none;color:#000" href="http://localtimes.info/Asia/India/New_Delhi/"><img src="http://localtimes.info/images/countries/in.png" border=0 style="border:0;margin:0;padding:0">&nbsp;&nbsp;New Delhi </a></div></noscript><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Asia&country=India&city=New Delhi&color=black-white&widget_number=1000&fwdt=135&lab=1&hbg=1"></script></div><!-end of code-->
<?php 
//echo "qid = $qid\n";
$query = "SELECT `question`,`binary` FROM `quiz` WHERE `qid`=".mysql_real_escape_string($qid)."";
$query_run = mysql_query($query);
if(mysql_num_rows($query_run) == 0){
	//header('Location: completed.php');
	die("You have Successfully Completed the Quiz !!  Congratualations. Results will be out by midnight !!");
}
$row = mysql_fetch_array($query_run);
echo("<p>".$row['question']."</p>");
//echo 'binary : '.$row['binary'];
$bin = $row['binary'];
?>
<div <?php if($bin==1){echo 'style="display: none;"';} ?> >
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
</form></div>

<?php
 // echo 'a;sldfkjsadlf = '.$bin;
?>
<div <?php if($bin==0){echo 'style="display: none;"';} ?> >
<form action="quizz.php" method="POST" >
<input type="text" name="opt" />
<input type="text" name="qid" value=<?php echo $qid; ?> hidden="true" />
<input type="submit" value="next" />
</form></div>

<!--<input type='submit" value="Next" onclick=-->
</body>
</html>