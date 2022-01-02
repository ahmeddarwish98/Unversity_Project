<?php
include("session.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Student Search</title>
<body>

<form name="student_search" action="student_modify.php" method="post">
<table width="70%" border="0">
  <tr>
    <td>Enter Student Mobile</td>
    <td><input type="text" name="searchMobile" id="searchPhone"></td>
    <td><input type="submit" name="submit"  value="Search"></td>
  </tr>
</table>

</form>
</body>
</html>