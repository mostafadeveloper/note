<?php
$con = mysql_connect("localhost:3306","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("mzssystems", $con);  //select database
//process Delete Note----->
$NOTE_ID=$_GET['id'];//get id from form

$R=mysql_query("UPDATE notes SET trash=1 WHERE id=$NOTE_ID");

if(!$R){echo "مشکل در حذف کردن";

}
else
{echo "با موفقیت حذف شد";
echo "<br/>";
echo "برای بازیابی از لینک زیر استفاده کنید";
echo "<br/>";
echo "<a href='./action_undelete.php?id=" . $NOTE_ID . "'/>لینک بازیابی ردیف حذف شده</a>";
}

?>