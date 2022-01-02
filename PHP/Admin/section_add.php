<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> section_register </title>
</head>

<body>

<?php

if($_REQUEST["Sect_Name"] =="")
	{
		echo("<script>alert('Please Enter Sect Name');</script>");
	}
	
	else
	{
       if($_REQUEST["Sect_Capacity"] == "")
	     {
		  echo("<script>alert('Please Sect Capacity');</script>");
	     }
      
	   else
	       {
			 if($_REQUEST["Sect_Instructor"] =="")
	            {
		          echo("<script>alert('Please Enter Sect Instructor');</script>");
	             }
				 
			 else
	             {
                   if($_REQUEST["Sect_Type"] =="")
	                 {
		               echo("<script>alert('Please Enter Sect Type');</script>");
	                 }
      
	               else
	                  {
	                   		   include("db_connection.php");
	   
	                   		    $act=0;
	                            if($_REQUEST["act"] == 1)
		                         {
		                        	$act=1;
	        	                 }
	
		                         $res = mysql_query("Select * from section where Sect_Name='".$_REQUEST["Sect_Name"]."'");
	 
 	                   		     if($row=mysql_fetch_array($res))
		          	              {
		     	                  	echo("<script>alert('Special exist');</script>");
		      	                  }
	
  	        	                  else
		       	                   {
		       	                     $res1 = mysql_query("insert into section(Sect_Name,Sect_Capacity,Sect_Instructor,Sect_Type,Sect_Dactivation)
									                 values('".$_REQUEST["Sect_Name"]."','".$_REQUEST["Sect_Capacity"]."','".$_REQUEST["Sect_Instructor"]."',                                                             '".$_REQUEST["Sect_Type"]."',".$act.")");
	
			        	             echo("<script>alert('Special inserted');</script>");
								   }
					  }
				
			}
	  }
}						 
?>

</body>
</html>