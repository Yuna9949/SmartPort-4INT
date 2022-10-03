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
		
		if($row['weight'] == $r2w+1500) 	$row['weight'] = $r2w+2000;
		if($row['weight'] == $r3w+1500) 	$row['weight'] = $r3w+2000;
		if($row['weight'] == $r4w+1500) 	$row['weight'] = $r4w+2000;
		if($row['weight'] == $r3+1500) 		$row['weight'] = $r3+2000;
		if($row['weight'] == $r4+1500) 		$row['weight'] = $r4+2000;
		if($row['weight'] == $r6+1500) 		$row['weight'] = $r6+2000;
		if($row['weight'] == $r7+1500) 		$row['weight'] = $r7+2000;
		
		if($row['weight'] == $r2w+1000) 	$row['weight'] = $r2w+1500;
		if($row['weight'] == $r3w+1000) 	$row['weight'] = $r3w+1500;
		if($row['weight'] == $r4w+1000) 	$row['weight'] = $r4w+1500;
		if($row['weight'] == $r3+1000) 		$row['weight'] = $r3+1500;
		if($row['weight'] == $r4+1000) 		$row['weight'] = $r4+1500;
		if($row['weight'] == $r6+1000) 		$row['weight'] = $r6+1500;
		if($row['weight'] == $r7+1000) 		$row['weight'] = $r7+1500;
		
		if($row['weight'] == $r2w+500) 		$row['weight'] = $r2w+1000;
		if($row['weight'] == $r3w+500) 		$row['weight'] = $r3w+1000;
		if($row['weight'] == $r4w+500) 		$row['weight'] = $r4w+1000;
		if($row['weight'] == $r3+500) 		$row['weight'] = $r3+1000;
		if($row['weight'] == $r4+500) 		$row['weight'] = $r4+1000;
		if($row['weight'] == $r6+500) 		$row['weight'] = $r6+1000;
		if($row['weight'] == $r7+500) 		$row['weight'] = $r7+1000;
		
		if($row['weight'] == $r2w) 		$row['weight'] = $r2w+500;
		if($row['weight'] == $r3w) 		$row['weight'] = $r3w+500;
		if($row['weight'] == $r4w) 		$row['weight'] = $r4w+500;
		if($row['weight'] == $r3) 		$row['weight'] = $r3+500;
		if($row['weight'] == $r4) 		$row['weight'] = $r4+500;
		if($row['weight'] == $r6) 		$row['weight'] = $r6+500;
		if($row['weight'] == $r7) 		$row['weight'] = $r7+500;
		
		$sql2 = "UPDATE map SET weight='".$row['weight']."' WHERE description='".$row['description']."';";
		mysqli_query($conn, $sql2);
	}
		
	mysqli_query($conn, $sql);

	$data = $traffic_light;
	echo $data;
?>
