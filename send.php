<?php
	//error_reporting(E_ALL);
	//ini_set('display_errors','1');
	function mysql_conn(){
	$conn = mysqli_connect("localhost","root","smartport4int","test");
	if(!$conn){
		echo "DB fail". mysqli_connect_error();
	}else{
		echo "DB success";
	}

	$sql = "SELECT * FROM test";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	echo $row["time"];	
	mysqli_close($conn);
	}
mysql_conn();
?>
