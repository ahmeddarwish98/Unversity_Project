<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> faculty_add </title>
</head>

<body>

<?php

if($_REQUEST["Fac_Name"] =="")
	{
		echo("<script>alert('Please Enter Fac Name');</script>");
	}
	
	else
	{
       if($_REQUEST["Fac_Year"] =="")
	     {
		  echo("<script>alert('Please Enter Years');</script>");
	     }
	
	   else
	       {
			 if($_REQUEST["Fac_Students"] =="")
	            {
		          echo("<script>alert('Please Enter Students');</script>");
	             }
		  
			 else
	             {
                   if($_REQUEST["Fac_Departs"] =="")
	                 {
		               echo("<script>alert('Please Enter Departs');</script>");
	                 }
				
	               else
	                 {
		            	if($_REQUEST["Fac_Mobile"] =="")
	                      {
		                    echo("<script>alert('Please Enter Fac Mobile');</script>");
	                      }
					
						 else
	                        {
	                   		   include("db_connection.php");
	   
	                   		    $act=0;
	                            if($_REQUEST["act"] == 1)
		                         {
		                        	$act=1;
	        	                 }
	
		                         $res = mysql_query("Select * from faculty where Fac_Name='".$_REQUEST["Fac_Name"]."'");
	 
 	                   		     if($row=mysql_fetch_array($res))
		          	              {
		     	                  	echo("<script>alert('Special exist');</script>");
		      	                  }
	
  	        	                  else
		       	                   {
		       	                     $res1 = mysql_query("insert into faculty(Fac_Name,Fac_Students,Fac_Depart,Fac_Mobile,Fac_Dactivation,Fac_Year)
									                     values('".$_REQUEST["Fac_Name"]."',".$_REQUEST["Fac_Students"].",".$_REQUEST["Fac_Departs"].",
														        '".$_REQUEST["Fac_Mobile"]."',".$act.",".$_REQUEST["Fac_Year"].")");
	
			        	             echo("<script>alert('Special inserted');</script>");
								   }
							}
				    }
			}
	  }
}

mysql_close($con)			
?>

</body>
</html>
