


<?php session_start();
if(empty($_POST))
{
	exit;
}





	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("timetable",$link) or die("can not select database");
	
	$q = "select * from adm where user_name = '".$_POST['user']."'";
	
	$res = mysql_query($q,$link) or die("wrong query");
	
	$row = mysql_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['pass']==$row['passw'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['user']=$row['user_name'];
			$_SESSION['pass']=$row['passw'];
			
			
			header("location:roomissu.php");
		}
		else
		{
			echo "Wrong Password";
		}
	}
	else
	{
		echo "No Such User";
	}
	
	
	

?>