<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Section Modify</title>

<?php

include("db_connection.php");

$res1=mysql_query("select * from section where Sect_Id=".$_REQUEST["id"]);

?>

</head>

<body>

<?php

if($row1=mysql_fetch_array($res1))
   {
	   
?>
<form action="section_update.php" method="post"> 

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
      <input type="text" name="Sect_Name" value="<?php echo($row1["Sect_Name"]) ?>">
    </label>
    </td>
    
    <td align="center"> 
    <label>
      <input type="text" name="Sect_Capacity" value="<?php echo($row1["Sect_Capacity"]) ?>">
    </label>
    </td>
    
    <td align="center"> 
    <label>
      <input type="text" name="Sect_Instructor" value="<?php echo($row1["Sect_Instructor"]) ?>">
    </label>
    </td>
    
    <td align="center"> 
    <label>
      <input type="text" name="Sect_Type" value="<?php echo($row1["Sect_Type"]) ?>">
    </label>
    </td>
    
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

<td height="23" colspan="4" align="center" >
    <?php

	if($row1["Sect_Dactivation"] == 1)
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
        <td colspan="4" align="center"><input type="hidden" name="Sect_Id" value="<?php echo($row1["Sect_Id"])?>"></td>
  </tr>
 

    
     <tr>
      <td height="21">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
   <tr>
    <td  colspan="4"   align="center">
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