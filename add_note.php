﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<style type="text/css">
span.msg_nt{color:red;}
span.msg_nb{color:red;}
</style>
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
<h1>اضافه کردن یاداشت</h1>
<div class="post_cnt">
بعد از اتمام کار بر روی دکمه اضافه کلیک کنید
<br/>
<form action="./add_note_process.php" method="POST" target="_black">
<input type="text" name="note_title" placeholder="عنوان یاداشت" title="تا 128 کاراکتر" class="note_title" /><span class="msg_nt">*</span><br/>
<input type="text" name="note_body" placeholder="یاداشت" title="تا 60 کاراکتر" class="note_body" /><span class="msg_nb">*</span><br/>
<input type="submit" value="اضافه" class="add_note"/>
<input type="reset" value="از نو"/>
</form>





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
