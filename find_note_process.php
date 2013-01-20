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
$TITLE=$_POST['note_title_search'];
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mzssystems", $con);//Database:mzssystems
$result = mysql_query("SET CHARACTER SET 'utf8';");
$result= mysql_query("SET SESSION collation_connection = 'utf8_persian_ci';"); 
$result = mysql_query("SELECT * FROM notes
WHERE title='$TITLE'");
  echo "<table border='1'>
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
echo "</table>";
?>
</div></center>