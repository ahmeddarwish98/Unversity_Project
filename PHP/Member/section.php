<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> section </title>

<?php

include("db_connection.php");

//3
$res1=mysql_query("select Sect_Id,Sect_Name from section");

$res2=mysql_query("select Sect_Id,Sect_Capacity from section");

$res3=mysql_query("select Sect_Id,Sect_Instructor from section");

$res4=mysql_query("select Sect_Id,Sect_Type from section");
?>

</head>

<body>
<form name="form1" method="post" action="section_register.php">
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
        <select name="Sect_Name" id="Sect_Name">
        <option value="0"> Sect Name </option>
         <?php
	     while($row1=mysql_fetch_array($res1))
	     {
	    	echo("<option value='".$row1["Sect_Id"]."'>".$row1["Sect_Name"]."</option>");
	      }
	   ?>
      </select>
    </td>
    
    <td align="center"> 
        <select name="Sect_Capacity" id="Sect_Capacity">
        <option value="0"> Sect Capacity </option>
         <?php
	     while($row2=mysql_fetch_array($res2))
	     {
	    	echo("<option value='".$row2["Sect_Id"]."'>".$row2["Sect_Capacity"]."</option>");
	      }
	   ?>
      </select>
    </td>
    
    <td align="center"> 
        <select name="Sect_Instructor" id="Sect_Instructor">
        <option value="0"> Sect Instructor </option>
         <?php
	     while($row3=mysql_fetch_array($res3))
	     {
	    	echo("<option value='".$row3["Sect_Id"]."'>".$row3["Sect_Instructor"]."</option>");
	      }
	   ?>
      </select>
    </td>
    
    <td align="center"> 
        <select name="Sect_Type" id="Sect_Type">
        <option value="0"> Sect Type </option>
         <?php
	     while($row4=mysql_fetch_array($res4))
	     {
	    	echo("<option value='".$row4["Sect_Id"]."'>".$row4["Sect_Type"]."</option>");
	      }
	   ?>
      </select>
    </td>
    
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
   <tr>
    <td height="23" colspan="4" align="center"><input type="submit" name="Register"         id="Register" value="Register"> 
    </td>
   </tr>
  </table>
</form>
</body>
</html>