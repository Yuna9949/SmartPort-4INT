<?php
	$t = array();
	function checkW($st, $se, $dt, $de, $tab){
		global $t;
		
		$conn = mysqli_connect("localhost","root","smartport4int","test");
		$sql = "SELECT * FROM model_map 
			WHERE start_traffic='".$st."' 
			AND start_enter='".$se."'";
		
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($result)){			
			$n = $st*10+$se;
			$pos = $row['dest_traffic']*10+$row['dest_enter'];
			
			if($t[$pos] > $t[$n]+$row['weight']) {
				$t[$pos] = $t[$n]+$row['weight'];
				checkW($row['dest_traffic'], $row['dest_enter'], $dt, $de, $tab+1);
			}
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
				$t[$num] = 2000000000;
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
	
	$number = $_GET['number'];
	$start_traffic = $_GET['start_traffic'];
	$start_enter = $_GET['start_enter'];
	$dest_traffic = $_GET['dest_traffic'];
	$dest_enter = $_GET['dest_enter'];
	$logcheck = $_GET['logcheck'];

	$conn = mysqli_connect("localhost","root","smartport4int","test");

	$sql = "SELECT * FROM model_map 
		WHERE start_traffic='".$start_traffic."' 
		AND start_enter='".$start_enter."' 
		ORDER BY dest_enter;";

	$result = mysqli_query($conn, $sql);

	$mincost = 2000000000;
	$traffic = 0;
	$dt = 0;

	// chose way
	while($row = mysqli_fetch_assoc($result)){
		$cost = getCost($row['dest_traffic'], $row['dest_enter'], $dest_traffic, $dest_enter);
		
		if($cost < $mincost) {
			$mincost = $cost;
			$traffic = $row['traffic'];
		}
	}

	// update traffic
	$lst="";

	if($start_traffic > 9)  $lst = "light".$start_traffic;
	else	    		$lst = "light0".$start_traffic;

	if($logcheck != 'false') {
		$sql = "SELECT * FROM traffic ORDER BY time DESC";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

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
		//echo ' / '.$sql.' / ';
		$result = mysqli_query($conn, $sql);
	}

	$sql = "UPDATE get_traffic SET ".$lst." = '".$traffic."';"; 
	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);

	$data = $start_traffic;
	echo $data;
?>
