<?php
  try{
    $num = $_GET['num'];
    $x = $_GET['x'];
    $y = $_GET['y'];
    $u = $_GET['u'];
    $r = $_GET['r'];
    $d = $_GET['d'];
    $l = $_GET['l'];
    $container = $_GET['container'];
    
    $conn = mysqli_connect("localhost","root","smartport4int","test");
    $sql = "INSERT INTO truck (
        time, num, x, y, u, r, d, l, container
      ) VALUES (
        NOW(), '$num', '$x', '$y', '$u', '$r', '$d', '$l', '$container'
      );";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    
    $result['success'] = true;
    $result['data'] = "success";
    $result['msg'] = $x;
    $result['code']	= $y;
    
  } catch(exception $e) {
    $result['success'] = false;
    $result['data'] = "fail";
    $result['msg'] = $e->getMessage();
    $result['code']	= $e->getCode();
  } finally {
    echo json_encode($result, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
  } 
?>
