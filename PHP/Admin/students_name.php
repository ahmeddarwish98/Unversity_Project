<?php
include("session.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> students_name </title>

</head>

<body>
<?php
include("db_connection.php");

$res=mysql_query("select Stud_Id,Stud_Name from student where Stud_Aproval=0");

$x=mysql_num_rows($res);
if($x>0)
{
	
echo("<table align='center' width='150 px' border='3'>");
while($row=mysql_fetch_array($res))
{
	echo("<tr><td align='center' ><a href='student_aproval.php?id=".$row["Stud_Id"]."'>".$row["Stud_Name"]."</a></td></tr>");
}
echo("</table>");
}
else
{
	echo("<script>alert('No Student need Aproval')</script>");
}

mysql_close($con);

?>

</body>
</html>