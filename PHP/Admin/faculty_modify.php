<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> faculty Modify </title>

<?php

include("db_connection.php");

$res1=mysql_query("select * from faculty where Fac_Id=".$_REQUEST["id"]);

?>
</head>

<body>
<?php

if($row1=mysql_fetch_array($res1))
     {

?>
<form action="faculty_update.php" method="post"> 
<table width="795" border="0" align="center">
  <tr>
    <td colspan="5" align="center"><h2>Faculty</h2></td>
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
      <input type="text" name="Fac_Name" value="<?php echo($row1["Fac_Name"]) ?>">
    </label>
    </td>
    
    <td align="center">
    <label>
      <input type="text" name="Fac_Year" id="textfield"  value="<?php echo($row1["Fac_Year"]) ?>">
    </label>
    </td>
    
    <td align="center">
    <label>
      <input type="text" name="Fac_Students" id="textfield"  value="<?php echo($row1["Fac_Students"]) ?>">
    </label>
    </td>
    
    <td align="center">
    <label>
      <input type="text" name="Fac_Departs" id="textfield"  value="<?php echo($row1["Fac_Depart"]) ?>">
    </label>
    </td>
  
    <td align="center">
    <label>
      <input type="text" name="Fac_Mobile" id="textfield" value="<?php echo($row1["Fac_Mobile"]) ?>">
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
<td height="23" colspan="5" align="center" >
    <?php

	if($row1["Fac_Dactivation"] == 1)
	{
		echo("<input name='Act' type='checkbox' id='Act' value='1' checked>");
	}
	else
	{
		echo("<input name='Act' type='checkbox' id='Act' value='1' >");
	}
	
	?>
      <label for="Act">Activation</label></td>
  </tr>
  
  <tr>
        <td colspan="5" align="center"><input type="hidden" name="Fac_Id" value="<?php echo($row1["Fac_Id"])?>"></td>
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
      <input type="submit" name="reset" id="reset" value="Update"> 
    </td>   
  </tr>
</table>
<?php

//5
}
mysql_close($con);
?>

</form>
</body>
</html>