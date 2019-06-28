<?php
$conn=mysql_connect('localhost:3300','root','123456');
 if(!$conn){
  die('Mysql connection error '.mysql_error());
 }
$db=mysql_select_db('data_hinfo_backup');
 if(!$db){
  die('Database selection failed '.mysql_error());
 }
 mysql_db_query($db,"SET NAMES UTF8");
$sql="select HOSPCODE,HOSPNAME,HOSPTYPENAME,PID,YEAR_RPT,SEX from mas_person_onerecord_chronic_demo limit 10";
$result=mysql_query($sql,$conn);
if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
$data=array();

while ($row = mysql_fetch_array($result)){
	$row_data = array(
	    'HOSPCODE'=>$row['HOSPCODE'],
	    'HOSPNAME'=>$row['HOSPNAME'],
	    'HOSPTYPENAME'=>$row['HOSPTYPENAME'],
	    'PID'=>$row['PID'],
	    'YEAR_RPT'=>$row['YEAR_RPT'],
	    'SEX'=>$row['SEX'],
	);
	array_push($data, $row_data);
}
echo json_encode($data);
?>
