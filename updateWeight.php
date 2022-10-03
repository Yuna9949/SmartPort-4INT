<?php
	$traffic_light = $_GET['traffic_light'];
	$traffic_enter = $_GET['traffic_enter'];

	$conn = mysqli_connect("localhost","root","smartport4int","test");
	$sql = "UPDATE map SET weight = weight + 500 WHERE dest_traffic='$traffic_light' AND dest_enter='$traffic_enter';";
	mysqli_query($conn, $sql);

	$data = $traffic_light;
	echo $data;
?>
