<?php
$con = mysql_connect("localhost:3306","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("mzssystems", $con);  //select database
//process Undelete Note----->
$NOTE_ID=$_GET['id'];//get id from form

$R=mysql_query("UPDATE notes SET trash=0 WHERE id=$NOTE_ID");

if(!$R){echo "مشکل در بازیابی";}
else
{echo "با موفقیت بازیابی شد";}


?>