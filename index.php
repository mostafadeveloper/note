<!doctype HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index,follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="title" content="" />
<link rel="stylesheet" type="text/css" media="all" href="../style/style.css" />
<link rel="shortcut icon" href="../favicon.ico"/>
<title>Simple Note System</title>

</head>
<style type="text/css"></style>
<body>
<div class="main">
<div class="header"><br/>MZS</div>
<div class="menu">
   <a href="./index.php">صفحه نخست</a>
   <a href="./index.php" class="active">یاداشت</a>
   <a href="../task_management/index.php">مدیریت کارها</a>
</div>
<div class="content">
<div class="post">
<h1>لیست یاداشت ها</h1>
<div class="post_cnt">
<?php

$con = mysql_connect("localhost:3306","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//Database Is mzssystems
mysql_select_db("mzssystems", $con);

$result = mysql_query("SET CHARACTER SET 'utf8';"); 
$result = mysql_query("SET SESSION collation_connection = 'utf8_persian_ci';"); 
$result = mysql_query("SELECT * FROM notes WHERE trash='0'");//WHERE trash='0' Means : Yanee To Ashghali Nistand

  echo "<center><table border='1'>
<tr>
<th>ID</th>
<th>Title</th>                       
<th>Note</th>
<th>Actions</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['note'] . "</td>";
  echo "<td class='databox'><center><a target='_blank' title='حذف کردن:برای اعمال تغیرات صفحه را لود کنید یا میتوانید بعد از پاک کردن از بازیابی استفاده کنید' href=action_delete.php?id=" . $row['id'] . ">[X]</a>&nbsp;<a target='_blank' title='بازیابی' href=action_undelete.php?id=" . $row['id'] . ">[->]</a>&nbsp;<a target='_blank' title='ویرایش' href=action_modify.php?id=" . $row['id'] . ">[<>]</a></center></td>";
  echo "</tr>";
  }
echo "</table></center>";



//Show table End

//mysql_free_result($result);
/*
$result = mysql_query("SELECT * FROM notes");//$result = mysql_query("SELECT id,title,note FROM people WHERE id = '42'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);
echo "<table>";
echo "<tr>";
echo "<td>ID</td>"; // the id
echo "<td>Title</td>"; // the title value
echo "<td>Note</td>"; // the note value
echo "</tr>";
echo "<tr>";
echo "<td>" . $row[0] . "</td>"; // the id
echo "<td>" . $row[1] . "</td>"; // the title value
echo "<td>" . $row[2] . "</td>"; // the note value
echo "</tr>";
echo "</table>";
*/
?>
</div>
</div>

<div class="sidebar">
<h3>کنترل پانل</h3>
<ul class="cp">
<li class="notes"><a href="./index.php">یاداشت ها</a><br/></li>
<li class="add_note"><a href="./add_note.php">اضافه کردن</a><br/></li>
<li class="del_note"><a href="./delete_note.php">حذف کردن</a><br/></li>
<li class="find_note"><a href="./find_note.php">جستجو</a><br/></li>
<li class="notes_trash"><a href="./trash.php">اشغالی</a><br/></li>
</ul>
<h3>ابزارها</h3>
<center>
<object type="application/x-shockwave-flash"
 data="../clock/relog.swf"
 width="120" height="120">
<param name="movie" value="./clock/relog.swf">
<param name="WMode" value="Transparent">
</object>
</center>

<p class="rss"><a style="color: #FFFFFF; text-decoration: none; font-family: Arial; font-size: 8pt; border: 1px solid #FF9955;  background-color: #FF6600" href="<-BlogXmlLink->">&nbsp;RSS&nbsp;</a></p>

</div>
</div>
<!-- <div class="footer"><a href="#">All Rights Reserved</a></div> -->
 </div>
</body>

</html>