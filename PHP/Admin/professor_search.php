<?php
include("session.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> ProfessoR Search</title>
<body>

<form name="professor_search" action="professor_modify.php" method="post">
<table width="70%" border="0">
  <tr>
    <td>Enter Professor Mobile</td>
    <td><input type="text" name="searchMobile" id="searchPhone"></td>
    <td><input type="submit" name="submit"  value="Search"></td>
  </tr>
</table>

</form>
</body>
</html>