<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Student_register </title>
</head>

<body>

<?php
function PrintAlert($meg)
{
	echo("<script> alert('".$meg."');</script>");
}


if($_REQUEST["sn"] =="")
{
	PrintAlert("Please Enter Student Name");
}
	else
	{
		if($_REQUEST["address"] =="")
          {
	      PrintAlert("Please Enter Student Address");
          }
		  else
		  {
		    if(strlen($_REQUEST["phone"]) !=10 | $_REQUEST["phone"] =="")
		   {
			PrintAlert("Please Enter Phone num");
		   }
		
		   else
		   {
			 if(strlen($_REQUEST["mobile"]) != 11 | $_REQUEST["mobile"] == "")
		     {
			 PrintAlert("Please Enter Mobile num");
			 }
		    else
		      {
			 if($_REQUEST["pw"] == 0)
			  {
				PrintAlert("Please Enter Password");
			  }	
			 elseif($_REQUEST["pw2"] != $_REQUEST["pw"])
			  {
				PrintAlert("Please Enter Confirm Password");
			  }
			else
		       {
			   if($_REQUEST["faculty"] == 0)
			   {
				PrintAlert("Please Choose Faculty");
			   }
			    else
			      {
			      if($_REQUEST["depart"] == 0)
			        {
				     PrintAlert("Please Choose Faculty");
			        }
				else
			      {
			      if($_REQUEST["year"] == 0)
			        {
				     PrintAlert("Please Choose Faculty");
					}
			      else
			        {
			          //insert
					   include("db_connection.php");
			
			           $res=mysql_query("select * from  STUDENT where mobile='".$_REQUEST["mobile"]."'");
			           //$res2=mysql_query("select * from  Faculty where Fac_Dactivation=1 ");
					   //$res3=mysql_query("select * from  depart where Dep_Dactivation=1 ");
					   
			 			if($row=mysql_fetch_array($res))
			              {
			         	    echo("<script>alert('Student exist');</script>");
			              }
			             else
		                 	{
			              	$res1=mysql_query("INSERT INTO STUDENT (Stud_Name,Stud_Gender,Stud_Phone,Stud_Mobile,Stud_Address,Stud_Depart,Stud_Pass,Stud_Year)                    
                        values('".$_REQUEST["sn"]."','".$_REQUEST["gender"]."','".$_REQUEST["address"]."','".$_REQUEST["phone"]."','".$_REQUEST["mobile"]."',
						         '".$_REQUEST["depart"]."','".$_REQUEST["pw"]."','".$_REQUEST["year"]."')");
					         
							 //$res2=mysql_query("INSERT INTO FACULTY(Fac_Name) Values ('".$_REQUEST["faculty"]."')");
							 
							 //$res3=mysql_query("INSERT INTO DEPART(Dep_Name) Values ('".$_REQUEST["depart"]."')");
					         
							 echo("<script>alert('Student inserted');</script>");
			                  
							  mysql_close($con);
		            }
		          }
		        }
		     }
		  }
        } 
     }
   }
}
?>

</body>
</html>