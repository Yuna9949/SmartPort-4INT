<?php
	$road = $_GET['road'];
	$wth = $_GET['wth'];

	$r2w = $road*2+$wth;
	$r4w = $road*4+$wth;
	$r6 = $road*6;
	$r4 = $road*4;
	$r7 = $road*7;
	$r3 = $road*3;
	$r3w = $road*3+$wth;


	$conn = mysqli_connect("localhost","root","smartport4int","test");
	$sql1 = "UPDATE map SET weight = '".$r2w."' WHERE traffic='1' OR traffic='6' OR traffic='7' OR traffic='8' OR traffic='12';";
	$sql2 = "UPDATE map SET weight = '".$r4w."' WHERE traffic='2';";
	$sql3 = "UPDATE map SET weight = '".$r6."' WHERE traffic='3' OR traffic='4' OR traffic='9' OR traffic='10';";
	$sql4 = "UPDATE map SET weight = '".$r4."' WHERE traffic='5' OR traffic='11';";
	$sql5 = "UPDATE map SET weight = '".$r7."' WHERE traffic='13' OR traffic='16';";
	$sql6 = "UPDATE map SET weight = '".$r3."' WHERE traffic='14' OR traffic='17';";
	$sql7 = "UPDATE map SET weight = '".$r3w."' WHERE traffic='15' OR traffic='18';";
		
	mysqli_query($conn, $sql1);
	mysqli_query($conn, $sql2);
	mysqli_query($conn, $sql3);
	mysqli_query($conn, $sql4);
	mysqli_query($conn, $sql5);
	mysqli_query($conn, $sql6);
	mysqli_query($conn, $sql7);

	$data = $road;
	echo $data;
?>
