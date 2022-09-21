<?php
	$t = array();
	function checkW($st, $se, $dt, $de, $tab){
		global $t;
		
		$conn = mysqli_connect("localhost","root","smartport4int","test");
		$sql = "SELECT * FROM map 
			WHERE start_traffic='".$st."' 
			AND start_enter='".$se."'";
		
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($result)){
			//echo '<br>';
			for($i = 0; $i < $tab; $i = $i + 1) {
				//echo '-';
			}
			//echo 'start node:'.$st.' '.$se.' - neighber node:'.$row['dest_traffic'].' '.$row['dest_enter'].' - ';
			
			$n = $st*10+$se;
			$pos = $row['dest_traffic']*10+$row['dest_enter'];
			
				//echo 't2 e2 w'.$t[22].' - ';
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
		$t[$n] = 1;
		
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
	$before_traffic = $_GET['before_traffic'];
	$before_enter = $_GET['before_enter'];

	if($start_traffic != $before_traffic) {

		$conn = mysqli_connect("localhost","root","smartport4int","test");

		$sql = "SELECT * FROM map 
			WHERE start_traffic='".$start_traffic."' 
			AND start_enter='".$start_enter."' 
			ORDER BY dest_enter;";

		$result = mysqli_query($conn, $sql);

		$mincost = 1000;
		$traffic = 0;
		$dt = 0;

		// chose way
		while($row = mysqli_fetch_assoc($result)){
			//print_r($row);
			//echo ''.$row['dest_traffic'].' / '.$row['dest_enter'].'';

			$cost = getCost($row['dest_traffic'], $row['dest_enter'], $dest_traffic, $dest_enter);

			//echo '<br><br> cost='.$cost.' <br><br>';
			if($cost < $mincost) {
				$mincost = $cost;
				$traffic = $row['traffic'];
			}
			//echo 'maxcost='.$mincost.' / traffic='.$traffic.'<br><br>';
		}

		// change weight at passed road
		$start_e = $start_enter;
		if($start_enter == 5) {
			$start_e = 2;
		}
		if($start_enter == 6) {
			$start_e = 4;
		}
		$before_e = $before_enter;
		if($before_enter == 5) {
			$before_e = 2;
		}
		if($before_enter == 6) {
			$before_e = 4;
		}
		
		if($before_traffic == 0) {
			$sql = "UPDATE map 
				SET weight='1'
				WHERE start_traffic='3'
				AND start_enter='1' 
				AND dest_traffic='".$start_traffic."' 
				AND dest_enter='".$start_e."';";
			
			$result = mysqli_query($conn, $sql);
		}
		else {
			$sql = "SELECT * FROM map 
				WHERE start_traffic='".$before_traffic."' 
				AND start_enter='".$before_e."' 
				AND dest_traffic='".$start_traffic."' 
				AND dest_enter='".$start_e."';";
			
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$downWeight = $row['weight'] - 1;
			
			$sql = "UPDATE map 
				SET weight='".$downWeight."' 
				WHERE start_traffic='".$before_traffic."' 
				AND start_enter='".$before_e."' 
				AND dest_traffic='".$start_traffic."' 
				AND dest_enter='".$start_e."';";
			
			$result = mysqli_query($conn, $sql);
		}
		
		// change weight road that will go
		$dest_t = 0;
		$dest_e = 0;
		if($traffic == 3 || $traffic == 4 || $traffic == 11 || $traffic == 13 || $traffic == 17) { // up
			$dest_t = $start_traffic - 3;
			$dest_e = 1;
		}
		else if($traffic == 1 || $traffic == 6 || $traffic == 8 || $traffic == 15) { // right
			$dest_t = $start_traffic + 1;
			$dest_e = 2;
		}
		else if($traffic == 5 || $traffic == 9 || $traffic == 10 || $traffic == 14 || $traffic == 16) { // down
			$dest_t = $start_traffic + 3;
			$dest_e = 3;
		}
		else if($traffic == 2 || $traffic == 7 || $traffic == 12 || $traffic == 18) { // left
			$dest_t = $start_traffic - 1;
			$dest_e = 4;
		}
		
		$sql = "SELECT * FROM map 
			WHERE start_traffic='".$start_traffic."' 
			AND start_enter='".$start_e."' 
			AND dest_traffic='".$dest_t."' 
			AND dest_enter='".$dest_e."';";
		
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$upWeight = $row['weight'] + 1;
		
		$sql = "UPDATE map 
			SET weight='".$upWeight."' 
			WHERE start_traffic='".$start_traffic."' 
			AND start_enter='".$start_e."' 
			AND dest_traffic='".$dest_t."' 
			AND dest_enter='".$dest_e."';";
		
		$result = mysqli_query($conn, $sql);
		
		// update traffic
		$sql = "SELECT * FROM traffic ORDER BY time DESC";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if($start_traffic > 9) $row["light".$start_traffic] = $traffic;
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

		$data = true;
		echo $data;
	}
	else {
		$data = false;
		echo $data;
	}
?>
