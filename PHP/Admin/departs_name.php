<?php
include("session.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Depart_Name </title>

</head>

<body>
<?php
include("db_connection.php");

$res=mysql_query("select Dep_Id,Dep_Name from depart");

echo("<table width='200px' align='center' border='3' >");
while($row=mysql_fetch_array($res))
{
	echo("<tr><td align='center'><a href='depart_modify.php?id=".$row["Dep_Id"]."'>".$row["Dep_Name"]."</a></td></tr>");
}
echo("</table>");
mysql_close($con);
?>
</body>
</html>