<?php
	$number = $_GET['number'];
	$traffic_light = $_GET['traffic_light'];

	$conn = mysqli_connect("localhost","root","smartport4int","test");

	// update traffic
	$sql = "SELECT * FROM traffic ORDER BY time DESC";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	$traffic = 0;

	if($traffic_light > 9) 	$traffic = $row["light".$traffic_light];
	else	    		$traffic = $row["light0".$traffic_light];
	
	if($traffic == 3 || $traffic == 4 || $traffic == 11 || $traffic == 13 || $traffic == 17)
		$traffic = 21;
	else if($traffic == 1 || $traffic == 6 || $traffic == 8 || $traffic == 15)
		$traffic = 22;
	else if($traffic == 5 || $traffic == 9 || $traffic == 10 || $traffic == 14 || $traffic == 16)
		$traffic = 23;
	else if($traffic == 2 || $traffic == 7 || $traffic == 12 || $traffic == 18)
		$traffic = 24;

	$lst="";

	if($traffic_light > 9) 	$lst="light".$traffic_light;
	else	    		$lst="light0".$traffic_light;
	$row[$lst] = $traffic;

	$sql = "INSERT INTO traffic (
			light01, light02, light03, 
			light04, light05, light06, 
			light07, light08, light09, 
			light10, light11, light12, time
		) VALUES (
			'".$row["light01"]."', '".$row["light02"]."', '".$row["light03"]."',
			'".$row["light04"]."', '".$row["light05"]."', '".$row["light06"]."',
			'".$row["light07"]."', '".$row["light08"]."', '".$row["light09"]."',
			'".$row["light10"]."', '".$row["light11"]."', '".$row["light12"]."', NOW()
		);";
	$result = mysqli_query($conn, $sql);

	$sql = "UPDATE get_traffic SET ".$lst." = '".$row[$lst]."'"; 
	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);

	$data = $traffic_light;
	echo $data;
?>
