<?php
	$traffic_light = $_GET['traffic_light'];
	$traffic_enter = $_GET['traffic_enter'];

	$conn = mysqli_connect("localhost","root","smartport4int","test");
	$sql = "SELECT * FROM map 
		WHERE dest_traffic='".$traffic_light."' 
		AND dest_enter='".$traffic_enter."'";
		$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		$row['weight'] = $row['weight'] + 10;
		$sql2 = "UPDATE map SET weight='".$row['weight']."' WHERE description='".$row['description']."';";
		mysqli_query($conn, $sql2);
	}
		
	mysqli_query($conn, $sql);

	$data = $traffic_light;
	echo $data;
?>
