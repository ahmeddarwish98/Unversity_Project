<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> depart_add </title>
</head>

<body>

<?php

if($_REQUEST["Dep_Name"] =="")
	{
		echo("<script>alert('Please Enter Dep Name');</script>");
	}
else
    {
	   if($_REQUEST["Fac_Name"] =="0")
	   {
		echo("<script>alert('Please Enter Fac Name');</script>");
	   }
      
	   else
	       {
			 include("db_connection.php");
	   
	         $act=0;
	           if($_REQUEST["act"] == 1)
		        {
		        	$act=1;
	        	}
	
		        $res = mysql_query("Select * from depart where Dep_Name='".$_REQUEST["Dep_Name"]."'");
	
	          if($row=mysql_fetch_array($res))
		        {
		        	echo("<script>alert('Special exist');</script>");
		        }
	
  	         else
		        {
		           $res1 = mysql_query("insert into depart(Dep_Name,Dep_Numbers,Dep_Dactivation) values('".$_REQUEST["Dep_Name"]."','".$_REQUEST["Dep_Numbers"]."',".$act.")");
	
			        echo("<script>alert('Special inserted');</script>");
		        }
		   }
    }
 mysql_close($con)			

?>

</body>
</html>