<?php
    $num = $_GET['num'];

		$conn = mysqli_connect("localhost","root","smartport4int","test");

		$sql = "SELECT * FROM crain".$num." ORDER BY num ASC WHERE loaded = 0";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);
		$return_value = $row['carry'];
    $time = $row['time'];

    $sql = "UPDATE crain".$num." SET loaded = 1 WHERE time = ".$time;
    mysqli_query($conn, $sql);
    
		mysqli_free_result($result);
		mysqli_close($conn);
		echo $return_value;
?>
