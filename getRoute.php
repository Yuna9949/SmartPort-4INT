<?php
	$t = array();
	function checkW($st, $se, $dt, $de, $tab){
		global $t;
		
		$conn = mysqli_connect("localhost","root","smartport4int","test");
		$sql = "SELECT * FROM map WHERE start_traffic='".$st."' AND start_enter='".$se."' ORDER BY dest_enter;";
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($result)){
			//echo '<br>';
			for($i = 0; $i < $tab; $i = $i + 1) {
				//echo '-';
			}
			//echo 'start node:'.$st.' '.$se.' - neighber node:'.$row['dest_traffic'].' '.$row['dest_enter'].' - ';
			
			$n = $st*10+$se;
			$pos = $row['dest_traffic']*10+$row['dest_enter'];
			
				//echo 't1 e1 w'.$t[11].' - ';
			if($t[$pos] > $t[$n]+$row['weight']) {
				//echo 'update node:'.$t[$pos].' -> '.$t[$n]+$row['weight'];
				
				$t[$pos] = $t[$n]+$row['weight'];
				checkW($row['dest_traffic'], $row['dest_enter'], $dt, $de, $tab+1);
			}
			//else echo 'node:'.$t[$pos];	
		}
		
		$dest = $dt*10+$de;
		return $t[$dest];
	}

	function getCost($st, $se, $dt, $de){
		$c = 0;
		
		global $t;
		for($i = 1; $i <= 12; $i = $i + 1) {
			for($j = 1; $j <= 6; $j = $j + 1) {
				$num = $i*10+$j;
				$t[$num] = 1000;
			}
		}
		
		$n = $st*10+$se;
		$t[$n] = 0;
		
		$tab = 0;
		
		checkW($st, $se, $dt, $de, $tab);
		
		$dest = $dt*10+$de;
		$c = $t[$dest];
		
		return $c;
	}

	$start_traffic = $_GET['start_traffic'];
	$start_enter = $_GET['start_enter'];
	$dest_traffic = $_GET['dest_traffic'];
	$dest_enter = $_GET['dest_enter'];
	$conn = mysqli_connect("localhost","root","smartport4int","test");

	$sql = "SELECT * FROM map WHERE start_traffic='".$start_traffic."' AND start_enter='".$start_enter."';";

	$result = mysqli_query($conn, $sql);

	$mincost = 1000;
	$traffic = 0;
	$dt = 0;

	while($row = mysqli_fetch_assoc($result)){
		//print_r($row);
		//echo ''.$row['dest_traffic'].' / '.$row['dest_enter'].'';

		$cost = getCost($row['dest_traffic'], $row['dest_enter'], $dest_traffic, $dest_enter);

		//echo '<br><br> cost='.$cost.' <br><br>';
		if($cost < $mincost) {
			$maxcost = $cost;
			$traffic = $row['traffic'];
			$dt = $row['dest_traffic'];
		}
	}

	$sql = "SELECT * FROM traffic ORDER BY time DESC";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	if($dt > 9) $row["light".$start_traffic] = $traffic;
	else	    $row["light0".$start_traffic] = $traffic;

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
	//echo ' / '.$sql.' / ';
	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);
	
?>
