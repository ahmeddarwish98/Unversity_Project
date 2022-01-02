
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Professor CheckBox</title>
</head>

<body>
<?php
$Act=0;
$Apr=0;
$isAdmin=0;


if(@$_REQUEST["Act"] ==1 )
{
$Act=1;	
}

if(@$_REQUEST["aprov"] ==1 )
{
	$Apr=1;
}

if(@$_REQUEST["isAdmin"] ==1 )
{
	$isAdmin=1;
}

include("db_connection.php");


$res=mysql_query("Update professor set Prof_Dactivation=".$Act." ,Prof_Aproval=".$Apr." ,Prof_IsAdmin=".$isAdmin." where Prof_Id=".$_REQUEST["Prof_Id"]);

if($res == 1)
{
	echo("<script>alert('Professor Aproval')</script>");
}
else
{
	echo("<script>alert('Error')</script>");
}
mysql_close($con);

?>


</body>
</html>