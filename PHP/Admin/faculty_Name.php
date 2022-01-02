<?php
include("session.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Faculty_Name </title>

</head>

<body>
<?php
include("db_connection.php");

$res=mysql_query("select Fac_Id,Fac_Name from faculty");

echo("<table width='200px' align='center' border='3' >");
while($row=mysql_fetch_array($res))
{
	echo("<tr><td align='center'><a href='faculty_modify.php?id=".$row["Fac_Id"]."'>".$row["Fac_Name"]."</a></td></tr>");
}
echo("</table>");
mysql_close($con);
?>
</body>
</html>