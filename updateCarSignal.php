
<?php
	$num = $_GET['num'];
	$traffic_signal = $_GET['traffic_signal'];
                
	$conn = mysqli_connect("localhost","root","smartport4int","test");
	$sql = "UPDATE car_get_signal SET car_signal='$traffic_signal' WHERE num='$num';";
	mysqli_query($conn, $sql);

	$data = $traffic_signal;
	echo $data;
?>
