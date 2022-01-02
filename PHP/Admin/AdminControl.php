<?php
session_start();

if(@$_SESSION["did"] == "")
{
	die("You are not login");
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="../login.php" method="post">
<table width="454" height="405" border="2" align="center">
<tr>
   <td align="center" >
       <?php
       echo("<h2>"."Welcome Doctor : ".$_REQUEST["Admin_Name"]."</h2>");
       ?>
   </td>
</tr>

<tr>
  <td  align="center"><h3>You Can Control At This Files</h3></td>
</tr>

<tr>
  <td  align="center"><a href="depart.php" >Add Depart</a></td>
</tr>

<tr>
  <td align="center"><a href="faculty.php" >Add Faculty</a></td>
</tr>

<tr>
  <td align="center"><a href="section.php" >Add Section</a></td>
</tr>

<tr>
  <td align="center"><a href="departs_name.php" > Modify Depart</a></td>
</tr>

<tr>
  <td align="center"><a href="faculty_name.php" > Modify Faculty</a></td>
</tr>

<tr>
  <td align="center"><a href="sections_name.php" > Modify Section</a></td>
</tr>

<tr>
  <td align="center"><a href="student_search.php" >  Modify Student </a></td>
</tr>
 
 <tr>
  <td align="center"><a href="professor_search.php" > Modify Professor </a></td>
</tr>

<tr>
  <td align="center"><a href="students_name.php" > Student Aproval </a></td>
</tr>


<tr>
  <td align="center"><a href="professors_name.php" > Professor Aproval </a></td>
</tr>

<tr>
    <td align="center"><a href="logout.php">logout</a></td>
</tr>

</table>
</form>
</body>
</html>