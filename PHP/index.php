<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index_page</title>
</head>

<body>
<table width="1358" border="0">
  <tr>
    <td height="98" colspan="3" bgcolor="#0066FF"><h1>&nbsp;Unversity</h1></td>
  </tr>
  <tr>
    <td width="18%"  height="501">&nbsp;</td>
    <td width="57%">
       <form name="form" method="post" action="login.php">
         <table width="902" height="481" border="0s">
           <tr>
              <td colspan="2" align="center"><h1><strong>Log In</strong></h1></td>
           </tr>
           <tr>
             <td width="525" align="center"> <h2><em><strong>User Name</strong></em></h2></td>
             <td width="367" > 
		        <?php
				  if(@$_COOKIE["username"] !="")
				  {
	               echo("<input type='text' name='un' id='un' value='".@$_COOKIE["username"]."'/>");
				  }
				  else
				  {
					echo("<input type='text' name='un' id='un' />");
				  }
              ?>
         </td>
       </tr>
         <tr>
             <td width="525" align="center"> <h2><em><strong>Password</strong></em></h2></td> 
             <td width="367"> 
                 <?php
		           if(@$_COOKIE["password"] != "")
		            {
                      echo("<input type='password' name='pw' id='pw' value='".@$_COOKIE["password"]."'/>");
		            }
		          else
		            {
			          echo("<input type='password' name='pw' id='pw' />");
		             }
                 ?> 
            </td>
         </tr>
           <tr>
             <td height="96" colspan="2" align="center"> <strong> 
               <?php
                 if(@$_COOKIE["username"] !="" |@$_COOKIE["password"] !="")
				   {
                    echo("<input name='rm' type='checkbox' id='rm' value='rm' checked>");
		           }
		         else
		           {
			        echo("<input name='rm' type='checkbox' id='rm' value='rm' >");
		            }
                ?>
               <label for="rm"><em>Rmember me</em></label> </strong>
             </td> 
           </tr>
           <tr>
             <td colspan="2" style="text-align: center"> <input type="submit" name="submit" id="submit" value=" login "></td>
           </tr>
           <tr>
             <td colspan="2" style="text-align: center"> <h3><a href="Member/professor.php"><em><strong>Sign Up Professor</strong></em></a></h3>

    <h3><a href="Member/student.php"><em><strong>Sign Up Student</strong></em></a></h3></td>
           </tr>
         </table>
       </form>
    </td>
    <td width="25%"  height="501">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="3" bgcolor="#0066FF">&copy;unversity</td>
  </tr>
</table>
</body>
</html>