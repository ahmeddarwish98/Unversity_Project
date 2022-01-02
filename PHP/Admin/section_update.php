<?php
$Act=0;

if(@$_REQUEST["Act"] ==1 )
{
$Act=1;	
}

include("db_connection.php");

$sql="Update section set Sect_Name='".$_REQUEST["Sect_Name"]."',Sect_Capacity=".$_REQUEST["Sect_Capacity"].",Sect_Instructor='".$_REQUEST["Sect_Instructor"]."',Sect_Dactivation=".$Act."  where Sect_Id=".$_REQUEST["Sect_Id"];

//echo($sql);

$res=mysql_query($sql);

if($res == 1)
{
	echo("<script>alert('Section Modify')</script>");
}
else
{
	echo("<script>alert('Error')</script>");
}

mysql_close($con);

?>

</form>
</body>
</html>