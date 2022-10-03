<?php
	$road = $_GET['road'];
	$wth = $_GET['wth'];


	$conn = mysqli_connect("localhost","root","smartport4int","test");
	$sql = "UPDATE map SET weight = '".$road*2+$wth."' WHERE traffic='1';
		UPDATE map SET weight = '".$road*4+$wth."' WHERE traffic='2';
		UPDATE map SET weight = '".$road*6."' WHERE traffic='3';
		UPDATE map SET weight = '".$road*6."' WHERE traffic='4';
		UPDATE map SET weight = '".$road*4."' WHERE traffic='5';
		UPDATE map SET weight = '".$road*2+$wth."' WHERE traffic='6';
		UPDATE map SET weight = '".$road*2+$wth."' WHERE traffic='7';
		UPDATE map SET weight = '".$road*4+$wth."' WHERE traffic='8';
		UPDATE map SET weight = '".$road*6."' WHERE traffic='9';
		UPDATE map SET weight = '".$road*6."' WHERE traffic='10';
		UPDATE map SET weight = '".$road*4."' WHERE traffic='11';
		UPDATE map SET weight = '".$road*2+$wth."' WHERE traffic='12';
		UPDATE map SET weight = '".$road*7."' WHERE traffic='13';
		UPDATE map SET weight = '".$road*3."' WHERE traffic='14';
		UPDATE map SET weight = '".$road*3+$wth."' WHERE traffic='15';
		UPDATE map SET weight = '".$road*7."' WHERE traffic='16';
		UPDATE map SET weight = '".$road*3."' WHERE traffic='17';
		UPDATE map SET weight = '".$road*3+$wth."' WHERE traffic='18';
		";
		
	mysqli_query($conn, $sql);

	$data = $road;
	echo $data;
?>
