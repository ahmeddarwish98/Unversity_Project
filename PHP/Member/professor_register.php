<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> professor_register </title>
</head>

<body>

<?php

function PrintAlert($meg)
{
	echo("<script> alert('".$meg."');</script>");
}


if($_REQUEST["pn"] =="")
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
		    if(strlen($_REQUEST["phone"]) !=10 || $_REQUEST["phone"] =="")
		   {
			PrintAlert("Please Enter Phone num");
		   }
		
		   else
		   {
			 if(strlen($_REQUEST["mobile"]) != 11 || $_REQUEST["mobile"] == "")
		     {
			 PrintAlert("Please Enter Mobile Num");
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
				     PrintAlert("Please Choose Depart");
			        }
				else
			      {
			      if($_REQUEST["manager"] == 0)
			        {
				     PrintAlert("Please Choose Manager");
					}
			      else
			        {   
						
			           //insert
					   include("db_connection.php");
			
			           $res=mysql_query("select Prof_Mobile from  professor where Prof_Mobile='".$_REQUEST["mobile"]."'");
			        
			 			if($row=mysql_fetch_array($res))
			              {
			         	    echo("<script>alert('Professor exist');</script>");
			              }
			             else
		                 	{
                            ////////////////////////////////////////////
							
							if ((($_FILES["photo"]["type"] == "image/gif")
                             || ($_FILES["photo"]["type"] == "image/jpeg")
                            || ($_FILES["photo"]["type"] == "image/pjpeg")))
							    
							 {
							    if ($_FILES["photo"]["error"] > 0)
 							     {
 							         die ("Return Code: " . $_FILES["photo"]["error"] . "<br />");
 							      }
							
							   
                            else
                              {	
							  if($_REQUEST["gender"] =="m")
							  {
			 				    $gender=0;
		 					  }
		 					 else
		 					  {
							   $gender=1;
		 					   }
		         
				 				 $photo=$_FILES['photo']['name'];

						     	 $mime=substr($photo,strpos($photo,"."));
								
								 $ImageName=rand(1,1000000).chr(rand(97,122)).$mime;
							
				         move_uploaded_file($_FILES["photo"]["tmp_name"], "C:/xampp/htdocs/Projects/Unversity/Uploading/img/".$ImageName);
							
			
						//////////////////////// Insert ///////////////////////
					
						$res1=mysql_query("INSERT INTO PROFESSOR(Prof_Name,Prof_Gender,Prof_Address,Prof_Phone,Prof_Mobile,
							                                         Prof_Dactivation,Prof_Management,Prof_Pass,Prof_Photo)                    
                        values('".$_REQUEST["pn"]."','".$_REQUEST["gender"]."','".$_REQUEST["address"]."','".$_REQUEST["phone"]."','".$_REQUEST["mobile"]."',
						         1,'".$_REQUEST["manager"]."','".$_REQUEST["pw"]."','".$ImageName."')");
			
							 echo("<script>alert('Professor inserted');</script>");
							 
                              }
						}
					
			else
                {
                 echo "Invalid file type or size";
                   }	 
					
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