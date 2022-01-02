<?php

$con=mysql_connect("localhost","root","");

if(!$con)
{
	echo(mysql_error());
}

//2

$db=mysql_select_db("unversity",$con);

if(!$db)
{
	echo(mysql_error());
}

?>