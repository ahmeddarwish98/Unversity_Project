<?php
include("session.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Departs_Name </title>

</head>

<body>
<?php
include("db_connection.php");

$res=mysql_query("select Sect_Id,Sect_Name from section");

echo("<table  width='100 px' align='center' border='3' >");
while($row=mysql_fetch_array($res))
{
	echo("<tr><td align='center' ><a href='section_modify.php?id=".$row["Sect_Id"]."'>".$row["Sect_Name"]."</a></td></tr>");
}
echo("</table>");
mysql_close($con);
?>
</body>
</html>