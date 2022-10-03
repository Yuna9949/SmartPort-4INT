<?php
	$traffic_light = $_GET['traffic_light'];
	$traffic_enter = $_GET['traffic_enter'];


	$conn = mysqli_connect("localhost","root","smartport4int","test");
	$sql1 = "UPDATE map SET weight = '".$r2w."' WHERE traffic='1' OR traffic='6' OR traffic='7' OR traffic='8' OR traffic='12';";
		
	mysqli_query($conn, $sql);

	$data = $traffic_light;
	echo $data;
?>
