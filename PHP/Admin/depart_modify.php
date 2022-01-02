<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Depart_Modify</title>

<?php

include("db_connection.php");

$res1=mysql_query("select * from depart where Dep_Id=".$_REQUEST["id"]);

$res2=mysql_query("select * from faculty where Fac_Dactivation=1");

?>

</head>

<body>

<?php

if($row1=mysql_fetch_array($res1))
   {
	   
?>
<form action="depart_update.php" method="post">   
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
      <td align="center"><h3>Number Of Student</h3></td>
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
        <input type="text" name="Dep_Name" value="<?php echo($row1["Dep_Name"]) ?>">
       </label>
     </td>
     
      <td height="23" align="center">
       <label>
        <input type="text" name="Dep_Numbers" value="<?php echo($row1["Dep_Numbers"]) ?>">
       </label>
     </td>
      
      <td height="23"align="center">
	     <select name="Fac_Name" id="Fac_Name">
         <option value="0"> Fac Name </option>
  <?php
	//4
	while($row2=mysql_fetch_array($res2))
	{
		if($row2["Fac_Id"] == $row1["Fac_Id"])
		{
		   echo("<option value='".$row2["Fac_Id"]."' selected>".$row2["Fac_Name"]."</option>");
		}
		else
		{
	      echo("<option value='".$row2["Fac_Id"]."' >".$row2["Fac_Name"]."</option>");

		}
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
   
    <td height="23" colspan="3" align="center" >
    <?php

	if($row1["Dep_Dactivation"] == 1)
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
        <td colspan="3" align="center"><input type="hidden" name="Dep_Id" value="<?php echo($row1["Dep_Id"])?>"></td>
  </tr>
 
    <tr>
      <td height="23" colspan="3" align="center">
      <input type="submit"  value="Update"/> 
      </td>
    </tr>
  </table>
<?php
}
mysql_close($con);
?>
</form>
</body>
</html>
