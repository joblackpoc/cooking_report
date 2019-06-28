<?php
		echo "<center>";
		echo "<form action=\"fromtable.php\" method=\"get\">";
		echo "<input type=\"text\" size=\"10\" name=\"TEXT1\"> ";
		echo "<input type=\"text\" size=\"10\" name=\"TEXT2\">";
		echo "<input type=\"submit\">";
		echo "</form>";
		echo "</center>";
	
		$dbhost = "localhost:3300";
		$dbuser = "root";
		$dbpass = "123456";
		$dbname = "data_hinfo_backup";
		$dbc = mysql_connect($dbhost,$dbuser,$dbpass)or die ("Cannot Connect Mysql") ;
		$dbs = mysql_select_db($dbname)or die ("Cannot Connect Db");
		$text1 = $_GET["TEXT1"];
		$text2 = $_GET["TEXT2"];
		mysql_db_query($dbname,"SET NAMES UTF8");
		$sql="select * from mas_person_onerecord_chronic_demo WHERE AGE BETWEEN '".$text1."' and '".$text2."' limit 20";
		$q=mysql_query($sql);

		echo "<table id=\"input\"  border=\"1\">";
		echo"<thead>";
		echo "<tr>
				<th>HOSPCODE</th>
				<th>HOSPNAME</th>
				<th>HOSPTYPENAME</th>
				<th>PID</th>
				<th>CID</th>
				<th>NAME</th>
				<th>ADDRESS</th>
				<th>YEAR_RPT</th>
				<th>BIRTH</th>
				<th>AGE</th>
				<th>SEX</th>
				<th>TAMBON</th>
				<th>VILLAGE_ID</th>
				<th>IS_HT_NON_REGISTER</th>
				<th>IS_HT</th>
				<th>IS_HT_FIRST</th>
				<th>DATE_DIAG_HT</th>
				<th>DATE_SCREEN_HT</th>
				<th>HT_SBP</th>
				<th>HT_DBP</th>
				<th>HT_RESULT</th>
				<th>IS_DM_NON_REGISTER</th>
				<th>IS_DM</th>
				<th>IS_DM_FIRST</th>
				<th>DATE_DIAG_DM</th>
				<th>BSLEVEL</th>
				<th>DM_RESULT</th>
				<th>DATE_CHANGE</th>
				<th>MONTH_CHANGE</th>
				<th>HT_GROUP</th>
				<th>DMGROUP</th>
				<th>HT_REFER_DATE</th>
				<th>DM_REFER_DATE</th>
				<th>DATE_LAST_HBA1C</th>
				<th>LABRESULT_HBA1C</th>
				<th>IS_HT_CONTROL</th>
				<th>HT_CONTROL_DATE</th>
				<th>IS_DM_CONTROL</th>
				<th>DM_CONTROL_DATE</th>
				<th>HOSPCODE_RX</th>
				<th>HOMEVISIT</th>
				<th>HT_COM_EYE</th>
				<th>HT_COM_KIDNEY</th>
				<th>HT_COM_HEART</th>
				<th>HT_COM_BRAIN</th>
				<th>HT_COM_FOOT</th>
				<th>HT_COM_OTHER</th>
				<th>DM_COM_EYE</th>
				<th>DM_COM_KIDNEY</th>
				<th>DM_COM_HEART</th>
				<th>DM_COM_BRAIN</th>
				<th>DM_COM_FOOT</th>
				<th>DM_COM_OTHER</th>
				<th>LABTEST01_DATE</th>
				<th>LABTEST01_RESULT</th>
				<th>LABTEST05_DATE</th>
				<th>LABTEST05_RESULT</th>
				<th>LABTEST07_DATE</th>
				<th>LABTEST07_RESULT</th>
				<th>LABTEST09_DATE</th>
				<th>LABTEST09_RESULT</th>
				<th>LABTEST12_DATE</th>
				<th>LABTEST12_RESULT</th>
				<th>ASPIRIN_DATE</th>
				<th>RETINA_DATE</th>
				<th>WORKING01</th>
				<th>WORKING02</th>
				<th>WORKING03</th>
				<th>WORKING04</th>
				<th>WORKING05</th>
				<th>WORKING06</th>
			</tr>";
		echo"</thead>";
		
		echo"<tbody>";
		while($rs=mysql_fetch_array($q)){
			echo "<tr>
					<td>$rs[HOSPCODE]</td>
					<td>$rs[HOSPNAME]</td>
					<td>$rs[HOSPTYPENAME]</td>
					<td>$rs[PID]</td>
					<td>$rs[CID]</td>
					<td>$rs[NAME]</td>
					<td>$rs[ADDRESS]</td>
					<td>$rs[YEAR_RPT]</td>
					<td>$rs[BIRTH]</td>
					<td>$rs[AGE]</td>
					<td>$rs[SEX]</td>
					<td>$rs[TAMBON]</td>
					<td>$rs[VILLAGE_ID]</td>
					<td>$rs[IS_HT_NON_REGISTER]</td>
					<td>$rs[IS_HT]</td>
					<td>$rs[IS_HT_FIRST]</td>
					<td>$rs[DATE_DIAG_HT]</td>
					<td>$rs[DATE_SCREEN_HT]</td>
					<td>$rs[HT_SBP]</td>
					<td>$rs[HT_DBP]</td>
					<td>$rs[HT_RESULT]</td>
					<td>$rs[IS_DM_NON_REGISTER]</td>
					<td>$rs[IS_DM]</td>
					<td>$rs[IS_DM_FIRST]</td>
					<td>$rs[DATE_DIAG_DM]</td>
					<td>$rs[BSLEVEL]</td>
					<td>$rs[DM_RESULT]</td>
					<td>$rs[DATE_CHANGE]</td>
					<td>$rs[MONTH_CHANGE]</td>
					<td>$rs[HT_GROUP]</td>
					<td>$rs[DM_GROUP]</td>
					<td>$rs[HT_REFER_DATE]</td>
					<td>$rs[DM_REFER_DATE]</td>
					<td>$rs[DATE_LAST_HBA1C]</td>
					<td>$rs[LABRESULT_HBA1C]</td>
					<td>$rs[IS_HT_CONTROL]</td>
					<td>$rs[HT_CONTROL_DATE]</td>
					<td>$rs[IS_DM_CONTROL]</td>
					<td>$rs[DM_CONTROL_DATE]</td>
					<td>$rs[HOSPCODE_RX]</td>
					<td>$rs[HOMEVISIT]</td>
					<td>$rs[HT_COM_EYE]</td>
					<td>$rs[HT_COM_KIDNEY]</td>
					<td>$rs[HT_COM_HEART]</td>
					<td>$rs[HT_COM_BRAIN]</td>
					<td>$rs[HT_COM_FOOT]</td>
					<td>$rs[HT_COM_OTHER]</td>
					<td>$rs[DM_COM_EYE]</td>
					<td>$rs[DM_COM_KIDNEY]</td>
					<td>$rs[DM_COM_HEART]</td>
					<td>$rs[DM_COM_BRAIN]</td>
					<td>$rs[DM_COM_FOOT]</td>
					<td>$rs[DM_COM_OTHER]</td>
					<td>$rs[LABTEST01_DATE]</td>
					<td>$rs[LABTEST01_RESULT]</td>
					<td>$rs[LABTEST05_DATE]</td>
					<td>$rs[LABTEST05_RESULT]</td>
					<td>$rs[LABTEST07_DATE]</td>
					<td>$rs[LABTEST07_RESULT]</td>
					<td>$rs[LABTEST09_DATE]</td>
					<td>$rs[LABTEST09_RESULT]</td>
					<td>$rs[LABTEST12_DATE]</td>
					<td>$rs[LABTEST12_RESULT]</td>
					<td>$rs[ASPIRIN_DATE]</td>
					<td>$rs[RETINA_DATE]</td>
					<td>$rs[WORKING01]</td>
					<td>$rs[WORKING02]</td>
					<td>$rs[WORKING03]</td>
					<td>$rs[WORKING04]</td>
					<td>$rs[WORKING05]</td>
					<td>$rs[WORKING06]</td>
					</tr>";
		}
		echo"</tbody>";
		echo "</table>";
	?>
