<?php
	$conn = mysqli_connect("localhost","root","smartport4int","test");

	$sql = "UPDATE map SET weight='1';";
	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);
?>
