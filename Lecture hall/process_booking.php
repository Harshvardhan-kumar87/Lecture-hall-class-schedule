<?php

$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("timetable",$link) or die("can not select database");
		
		$deptid=$_POST['deptid'];
		$dname=$_POST['dname'];
		$bname=$_POST['bname'];
		$cyear=$_POST['cyear'];
		
		$q="insert into ttable(dept_id,dept_name,branch_name,year)
	    values('$deptid','$dname','$bname','$cyear')";
		   
		mysql_query($q,$link)or die("wrong query");
		mysql_close($link);
		header("location:room_book.php");
	
?>
