<?php
	
	header('Content-Type:text/html;charset=utf-8');

	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PWD','seagull');
	define('DB_NAME','blog');
	$con = mysqli_connect("localhost","root","seagull");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	mysqli_select_db($con,'blog'); 
	$query = "SELECT user FROM blog_user WHERE user='{$_POST['reg_user']}'";
	$flag = mysqli_query($con,$query) or die('SQL出错');
	
	sleep(3); //模拟网络延迟
	if( mysqli_fetch_array($flag,MYSQLI_ASSOC) )
	{
		echo 1;
	}
	mysqli_close($con);

?>