

<?php
$Act=0;

if(@$_REQUEST["Act"] ==1 )
{
$Act=1;	
}

include("db_connection.php");

$sql="Update faculty set Fac_Name='".$_REQUEST["Fac_Name"]."', Fac_Year=".$_REQUEST["Fac_Year"].", Fac_Students=".$_REQUEST["Fac_Students"].", Fac_Depart=".$_REQUEST["Fac_Departs"].", Fac_Mobile=".$_REQUEST["Fac_Mobile"].", Fac_Dactivation=".$Act."   where Fac_Id=".$_REQUEST["Fac_Id"];


$res=mysql_query($sql);


if($res == 1)
{
	echo("<script>alert('Faculty Modify')</script>");
}
else
{
	echo("<script>alert('Error')</script>");
}

mysql_close($con);

?>
