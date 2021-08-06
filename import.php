<?php
$connect = mysqli_connect("localhost", "Ray_Chu", "0000", "dns_sample");

$file = fopen("dns_sample.csv", "r");

if($file != NULL){
while($data = fgetcsv($file, 1000, ",")){
$date = new DateTime();
$time = new time();
$usec = $data[0];
$SourceIP = $data[1];
$SourcePort = $data[2];
$DestinationIP = $data[3];
$DestinationPort = $data[4];
$Dns_qry_name = $data[5];

$query = 'INSERT INTO dns_sample(date, time, usec, SourceIP, SourcePort, DestinationIP, DestinaitonPort, Dns_qry_name)
values('$date', '$time', '$usec', '$SourceIP', '$SourcePort', '$DestinationIP', '$DestinationPort', '$Dns_qry_name');

$action = mysqli_query($connect, $query);
}
}

fclose($file);
mysqli_close($connect);
?>





