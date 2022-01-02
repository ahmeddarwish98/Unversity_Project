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
$gen=0;

if(@$_REQUEST["gender"] =="f" )
{
	$gen=1;
}

include("db_connection.php");

$sql1="Update object set Dep_Id=".$_REQUEST["depart"]." where  Prof_Id=".$_REQUEST["Prof_Id"];

$res1=mysql_query(@$sq1l);

$sql="Update professor set Prof_Name='".$_REQUEST["pn"]."', Prof_Gender=".$gen.", Prof_Address='".$_REQUEST["address"]."',
Prof_Mobile='".$_REQUEST["mobile"]."', Prof_Phone='".$_REQUEST["phone"]."', Prof_Management=".$_REQUEST["manager"].", Prof_Pass='".$_REQUEST["pw"]."', Prof_Dactivation=".$Act." ,Prof_Aproval=".$Apr." ,Prof_IsAdmin=".$isAdmin." where Prof_Id=".$_REQUEST["Prof_Id"];



//echo($sql1);

$res=mysql_query(@$sql);



if($res == 1 || $res1 == 1 )
{
	echo("<script>alert('Professor Modify')</script>");
}
else
{
	echo("<script>alert('Error')</script>");
}

mysql_close($con);

?>
