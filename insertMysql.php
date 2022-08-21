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
    
    $result['success'] = true;
    $result['data'] = $t1+" "+$t2+" "+$t3+" "+$t4+" "+$t5+" "+$t6+" "+$t7+" "+$t8+" "+$t9+" "+$t10+" "+$t11+" "+$t12;
    
  } catch(exception $e) {
    $result['success'] = false;
    $result['msg'] = $e->getMessage();
    $result['code']		= $e->getCode();
  } finally {
    echo json_encode($result, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
  } 
?>
