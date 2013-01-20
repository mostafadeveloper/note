
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
<div class="message">
<center>
<?php
//This is a dcript that add note to DB
$NOTE_TITLE = $_POST['note_title'];
$NOTE = $_POST['note_body'];
if($NOTE_TITLE == NULL || $NOTE == NULL)//Checking For Empty Submit Value-In Empty Send Error To User
{
echo "هر دو فیلد را باید پر کنید";
}
else
{
$con = mysql_connect("localhost:3306","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//The DB Is mzssystems
mysql_select_db("mzssystems", $con);
$R = mysql_query("SET CHARACTER SET 'utf8';"); 
$R= mysql_query("SET SESSION collation_connection = 'utf8_persian_ci';"); 
$R=mysql_query("INSERT INTO notes (title, note)
VALUES ('$NOTE_TITLE', '$NOTE')");
if(!$R){echo "مشکل در اضافه کردن کردن";}
else
{echo "با موفقیت اضافه شد";}
//mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
//VALUES ('Glenn', 'Quagmire', '33')");

mysql_close($con);

}
?>
</center>
</div>