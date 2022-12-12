<?php
	try {
		$conn = mysqli_connect("localhost","root","smartport4int","test");

		$sql = "SELECT * FROM `test_traffic_light`;";
		$result = mysqli_query($conn, $sql);

 		$row11 = mysqli_fetch_assoc($result);
  		$row12 = mysqli_fetch_assoc($result);
  		$row13 = mysqli_fetch_assoc($result);
  		$row14 = mysqli_fetch_assoc($result);
  		$row21 = mysqli_fetch_assoc($result);
  		$row22 = mysqli_fetch_assoc($result);
  		$row23 = mysqli_fetch_assoc($result);
  		$row24 = mysqli_fetch_assoc($result);

  		$car1l = 0;
  		$car1c = 0;
  		$car2l = 0;
  		$car2c = 0;
 
  		if     ($row11["detect_num"] == 1) {$car1l = 1; $car1c = 1;}
  		else if($row12["detect_num"] == 1) {$car1l = 1; $car1c = 2;}
  		else if($row13["detect_num"] == 1) {$car1l = 1; $car1c = 3;}
  		else if($row14["detect_num"] == 1) {$car1l = 1; $car1c = 4;}

  		else if($row11["detect_num"] == 2) {$car2l = 2; $car2c = 1;}
  		else if($row12["detect_num"] == 2) {$car2l = 2; $car2c = 2;}
  		else if($row13["detect_num"] == 2) {$car2l = 2; $car2c = 3;}
  		else if($row14["detect_num"] == 2) {$car2l = 2; $car2c = 4;}
  
	
		$data['car1l'] = $car1l;
		$data['car1c'] = $car1c;
		$data['car2l'] = $car2l;
		$data['car2c'] = $car2c;
		$data['msg'] = "success";
    		$data['code']= 0;
		
  		mysqli_free_result($result);
  		mysqli_close($conn);
		echo $data;
		
	} catch (exception $e) {
		$data['car1l'] = 0;
		$data['car1c'] = 0;
		$data['car2l'] = 0;
		$data['car2c'] = 0;
		$data['msg'] = $e->getMessage();
    		$data['code']	= $e->getCode();
	} finally {
		echo json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
	}
?>
