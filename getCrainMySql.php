<?php
	try{
		$num = (string)$_GET['num'];
		$senario = (string)$_GET['senario'];

		$conn = mysqli_connect("localhost","root","smartport4int","test");

		$sql = "SELECT * FROM crain WHERE loaded='0' AND senario='".$senario."' AND num='".$num."' ORDER BY rand();"; // ORDER BY time ASC;";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);
		$data['data'] = $row['container'];
    		$time = $row['time'];

    		//$sql = "UPDATE crain SET loaded = 1 WHERE time = '".$time."' AND senario='".$senario."' AND num='".$num."'";
    		//mysqli_query($conn, $sql);
   
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
