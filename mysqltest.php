<?php
	function mysql_conn(){
		$conn = mysqli_connect("localhost", "root", "smartport4int","test");
		$sql = "SELECT * FROM test ORDER BY time DESC";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$return_value = $row['status'];
		mysqli_close($conn);
		return $return_value;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>title</title>
		<script type="text/javascript">
			function mysql_conn(){
				var output = '<?php echo mysql_conn(); ?>';
				alert(output);
				document.getElementById('textbox').innerHTML = output;
				requestAnimationFrame(mysql_conn);
			}
		</script>
	</head>
	<body>
		<p id='textbox'>text</p>
		<button onclick="mysql_conn()">go</button>
	</body>
</htm>
