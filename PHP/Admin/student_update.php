<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Student Update </title>
</head>

<body>
<?php

$Apr=0;

if(@$_REQUEST["aprov"] ==1 )
{
	$Apr=1;
}
$gen=0;

if(@$_REQUEST["gender"] =="f" )
{
	$gen=1;
}
include("db_connection.php");


$sql="Update student set Stud_Name='".$_REQUEST["sn"]."', Stud_Gender=".$gen.", Stud_Address='".$_REQUEST["address"]."',
Stud_Mobile='".$_REQUEST["mobile"]."', Stud_Phone='".$_REQUEST["phone"]."', Stud_Pass='".$_REQUEST["pw"]."', Stud_Year=".$_REQUEST["year"].",
Stud_Depart=".$_REQUEST["depart"].", Stud_Aproval=".$Apr." where Stud_Id=".$_REQUEST["Stud_Id"];


$res=mysql_query($sql);


if($res == 1)
{
	echo("<script>alert('Student Modify')</script>");
}
else
{
	echo("<script>alert('Error')</script>");
}
mysql_close($con);

?>


</body>
</html>