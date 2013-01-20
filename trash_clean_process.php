<style>
div.message{
width:210px;
height;auto;
margin-left:34%;
background-color:#e0e;
border-radius:6px;
box-shadow:5px 5px 10px #c4c4c4;
}
</style>
<div class="message"><center>
<?php
$con = mysql_connect("localhost:3306","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//Database Is mzssystems
mysql_select_db("mzssystems", $con);
$R=mysql_query('DELETE FROM notes WHERE trash=1');
if(!$R){echo "مشکل در خالی کردن سطل اشغال";}
else
{echo "سطل اشغالی خالی شد";
echo "<br/>";
printf("سطر های پاک شده: %d\n", mysql_affected_rows());
}
?>
</center></div>