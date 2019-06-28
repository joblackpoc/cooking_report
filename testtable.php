<?php
mysql_connect('localhost:3300','root','123456');
mysql_select_db('data_hinfo_backup');

$sql="select * from mas_person_onerecord_chronic_demo limit 10";
$q=mysql_query($sql);


echo "<table border=\"1\">";
echo "<tr><th>รหัส</th><th>ชื่อ</th></tr>";


while($rs=mysql_fetch_array($q)){
	echo "<tr><td>$rs[HOSPCODE]</td><td>$rs[HOSPNAME]</td></tr>";
}

echo "</table>";
?>
