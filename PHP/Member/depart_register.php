<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> depart_register </title>
</head>

<body>

<?php
function PrintAlert($meg)
{
	echo("<script> alert('".$meg."');</script>");
}


if($_REQUEST["Dep_Id"] =="0")
{
	PrintAlert("Please Enter Dep Id");
	

}
	else
	{
		if($_REQUEST["Dep_Name"] =="0")
		{
			PrintAlert("Please Enter Dep Name");
		}
		else if(strlen($_REQUEST["Fac_Name"]) == "0")
		{
			PrintAlert("Please Enter Faculty Name");
		}
		else
		{
	
				 // insert
			
		}
	
}
?>

</body>
</html>