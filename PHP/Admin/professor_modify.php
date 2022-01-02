<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Professor_Modify </title>
<?php

include("db_connection.php");

//3
$res1=mysql_query("select * from data_connection where Prof_Mobile='".$_REQUEST["searchMobile"]."'");

$res2=mysql_query("select * from faculty where Fac_Dactivation=1");

$res3=mysql_query("select * from depart where Dep_Dactivation=1");

$res4=mysql_query("select * from professor ");

$res5=mysql_query("select * from depart where Dep_Dactivation=1");
?>


</head>

<body>

<?php
 if($row1=mysql_fetch_array($res1))
	 {
?>
<form action="professor_update.php" method="post">
<table width="84%" border="0" align="center" >
  <tr>
    <td colspan="2" style="text-align: center"><h1><strong>Professor  </strong>Modify</h1></td>
    </tr>
    
  <tr>
    <td align="center"><h2><em>Name</em></h2></td>
    <td><input type="text" name="pn" value="<?php echo($row1["Prof_Name"]) ?>">     </td>
  </tr>
  
  <tr>
    <td width="47%" align="center"><h2><em>Address</em></h2></td>
    <td width="53%"><textarea name="address" rows="4" ><?php echo($row1["Prof_Address"]) ?></textarea></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Phone</em></h2></td>
    <td><input type="text" name="phone" value="<?php echo($row1["Prof_Phone"]) ?>">     </td>
  </tr>
  <tr>
    <td align="center"><h2><em>Mobile</em></h2></td>
    <td><input type="text" name="mobile" value="<?php echo($row1["Prof_Mobile"]) ?>"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Password</em></h2></td>
    <td><input type="password" name="pw" value="<?php echo($row1["Prof_Pass"]) ?>"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Confirm Password</em></h2></td>
    <td><input type="password" name="pw2" id="pw2"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Gender</em></h2></td>
    <td>  
    <?php
	if($row1["Prof_Gender"] == 0)
	{
       echo(" <input type='radio' name='gender' id='radio' value='m' checked>
            <label for='gender'>Male ". 
            " <br/><input type='radio' name='gender' id='radio2' value='f'>
            Female
           </label>
	        ");
	     }
	   else
	     {
		 echo(" <input type='radio' name='gender' id='radio' value='m' >
             <label for='gender'>Male ". 
             " <br/><input type='radio' name='gender' id='radio2' value='f' checked>
              Female
             </label>
	         ");
	       }
	  ?>
	</td>
  </tr>
  
    <tr>
    <td align="center"><h2><em>Faculty Name</em></h2></td>
    <td>
      <select name="faculty" id="faculty">
        <option value="0"> Faculty </option>
    <?php
	//4
	   while($row2=mysql_fetch_array($res2))
	   {
		if($row2["Fac_Id"] == $row1["Fac_Id"] )
		{
		echo("<option value='".$row2["Fac_Id"]."' selected>".$row2["Fac_Name"]."</option>");
		}
		else
		{
			echo("<option value='".$row2["Fac_Id"]."'>".$row2["Fac_Name"]."</option>");
		}}
	 ?>
 
    </select></td>
  </tr>
  
  <tr>
    <td align="center"><h2><em>Depart Name</em></h2></td>
    <td>

      <select name="depart" id=" depart">
        <option value="0"> Depart </option>
       <?php
	    //4
	   while($row3=mysql_fetch_array($res3))
	    {
		if($row3["Dep_Id"] == $row1["Dep_Id"] )
		{
		echo("<option value='".$row3["Dep_Id"]."' selected>".$row3["Dep_Name"]."</option>");
		}
		else
		{
			echo("<option value='".$row3["Dep_Id"]."'>".$row3["Dep_Name"]."</option>");
		}
	   }
	  ?>
       
    </select>
      
        <input type="text" name="depart1" value="
		<?php 
		while($row5=mysql_fetch_array($res5))
	    {
		if($row5["Dep_Id"] == $row1["Dep_Id"] )
		{
		  echo($row5["Dep_Name"]);
		 }
		}
		?>">
     
      </td>
  </tr>
  <tr>
    <td align="center"><h2><em>Manager Name</em></h2></td>
    <td><select name="manager" id="manager">
      <option value="0"> Manager </option>
      <?php
	//4
	while($row4=mysql_fetch_array($res4))
	{
		if($row4["Prof_Id"] == $row1["Prof_Management"])
		{
		echo("<option value='".$row4["Prof_Id"]."' selected>".$row4["Prof_Name"]."</option>");
		}
		else
		{
					echo("<option value='".$row4["Prof_Id"]."' >".$row4["Prof_Name"]."</option>");

		}
	}
	
	?>
    </select></td>
  </tr>
  
  <tr>

    <td colspan="2" align="center">
    <?php
	if($row1["Prof_Aproval"] == 1)
	{
		echo("<input name='aprov' type='checkbox' id='aprov' value='1' checked>");
	}
	else
	{
		echo("<input name='aprov' type='checkbox' id='aprov' value='1' >");
	}
	?>
    <label for="aprov">Aproval</label></td>
  </tr>
  <tr>
  
    <td colspan="2" align="center">
    
     <?php
	if($row1["Prof_IsAdmin"] == 1)
	{
		echo("<input name='isAdmin' type='checkbox' id='isAdmin' value='1' checked>");
	}
	else
	{
		echo("<input name='isAdmin' type='checkbox' id='isAdmin' value='1' >");
	}
	?>
    
    <label for="isAdmin">Is Admin</label></td>
  </tr>
  
  <tr>
 
    <td colspan="2" align="center">
    <?php
	if($row1["Prof_Dactivation"] == 1)
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
    <td colspan="2" align="center"><input type="hidden" name="Prof_Id" value="<?php echo($row1["Prof_Id"])?>"></td>
  </tr>
   
   <tr>
    <td colspan="2" align="center"><input type="submit" name="Register" id="Register" value="Update">     </td>
    </tr>
</table>
<?php
}

//5
mysql_close($con);
?>

</form>
</body>
</html>