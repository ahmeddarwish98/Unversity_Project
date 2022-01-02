<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> faculty </title>
</head>

<body>
<form name="form1" method="post" action="faculty_add.php">
<table width="795" border="0" align="center">
  <tr>
    <td colspan="5" align="center"><h2><strong>Faculty</strong></h2></td>
    </tr>
  <tr>
    <td width="142">&nbsp;</td>
    <td width="150">&nbsp;</td>
    <td width="188">&nbsp;</td>
    <td width="159">&nbsp;</td>
    <td width="134">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><h3>Fac Name</h3></td>
    <td align="center"><h3>Number Of Fac Years</h3></td>
    <td align="center"><h3>Number Of Fac Students</h3></td>
    <td align="center"><h3>Number Of Fac Departs</h3></td>
    <td align="center"> <h3>Fac Mobile</h3></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">
    <label>
      <input type="text" name="Fac_Name" id="textfield">
    </label>
    </td>
    
    <td align="center">
    <label>
      <input type="text" name="Fac_Year" id="textfield">
    </label>
    </td>
    
    <td align="center">
    <label>
      <input type="text" name="Fac_Students" id="textfield">
    </label>
    </td>
    
    <td align="center">
    <label>
      <input type="text" name="Fac_Departs" id="textfield">
    </label>
    </td>
    
    <td align="center">
    <label>
      <input type="text" name="Fac_Mobile" id="textfield">
    </label>
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="center">
      <input name="act" type="checkbox" id="act" checked="checked" value="1">
      <label for="act">Activation</label>
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="5" align="center">
      <input type="submit" name="Register" id="Register" value="Add Faculty">
      <input type="reset" name="reset" id="reset" value="Cancel"> 
    </td>   
  </tr>
</table>

</form>
</body>
</html>