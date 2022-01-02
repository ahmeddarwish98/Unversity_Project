<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> faculty </title>

<?php

include("db_connection.php");

//3
$res1=mysql_query("select Fac_Id,Fac_Name from faculty where Fac_Dactivation=1");

$res2=mysql_query("select Year_Id,Year_Num from Years ");

$res3=mysql_query("select Fac_Id,Fac_Numbers from faculty where Fac_Dactivation=1");

$res4=mysql_query("select Dep_Id,Dep_Name from depart where Dep_Dactivation=1");

$res5=mysql_query("select Fac_Id,Fac_Mobile from faculty where Fac_Dactivation=1");
?>
</head>

<body>
<form name="form1" method="post" action="faculty_register.php">
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
    <td align="center"><h3>Fac Id</h3></td>
    <td align="center"><h3>Years</h3></td>
    <td align="center"><h3>Student Numbers</h3></td>
    <td align="center"> <h3>Depart Name</h3></td>
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
        <select name="Fac_Name" id="Fac_Name">
        <option value="0"> Fac Name </option>
         <?php
	
	   while($row1=mysql_fetch_array($res1))
	   {
		echo("<option value='".$row1["Fac_Id"]."'>".$row1["Fac_Name"]."</option>");
	   }
	 ?>
      </select>
    </td>
    
    <td align="center">
        <select name="Year_Num" id="Year_Num">
        <option value="0"> Year Num </option>
         <?php
	     while($row2=mysql_fetch_array($res2))
	     {
	    	echo("<option value='".$row2["Year_Id"]."'>".$row2["Year_Num"]."</option>");
	      }
	   ?>
      </select>
    </td>
    
    <td align="center"> 
        <select name="Stud_Num" id="Stud_Num">
        <option value="0"> Stud Num </option>
         <?php
	     while($row3=mysql_fetch_array($res3))
	     {
	    	echo("<option value='".$row3["Fac_Id"]."'>".$row3["Fac_Numbers"]."</option>");
	      }
	   ?>
      </select>
    </td>
    
    <td align="center">
	      <select name="Dep_Name" id="Dep_Name">
	         <option value="0"> Dep Name </option>
	      <?php
	
	     while($row4=mysql_fetch_array($res4))
	     {
		  echo("<option value='".$row4["Fac_Id"]."'>".$row4["Dep_Name"]."</option>");
	     }
	
	      ?>
        </select>
    </td>
    
    <td align="center">
	      <select name="Fac_Mobile" id="Fac_Mobile">
	         <option value="0"> Fac Mobile </option>
	      <?php
	
	     while($row5=mysql_fetch_array($res5))
	     {
		  echo("<option value='".$row5["Fac_Id"]."'>".$row5["Fac_Mobile"]."</option>");
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="5" align="center"><input type="submit" name="Register"         id="Register" value="Register"> 
    </td>   
  </tr>
</table>

</form>
<?php
//5
mysql_close($con);
?>
</body>
</html>