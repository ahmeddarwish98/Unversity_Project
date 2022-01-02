

<?php
session_start();

if(@$_SESSION["did"] == "")
{
	die("You are not login");
}


?>
