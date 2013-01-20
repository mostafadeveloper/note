<?php
$con = mysql_connect("localhost:3306","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("mzssystems", $con);  //select database

$ID=$_POST['modify_id'];
$TITLE=$_POST['modify_title'];
$NOTE=$_POST['modify_note'];

$Result_Title=mysql_query("UPDATE notes SET title='". $TITLE . "' WHERE id=$ID");
$Result_Note=mysql_query("UPDATE notes SET note='" . $NOTE . "' WHERE id=$ID");//Veryimportant SQL Cource==>note='" . $NOTE . "'

if(!$Result_Title){echo "مشکل در ویرایش عنوان";echo "<br/>";}
else
{echo "عنوان ویرایش شد";echo "<br/>";}

if(!$Result_Note){echo "مشکل در ویرایش یادداشت";echo "<br/>";}
else
{echo "یادداشت ویرایش شد";echo "<br/>";}
?>