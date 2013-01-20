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
<center><div class="message">
<?php
$con = mysql_connect("localhost:3306","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $NOTE_ID=$_POST['note_id'];//get id from form
mysql_select_db("mzssystems", $con);  //select database
$R=mysql_query("UPDATE notes SET trash=1 WHERE id=$NOTE_ID");
if(!$R){echo "مشکل در حذف کردن";}
else
{echo "با موفقیت حذف شد";}

?>
</div></center>