<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>log in</title>
</head>

<body>
<?php
$un = $_REQUEST["un"];
$pw = $_REQUEST["pw"];

if($un == "" | $pw == "")
{
	echo("<script>alert('Invalid Data');</script>");
}
else
{
    include("db_connection.php");
	
	$result = mysql_query("select Prof_Id,Prof_Name,Prof_IsAdmin from professor where Prof_mobile='".$un."' and prof_Pass='".$pw."' and Prof_Dactivation=1");
	
//4  use data

	if($row=mysql_fetch_array($result))
	{
		if($row["Prof_IsAdmin"] == 1)
		{
			$_SESSION["did"]=$row["Prof_Id"];
			
			$Admin_Name = $row["Prof_Name"];
			
//reset cookie
	   setcookie("username",$un,time()-60*24*100,"/");
	   setcookie("password",$pw,time()-60*24*100,"/");
			
			
			if($_REQUEST["rm"] == "rm")
			{
//create cookie
	         setcookie("username",$un,time()+60*24*100,"/");
	         setcookie("password",$pw,time()+60*24*100,"/");
			}
		
			header("Location:http://localhost/Projects/Unversity/Admin/AdminControl.php?Admin_Name=".$Admin_Name );
		}
		
		else
		{	
		    header('Location:http://localhost/Projects/Unversity/Member/MemberControl.php');
		}
	}
	else
	{
		echo("<script>alert('You are not register');</script>");
   }
  mysql_close($con);
}


?>
</body>
</html>