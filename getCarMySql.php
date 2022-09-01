<?php
	try{
		$num = (string)$_GET['num'];

		$conn = mysqli_connect("localhost","root","smartport4int","test");

		$sql = "SELECT * FROM truck WHERE num=".$num." ORDER BY time DESC;";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);
		$data['x'] = $row['x'];
    		$data['y'] = $row['y'];
   
		mysqli_close($conn);
		
		$data['success'] = true;
		$data['msg'] = "success";
		$data['code'] = $num;
	} catch(exception $e) {
		$data['success'] = false;
    		$data['x'] = "fail";
		$data['y'] = "fail";
    		$data['msg'] = $e->getMessage();
    		$data['code']	= $e->getCode();
	} finally {
		echo json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
	}
?>
