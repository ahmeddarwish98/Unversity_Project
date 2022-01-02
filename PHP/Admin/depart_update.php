
<?php
$Act=0;

if(@$_REQUEST["Act"] ==1 )
{
$Act=1;	
}

include("db_connection.php");

$sql="Update depart set Dep_Name='".$_REQUEST["Dep_Name"]."',Dep_Numbers=".$_REQUEST["Dep_Numbers"].",Fac_Id=".$_REQUEST["Fac_Name"].",Dep_Dactivation=".$Act."  where Dep_Id=".$_REQUEST["Dep_Id"];


$res=mysql_query($sql);



if($res == 1)
{
	echo("<script>alert('Depart Modify')</script>");
}
else
{
	echo("<script>alert('Error')</script>");
}

mysql_close($con);

?>
