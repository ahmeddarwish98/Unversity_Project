<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Depart </title>

<?php

include("db_connection.php");

//3
$res1=mysql_query("select Dep_Id from depart where Dep_Dactivation=1");

$res2=mysql_query("select Dep_Id,Dep_Name from depart where Dep_Dactivation=1");

$res3=mysql_query("select Fac_Id,Fac_Name from faculty where Fac_Dactivation=1");
?>
</head>

<body>
<form name="form1" method="post" action="depart_register.php">
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
      <td height="23" align="center"><h3>Dep Id</h3></td>
      <td align="center"><h3>Dep Name</h3></td>
      <td align="center"> <h3><strong>Faculty Name</strong></h3></td>
    </tr>
    <tr>
      <td height="23">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="23" align="center">
	     <select name="Dep_Id" id="Dep_Id">
         <option value="0"> Dep Id </option>
         <?php
	      while($row1=mysql_fetch_array($res1))
	      {
		   echo("<option value='".$row1["Dep_Id"]."'>".$row1["Dep_Id"]."</option>");
	      }
	      ?>
          </select>
      </td>  
       
      
       <td height="23" align="center">
	      <select name="Dep_Name" id="Dep_Name">
	         <option value="0"> Dep Name </option>
	      <?php
	
	     while($row2=mysql_fetch_array($res2))
	     {
		  echo("<option value='".$row2["Dep_Id"]."'>".$row2["Dep_Name"]."</option>");
	     }
	
	      ?>
        </select>
      </td>
      
      <td height="23"align="center">
	     <select name="Fac_Name" id="Fac_Name">
         <option value="0"> Fac Name </option>
         <?php
	
	    while($row3=mysql_fetch_array($res3))
	    {
		echo("<option value='".$row3["Dep_Id"]."'>".$row3["Fac_Name"]."</option>");
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
      <td height="23">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="23" colspan="3" align="center"><input type="submit" name="Register"         id="Register" value="Add"> 
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