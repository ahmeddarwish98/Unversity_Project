<?php
include("session.php");
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> section </title>
</head>

<body>
<form name="form1" method="post" action="section_add.php">
  <table width="749" border="0" align="center">
    <tr>
      <td colspan="4" align="center"><h2>Section</h2></td>
    </tr>
    <tr>
      <td width="164">&nbsp;</td>
      <td width="213">&nbsp;</td>
      <td width="199">&nbsp;</td>
      <td width="155">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"> <h3>Sect Name</h3></td>
      <td align="center"> <h3>Sect Capacity</h3></td>
      <td align="center"><h3>Sect Instructor</h3></td>
      <td align="center"><h3>Sect Type</h3></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td align="center">
    <label>
      <input type="text" name="Sect_Name" id="textfield">
    </label>
    </td>
    
    <td align="center"> 
    <label>
      <input type="text" name="Sect_Capacity" id="textfield">
    </label>
    </td>
    
    <td align="center"> 
    <label>
      <input type="text" name="Sect_Instructor" id="textfield">
    </label>
    </td>
    
    <td align="center"> 
    <label>
      <input type="text" name="Sect_Type" id="textfield">
    </label>
    </td>
    
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

    <tr>
      <td colspan="4"   align="center">
        <input name="act" type="checkbox" id="act" checked="checked" value="1">
        <label for="act">Activation</label>
      </td>

    </tr>
    
        <tr>
      <td height="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
   <tr>
    <td  colspan="4"   align="center">
      <input type="submit" name="Register" id="Register" value="Add Faculty">
      <input type="reset" name="reset" id="reset" value="Cancel"> 
    </td>
   </tr>
   
  </table>
</form>
</body>
</html>