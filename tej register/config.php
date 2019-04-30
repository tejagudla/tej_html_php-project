<?php
//$con=mysql_connect("hostname","username","password")
$con=mysql_connect("localhost","root","");
if(!$con)
{
mysql_error();
}
mysql_select_db("tez",$con);
//echo "success";
?>