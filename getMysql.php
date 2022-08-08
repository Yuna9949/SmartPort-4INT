<?php
	function mysql_conn(){
		$conn = mysqli_connect("localhost","root","smartport4int","test");

		$sql = "SELECT * FROM traffic ORDER BY time DESC";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);
		$return_value = json_encode(array(
			"light01" => $row["light01"],
			"light02" => $row["light02"],
			"light03" => $row["light03"],
			"light04" => $row["light04"],
			"light05" => $row["light05"],
			"light06" => $row["light06"],
			"light07" => $row["light07"],
			"light08" => $row["light08"],
			"light09" => $row["light09"],
			"light10" => $row["light10"],
			"light11" => $row["light11"],
			"light12" => $row["light12"]));
		mysqli_free_result($result);
		mysqli_close($conn);
		echo $return_value;
		//return $return_value;
	}

	mysql_conn();
?>
