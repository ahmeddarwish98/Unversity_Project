<?php
include("session.php");
?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title> Student Aproval </title>

<?php

include("db_connection.php");

//3

$res1=mysql_query("select * from data_connection where Stud_Id=".$_REQUEST["id"]);

$res2=mysql_query("select * from faculty where Fac_Dactivation=1");

$res3=mysql_query("select * from depart where Dep_Dactivation=1");

$res4=mysql_query("select * from student ");

?>


</head>

<body>

<?php
 if($row1=mysql_fetch_array($res1))
 {

?>
<form action="student_checkbox.php" method="post">

<table width="84%" border="0" align="center" >
  <tr>
    <td colspan="2" style="text-align: center"><h1> Student Aproval</h1></td>
  </tr>
  <tr>
    <td width="47%" align="center"><h2><em>Student Name</em></h2></td>
    <td width="53%">
      <input type="text" name="sn" value="<?php echo($row1["Stud_Name"]) ?>"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Address</em></h2></td>
    <td><textarea name="address" rows="4" ><?php echo($row1["Stud_Address"]) ?></textarea></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Phone</em></h2></td>
    <td><input type="text" name="phone" value="<?php echo($row1["Stud_Phone"]) ?>"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Mobile</em></h2></td>
    <td><input type="text" name="mobile" value="<?php echo($row1["Stud_Mobile"]) ?>"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Password</em></h2></td>
    <td><input type="password" name="pw" value="<?php echo($row1["Stud_Pass"]) ?>"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Confirm Password</em></h2></td>
    <td><input type="password" name="pw2" id="pw2"></td>
  </tr>
  <tr>
    <td align="center"><h2><em>Gender</em></h2></td>
    <td>
     <?php
	if($row1["Stud_Gender"] == 0)
	{
      echo(" <input type='radio' name='gender' id='radio' value='m' checked>
            <label for='gender'>Male ". 
            " <br/><input type='radio' name='gender' id='radio2' value='fem'>
            Female
           </label>
	        ");
	     }
	   else
	     {
		 echo(" <input type='radio' name='gender' id='radio' value='mal' >
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
     </td>
  </tr>

  <tr>
    <td width="47%" align="center"><h2><em>Student Year</em></h2></td>
    <td width="53%">
     <select name="year" id="year">
        <option value="0"> Year </option>
      <?php
	  /*
	   
	   while($row4=mysql_fetch_array($res4))
	   {
		if($row4["Stud_Id"] == $row1["Stud_Id"] )
		{
		echo("<option value='".$row4["Stud_Id"]."' selected>".$row4["Stud_Year"]."</option>");
		}
		else
		{
	     echo("<option value='".$row4["Stud_Id"]."'>".$row4["Stud_Year"]."</option>");
		}
		}
		*/
		
		for($i=1;$i<=7;$i++)
		{
			if($row1["Stud_Year"]==$i)
			{
			echo("<option value='".$i."' selected>".$i."</option>");
			}
			else
			{
				echo("<option value='".$i."' >".$i."</option>");
			}
		}
		
	    ?>
        </select>
       <td>
    </tr>
  
  <tr>
    <td colspan="2" align="center"><input name="aprov" type="checkbox" id="aprov" value="1">
      <label for="aprov">Aproval</label></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="hidden" name="Stud_Id" value="<?php echo($row1["Stud_Id"])?>"></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
    <input type="submit" name="Register" id="Register" value="Update"> </td>
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