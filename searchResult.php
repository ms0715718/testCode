<?php
$con = mysqli_connect("localhost","root","0000","dns_sample");

$tableName = 'import';
$result = mysqli_query($con,"select *from $tablename");
$records = mysqli_fetch_all($result);

$SourceIP = $_POST['SourceIP'];
$timeRange = $_POST['timeRange'];
$FQDN = $_POST['FQDN'];

foreach($records as $key => $values){
	if($SourceIP == $values[4]){
		foreach($values as $key => value){
			echo "$value ";
		}
		echo "<br>";
	}
}

mysqli_close($con);
?>
