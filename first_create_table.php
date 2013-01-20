<?php
$con = mysql_connect("localhost:3306","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//Database Is mzssystems(MZS System)
mysql_select_db("mzssystems", $con);
$sql = "CREATE TABLE `notes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(128) collate utf8_unicode_ci NOT NULL default '',
  `note` varchar(60) collate utf8_unicode_ci NOT NULL default '',
  `trash` varchar(60) collate utf8_unicode_ci NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;";
//trash: is 0 means:trash   is 1 means no trash
// Execute query
$R=mysql_query($sql,$con);


if(!$R){echo "Error Create Table";}
else
{echo "Ok....Table Create";}


mysql_close($con);
?>