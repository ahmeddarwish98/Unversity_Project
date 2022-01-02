
<?php

//echo($_FILES["file"]["type"]);

	       {   
                  if ((($_FILES["photo"]["type"] == "image/gif")
                  || ($_FILES["photo"]["type"] == "image/jpeg")
                  || ($_FILES["photo"]["type"] == "image/pjpeg"))
                  && ($_FILES["photo"]["size"] < 20000))//size in byte 20KB
                    {
                     if ($_FILES["photo"]["error"] > 0)
                      {
                      echo "Return Code: " . $_FILES["photo"]["error"] . "<br />";
                       }

                          elseif (file_exists("C:/xampp/htdocs/Projects/Unversity/Uploading/img/" . $_FILES["photo"]["name"]))
                            {
                            echo $_FILES["photo"]["name"] . " already exists. ";
                            }
                            else
                            {
	                      	 $photo=$_FILES['photo']['name'];
						
				        		$mime=substr($photo,strpos($photo,"."));
						
						       $newImagNAme=rand(1,1000000).chr(rand(97,122)).$mime;
						
	                           move_uploaded_file($_FILES["photo"]["tmp_name"], "C:/xampp/htdocs/Projects/Unversity/Uploading/img/" .$newImagNAme);
							   
							   
							   
							   
							   
	
	                            echo "Stored in: " . "C:/xampp/htdocs/Projects/Unversity/Uploading/img/" . $newImagNAme;
                                  echo "Stored in: " . "C:/xampp/htdocs/Projects/Unversity/Uploading/img/" . $_FILES["photo"]["name"];
                                }
                             }
                         else
                           {
                          echo("Invalid file type or size");
						   }
						   }
?>
</body>
</html>