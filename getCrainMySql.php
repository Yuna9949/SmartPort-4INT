<?php
	try{
		$num = (string)$_GET['num'];

		$conn = mysqli_connect("localhost","root","smartport4int","test");

		$sql = "SELECT * FROM crain".$num." WHERE loaded='0' ORDER BY time ASC;";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);
		$data['data'] = $row['carry'];
    		$time = $row['time'];

    		$sql = "UPDATE crain".$num." SET loaded = 1 WHERE time = '".$time."'";
    		mysqli_query($conn, $sql);
   
		mysqli_close($conn);
		
		$data['success'] = true;
		$data['msg'] = $time;
		$data['code'] = $num;
	} catch(exception $e) {
		$data['success'] = false;
    		$data['data'] = "fail";
    		$data['msg'] = $e->getMessage();
    		$data['code']	= $e->getCode();
	} finally {
		echo json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
	}
?>
