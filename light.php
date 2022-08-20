<?php
	$conn = mysqli_connect("localhost","root","smartport4int","test");
	$sql = "SELECT * FROM traffic ORDER BY time DESC";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);
?>
