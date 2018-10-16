<?php
//Content-Type指定返回的数据格式，text/xml 对应responXML，text/html对应responseText
  header('Content-Type: text/html;charset=utf-8');
  
  //告诉浏览器不要缓存数据
  header('Cache-Control: no-cache');
  
  //产生一个随机浮点数，传入的参数用于限制范围
  function randomFloat($min = 0, $max = 1) {  
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);  
  }  
  $num = number_format(randomFloat(1, 20), 2, '.', '');
  
  //接收数据
  $item = $_POST['item'];//请求的方式要对应，发送数据的名称要对应
  $info = "";
  if($item == 'nowprice') {
     $info = '{"price":'.$num.'}';//返回一个JSON格式的字符串
  }
  echo $info;//echo的数据是返回给发送请求的页面
  
?>