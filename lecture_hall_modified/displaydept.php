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
                                <h2 style="text-align:center;">ALL REGISTERED DEPARTMENT</h2></td>
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