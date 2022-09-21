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

	mysqli_close($conn);
?>
