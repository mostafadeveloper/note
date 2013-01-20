<?php
 $host = '127.0.0.1'; // <--  db address
 $user = 'root'; // <-- db user name
 $pass = ''; // <-- password
 $db = 'mzssystems'; // db's name
 $table = 'notes'; // table you want to export
 $file = 'export_table'; // csv name.

$link = mysql_connect($host, $user, $pass) or die("Can not connect." . mysql_error());
 mysql_select_db($db) or die("Can not connect.");

$result = mysql_query("SHOW COLUMNS FROM ".$table."");
 $i = 0;

if (mysql_num_rows($result) > 0) {
while ($row = mysql_fetch_assoc($result)) {
$csv_output .= $row['Field'].";";
$i++;}
}
$csv_output .= "<br/>";
 $values = mysql_query("SELECT * FROM ".$table."");

while ($rowr = mysql_fetch_row($values)) {
for ($j=0;$j<$i;$j++) {
$csv_output .= $rowr[$j]."; ";
}
$csv_output .= "<br/>";
}

$filename = $file."_".date("d-m-Y_H-i",time());
/*
header("Content-type: application/vnd.ms-excel");
header("Content-disposition: csv" . date("Y-m-d") . ".csv");
header( "Content-disposition: filename=".$filename.".csv");
*/ 
print $csv_output;

exit;
?>