<?php
	function getCost($st, $se, $dt, $de){
		$c = 0;
		return $c;
	}

	$start_traffic = 2;//$_GET['start_traffic'];
	$start_enter = 4;//$_GET['start_enter'];
	$dest_traffic = 5;//$_GET['dest_traffic'];
	$dest_enter = 1;//$_GET['dest_enter'];
	$conn = mysqli_connect("localhost","root","smartport4int","test");

	$sql = "SELECT * FROM map WHERE start_traffic='".$start_traffic."' AND start_enter='".$start_enter."';";

	$result = mysqli_query($conn, $sql);

	$mincost = 99;
	$traffic = 0;
	$dt = 0;

	while($row = mysqli_fetch_assoc($result)){
		//print_r($row);
		echo ''.$row['dest_traffic'].' / '.$row['dest_enter'].'';

		$cost = getCost($row['dest_traffic'], $row['dest_enter'], $dest_traffic, $dest_enter);

		echo ' / cost='.$cost.' / ';
		if($cost < $mincost) {
			$maxcost = $cost;
			$traffic = $row['traffic'];
			$dt = $row['dest_traffic'];
		}
	}

	$sql = "SELECT * FROM traffic ORDER BY time DESC";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	if($dt > 9) $row["light".$dt] = $traffic;
	else	    $row["light0".$dt] = $traffic;

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
	echo ' / '.$sql.' / ';
	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);
	
?>
