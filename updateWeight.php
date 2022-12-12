<?php
	$traffic_light = $_GET['traffic_light'];
	$traffic_enter = $_GET['traffic_enter'];
	$senario = $_GET['senario'];

	$conn = mysqli_connect("localhost","root","smartport4int","test");
	if($senario != 1) $sql = "UPDATE map SET weight = weight + 1000 WHERE dest_traffic='$traffic_light' AND dest_enter='$traffic_enter';";
	mysqli_query($conn, $sql);

	$data = $senario;
	echo $data;
?>
