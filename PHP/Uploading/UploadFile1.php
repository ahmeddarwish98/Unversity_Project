<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$uploadFile=$_FILES["file"]["name"];

//echo($_FILES["file"]["name"]);
/*
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />"; //the error code resulting from the file upload
  }
else
  {
	  
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";  //the name of the uploaded file
  echo "Type: " . $_FILES["file"]["type"] . "<br />";//the type of the uploaded file
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />"; //the size in bytes of the uploaded file
  echo "Stored in: " . $_FILES["file"]["tmp_name"];  //the name of the temporary copy of the file stored on the server
  }
 
  */
  ///////
  
  
  

  if (@$_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . @$_FILES["file"]["error"] . "<br />";
    }
 

    elseif(file_exists("C:/xampp/htdocs/PHP28-11/Upload/" . @$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
	  
	  
      }
    else
      {
      move_uploaded_file(@$_FILES["file"]["tmp_name"],
      "C:/xampp/htdocs/PHP28-11/Upload/" . @$_FILES["file"]["name"]);
      echo "Stored in: " . "C:/xampp/htdocs/PHP28-11/Upload/" . @$_FILES["file"]["name"];
      }
  



?>
</body>
</html>