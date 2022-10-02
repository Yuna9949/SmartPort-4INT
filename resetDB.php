<?php
	$conn = mysqli_connect("localhost","root","smartport4int","test");

	$sql = "INSERT INTO traffic (
        		light01, light02, light03, 
        		light04, light05, light06, 
        		light07, light08, light09, 
        		light10, light11, light12, time
      		) VALUES (
        		'0', '0', '0',
        		'0', '0', '0',
        		'0', '0', '0',
        		'0', '0', '0', NOW()
      		);";
	$result = mysqli_query($conn, $sql);

	$sql = "UPDATE map SET weight='1';";
	$result = mysqli_query($conn, $sql);

	$sql = "UPDATE get_traffic SET
        		light01='0', light02='0', light03='0', 
        		light04='0', light05='0', light06='0', 
        		light07='0', light08='0', light09='0', 
        		light10='0', light11='0', light12='0';";
	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);
?>
