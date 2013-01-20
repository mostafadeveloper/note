<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index,follow" />
<meta name="description" content="The MZS Systems" />
<meta name="keywords" content="MZS Systems" />
<meta name="title" content="MZS Systems-Note" />
<link rel="stylesheet" type="text/css" media="all" href="../style/style.css" />
<link rel="shortcut icon" href="../favicon.ico"/>
<title>MZS Systems-Note</title>
</head>
<style type="text/css"></style>
<body>
<div class="main">
<div class="header"><br/>MZS</div>
<div class="menu">
   <a href="../index.php">صفحه نخست</a>
   <a href="./index.php" class="active">یاداشت</a>
   <a href="./" title="سفارش ساخت سیستم یا وب سایت">سفارش</a>
</div>
<div class="content">
<div class="post">
<h1>لیست یاداشت ها</h1>
<div class="post_cnt">
<form action="./trash_clean_process.php" method="POST" target="_blank">
<input type="submit" title="خالی کردن سطل آشغال" value="خالی کردن سطل آشغال" />
</form>

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
$result = mysql_query("SELECT * FROM notes WHERE trash='1'");//WHERE trash='1' Means : Yanee To Ashghali Hastan
  echo "<center><table border='1'>
<tr>
<th>ID</th>
<th>Title</th>                       
<th>Note</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['note'] . "</td>";
  echo "</tr>";
  }
echo "</table></center>";

?>
<hr/>
<h3>بازیابی یادداشت</h3>
<br/>
<center>
<form action="./action_undelete.php" method="GET" target="_blank" />
<input type="text" name="id" placeholder="را وارد کنید ID" required="required" />
<input type="submit" value="بازیابی" onclick="return confirm('بازیابی این یادداشت؟')"/>
</form>
</center>
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
