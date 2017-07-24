<?php
header("content-type:text/html;charset=utf-8");
 $str= file_get_contents("data/message.json");
 $data=json_decode($str);
 $randomKey=array_rand($data,1);
 echo $data[$randomKey];
?>