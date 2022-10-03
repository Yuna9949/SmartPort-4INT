<?php
	$traffic_light = $_GET['traffic_light'];
	$traffic_enter = $_GET['traffic_enter'];
	$road = $_GET['road'];
	$wth = $_GET['wth'];

	$r2w = $road*2+$wth;
	$r3w = $road*3+$wth;
	$r4w = $road*4+$wth;
	$r3 = $road*3;
	$r4 = $road*4;
	$r6 = $road*6;
	$r7 = $road*7;

	$conn = mysqli_connect("localhost","root","smartport4int","test");
	$sql = "SELECT * FROM map 
		WHERE dest_traffic='".$traffic_light."' 
		AND dest_enter='".$traffic_enter."'";
		$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		
		$row['weight'] = $row['weight']+100;
		
		$sql2 = "UPDATE map SET weight='".$row['weight']."' WHERE description='".$row['description']."';";
		mysqli_query($conn, $sql2);
	}
		
	mysqli_query($conn, $sql);

	$data = $traffic_light;
	echo $data;
?>
