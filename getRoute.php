<?php
	$t = array();
	$tc = array();

	function checkW($st, $se, $dt, $de, $t, $tc){
		$conn = mysqli_connect("localhost","root","smartport4int","test");
		$sql = "SELECT * FROM map WHERE start_traffic='".$st."' AND start_enter='".$se."';";
		$result = mysqli_query($conn, $sql);
		
		$dest = $dt*10+$de;
		if($tc[$dest] == 1) {
			echo ' <br><br>destination :'.$t[$dest].'<br>';
			return $t[$dest];
		}
		
		while($row = mysqli_fetch_assoc($result)){
			echo '<br> / start node:'.$st.' '.$se.' - neighber node:'.$row['dest_traffic'].' '.$row['dest_enter'].' - ';
			
			$n = $st*10+$se;
			$pos = $row['dest_traffic']*10+$row['dest_enter'];
			if($tc[$pos] == 0 && $t[$pos] > $t[$n]+$row['weight']) {
				$tc[$pos] = 1;
				$t[$pos] = $t[$n]+$row['weight'];
				echo 'update node:'.$t[$pos].' - ';
				checkW($row['dest_traffic'], $row['dest_enter'], $dt, $de, $t, $tc);
			}
			$tc[$pos] = 1;
			
			
		}
	}

	function getCost($st, $se, $dt, $de){
		$c = 0;
		
		for($i = 1; $i <= 12; $i = $i + 1) {
			for($j = 1; $j <= 6; $j = $j + 1) {
				$num = $i*10+$j;
				$t[$num] = 1000;
			}
		}
		
		for($i = 1; $i <= 12; $i = $i + 1) {
			for($j = 1; $j <= 6; $j = $j + 1) {
				$num = $i*10+$j;
				$tc[$num] = 0;
			}
		}
		
		$n = $st*10+$se;
		$t[$n] = 0;
		$tc[$n] = 1;
		
		checkW($st, $se, $dt, $de, $t, $tc);
		
		$dest = $dt*10+$de;
		$c = $t[$dest];
		
		return $c;
	}

	$start_traffic = 2;//$_GET['start_traffic'];
	$start_enter = 4;//$_GET['start_enter'];
	$dest_traffic = 5;//$_GET['dest_traffic'];
	$dest_enter = 1;//$_GET['dest_enter'];
	$conn = mysqli_connect("localhost","root","smartport4int","test");

	$sql = "SELECT * FROM map WHERE start_traffic='".$start_traffic."' AND start_enter='".$start_enter."';";

	$result = mysqli_query($conn, $sql);

	$mincost = 1000;
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
