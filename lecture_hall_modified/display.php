<html>
    <body style="background-color:green">
        <style type="text/css">
h1 {color:yellow;}
h2 {color:Cyan;}
h3 {color:SpringGreen;}
</style>

        
<table align="center" width="1050" height="150" cellspacing="3" cellpadding="0" border="3" style="margin-top:0"bgcolor="MediumOrchid">
                    <tr>
                    <td bgcolor="white" style="text-align:center;"><img src="Nitt-logo.png"  height="150" width="80"> </td>
                    <td><h1 style="text-align:center;">NATIONAL INSTITUTE OF TECHNOLOGY </h1>
                        <h1 style="text-align:center;">TIRUCHIRAPPALLI 620 015</h1>
                                <h2 style="text-align:center;">ALL BOOKED ROOMS</h2></td>
                                </tr>
                                </table>  
        <br>  </br>
<?php
     $connect=mysql_connect("localhost","root","") or die("Couldn't connect!");
         mysql_select_db("timetable") or die("Couldn't find data in db");
		  $query= mysql_query("SELECT * From rtable where rno>0&&rno<=500");
         $numrows = mysql_num_rows($query);
		 if($numrows!=0)
		 {
		    Print "<table border cellpadding=3 bgcolor=green>";
			print "<tr>";
			print "<th>Department id:</th><th>Enter Time:</th><th>LeaveTime:</th><th>Day</th><th>Room No</th> ";
		     while ($row = mysql_fetch_assoc($query))
			{
				print "<tr>";
				Print "<td>".$row['dept_id'] . "</td> "; 
				Print " <td>".$row['class_arrival_time'] . "</td> "; 
				Print "<td>".$row['class_leving_time'] . "</td> "; 
				Print "<td>".$row['day'] . "</td>"; 
			        Print "<td>".$row['rno'] . "</td> </tr>";
                                
                        }
			print "</table>";
		
		 }
		 else
		   die("no records found");
?>

        
                </body>
        </html>