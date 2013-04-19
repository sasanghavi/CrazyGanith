<?php

date_default_timezone_set('Asia/Kolkata');
$hour = date('h', time());
date_default_timezone_set('Asia/Kolkata');
$minute = date('i', time());


echo ($hour);
	
	if(($hour == 9 && $min>=30) || ($hour==10 && $min < 30))
	{
	  echo("runtime");
	}
	else{
	  echo("Quiz Completed");
	}
	
	
?>