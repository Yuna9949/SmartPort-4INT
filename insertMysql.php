<?php
  try{
    $t1 = $_GET['t1'];
    $t2 = $_GET['t2'];
    $t3 = $_GET['t3'];
    $t4 = $_GET['t4'];
    $t5 = $_GET['t5'];
    $t6 = $_GET['t6'];
    $t7 = $_GET['t7'];
    $t8 = $_GET['t8'];
    $t9 = $_GET['t9'];
    $t10 = $_GET['t10'];
    $t11 = $_GET['t11'];
    $t12 = $_GET['t12'];
    
    $conn = mysqli_connect("localhost","root","smartport4int","test");
    $sql = "INSERT INTO traffic (
        light01, light02, light03, 
        light04, light05, light06, 
        light07, light08, light09, 
        light10, light11, light12, time
      ) VALUES (
        '$t1', '$t2', '$t3',
        '$t4', '$t5', '$t6',
        '$t7', '$t8', '$t9',
        '$t10', '$t11', '$t12', NOW()
      );";
    mysqli_query($conn, $sql);
    
    $sql = "UPDATE get_traffic SET 
        light01='$t1', light02='$t2', light03='$t3', 
        light04='$t4', light05='$t5', light06='$t6', 
        light07='$t7', light08='$t8', light09='$t9', 
        light10='$t10', light11='$t11', light12='$t12';";
    mysqli_query($conn, $sql);
    
    mysqli_close($conn);
    
    $result['success'] = true;
    $result['data'] = "success";
    $result['msg'] = $t1;
    $result['code']	= $t2;
    
  } catch(exception $e) {
    $result['success'] = false;
    $result['data'] = "fail";
    $result['msg'] = $e->getMessage();
    $result['code']	= $e->getCode();
  } finally {
    echo json_encode($result, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
  } 
?>
