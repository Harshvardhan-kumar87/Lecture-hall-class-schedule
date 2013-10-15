<?php

$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("timetable",$link) or die("can not select database");
		
		$deptid=$_POST['deptid'];
		$arrtime=$_POST['arrtime'];
		$letime=$_POST['letime'];
		$cday=$_POST['cday'];
                $roomno=$_POST['roomno'];
		
		
		$q="insert into rtable(dept_id,class_arrival_time,class_leving_time,day,rno)
	    values('$deptid','$arrtime','$letime','$cday','$roomno')";
		   
		mysql_query($q,$link)or die("wrong query");
		mysql_close($link);
		header("location:room_book.php");
	
?>
