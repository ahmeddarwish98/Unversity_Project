<?php
include("session.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Professors_Name </title>

</head>

<body>
<?php
include("db_connection.php");

$res=mysql_query("select Prof_Id,Prof_Name from professor where Prof_Aproval = 0");

$x=mysql_num_rows($res);
if($x>0)
{
	
echo("<table table  width='200 px' align='center' border='3' >");
while($row=mysql_fetch_array($res))
{
	echo("<tr><td align='center'><a href='professor_aproval.php?id=".$row["Prof_Id"]."'>".$row["Prof_Name"]."</a></td></tr>");
}
echo("</table>");
}
else
{
	echo("<script>alert('No Professors need Aproval')</script>");
}
mysql_close($con);
?>
</body>
</html>