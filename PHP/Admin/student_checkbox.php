<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Student CheckBox </title>
</head>

<body>
<?php

$Apr=0;

if(@$_REQUEST["aprov"] ==1 )
{
	$Apr=1;
}

include("db_connection.php");


$res=mysql_query("Update student set Stud_Aproval=".$Apr." where Stud_Id=".$_REQUEST["Stud_Id"]);

if($res == 1)
{
	echo("<script>alert('Student Aprovl')</script>");
}
else
{
	echo("<script>alert('Error')</script>");
}
mysql_close($con);

?>


</body>
</html>