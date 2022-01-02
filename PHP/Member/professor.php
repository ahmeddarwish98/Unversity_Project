<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title> professor </title>

<?php

include("db_connection.php");

//3
$res1=mysql_query("select Fac_Id,Fac_Name from faculty where Fac_Dactivation=1");

$res2=mysql_query("select Dep_Id,Dep_Name from depart where Dep_Dactivation=1");

$res3=mysql_query("select Prof_Id,Prof_Name,Prof_Management from professor where Prof_Dactivation=1");
?>


</head>

<body>
<form action="professor_register.php" method="post" enctype="multipart/form-data" >
<table width="84%" border="0" align="center" >
  <tr>
    <td colspan="2" style="text-align: center"><h1><strong>Professor  Register</strong></h1></td>
    </tr>
  <tr>
    <td width="47%" align="center"><h2><em>Professor Name</em></h2></td>
    <td width="53%">
      <input type="text" name="pn" id="pn"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Address</em></h2></td>
    <td><textarea name="address" rows="4" id="address"></textarea></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Phone</em></h2></td>
    <td><input type="text" name="phone" id="phone"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Mobile</em></h2></td>
    <td><input type="text" name="mobile" id="mobile"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Password</em></h2></td>
    <td><input type="password" name="pw" id="pw"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Confirm Password</em></h2></td>
    <td><input type="password" name="pw2" id="pw2"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Gender</em></h2></td>
    <td><input type="radio" name="gender" id="radio" value="m" checked>
      <label for="gender">Male  
        <br/>
        <input type="radio" name="gender" id="radio2" value="f">
        Female
      </label></td>
  </tr>
  
   <tr>
    <td align="center"><h2><em>Photo</em></h2></td>
    <td><input type="file" name="photo" id="photo"></td>
  </tr>
  
    <tr>
    <td align="center"><h2><em>Faculty Name</em></h2></td>
    <td>
      <select name="faculty" id="faculty">
        <option value="0"> Faculty </option>
        <?php
	//4
	while($row1=mysql_fetch_array($res1))
	{
		echo("<option value='".$row1["Fac_Id"]."'>".$row1["Fac_Name"]."</option>");
	}
	
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
	while($row2=mysql_fetch_array($res2))
	{
		echo("<option value='".$row2["Dep_Id"]."'>".$row2["Dep_Name"]."</option>");
	}
	
	?>
        
        
      </select></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Manager Name</em></h2></td>
    <td><select name="manager" id="manager">
      <option value="0"> Manager </option>
      <?php
	//4
	while($row3=mysql_fetch_array($res3))
	{
		echo("<option value='".$row3["Prof_Management"]."'>".$row3["Prof_Name"]."</option>");
	}
	
	?>
      </select></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="Register" id="Register" value="Register">     </td>
    </tr>
</table>
<?php
//5
mysql_close($con);
?>
</form>

</body>
</html>