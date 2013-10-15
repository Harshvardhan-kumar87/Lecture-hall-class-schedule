<html>
    <body style="background-color:green">
        
        <table bgcolor="Purple" cellspacing="3" cellpadding="0" border="1" align="center">
<tr>
    <td><h1 align="center">NATIONAL INSTITUTE OF TECHNOLOGY TIRUCHIRAPPALLI</h></td></tr>
 <tr>
    <td><h2 align="center">ALL REGISTERED DEPARTMENT</h2></td>
      
</tr>
</table>
        <br>
                 </br>
<?php
     $connect=mysql_connect("localhost","root","") or die("Couldn't connect!");
         mysql_select_db("timetable") or die("Couldn't find data in db");
		  $query= mysql_query("SELECT * From ttable ");
         $numrows = mysql_num_rows($query);
		 if($numrows!=0)
		 {
		    Print "<table border cellpadding=3 bgcolor=green>";
			print "<tr>";
			print "<th>Department id:</th><th>Department Name:</th><th>Branch Name:</th><th>Course Year</th> ";
		     while ($row = mysql_fetch_assoc($query))
			{
				print "<tr>";
				Print "<td>".$row['dept_id'] . "</td> "; 
				Print " <td>".$row['dept_name'] . "</td> "; 
				Print "<td>".$row['branch_name'] . "</td> "; 
				Print "<td>".$row['year'] . "</td></tr>"; 
			       
                                
                        }
			print "</table>";
		
		 }
		 else
		   die("no records found");
?>

        
                </body>
        </html>