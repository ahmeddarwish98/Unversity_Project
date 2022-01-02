<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Depart </title>

<?php

include("db_connection.php");

$res1=mysql_query("select Fac_Id,Fac_Name from faculty where Fac_Dactivation=1");

?>
</head>

<body>
<form name="form1" method="post" action="depart_add.php">
  <table width="501" border="0" align="center">
    <tr>
      <td colspan="3" align="center"><h2>Depart</h2></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><h3>Dep Name</h3></td>
      <td align="center"> <h3>Number Of Student</h3></td>
      <td align="center"> <h3>Faculty Name</h3></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr> 
    <td height="23" align="center">
       <label>
        <input type="text" name="Dep_Name" id="textfield">
       </label>
     </td>
     
     <td height="23" align="center">
       <label>
        <input type="text" name="Dep_Numbers" id="textfield">
       </label>
     </td>
      
      <td height="23"align="center">
	     <select name="Fac_Name" id="Fac_Name">
         <option value="0"> Fac Name </option>
         <?php
	
	    while($row1=mysql_fetch_array($res1))
	    {
		echo("<option value='".$row1["Dep_Id"]."'>".$row1["Fac_Name"]."</option>");
	    }
	    ?>
       </select>
    </td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="3" align="center">
      <input name="act" type="checkbox" id="act" checked="checked" value="1">
      <label for="act">Activation</label>
      </td>
    </tr>
    
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="23" colspan="3" align="center">
      <input type="submit" name="Register" id="Register" value="Add Depart">
      <input type="reset" name="reset" id="reset" value="Cancel"> 
      </td>
    </tr>
  </table>
</form>
</body>
</html>