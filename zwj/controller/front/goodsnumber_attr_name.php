<?php 
/****
author: zwj
url: http://www.boolshop.com
****/
define('ACC',true);
require('../include/init.php');
$goods_id=$_POST['goods_id'];
$goodsnumber=new GoodsnumberModel();
	$attr_value=$_POST['attr_value'];
	$sql="select sum(number) as sum from goods_number where attr_value='$attr_value' and goods_id=$goods_id";
	$result=$goodsnumber->findbysql($sql);
	echo json_encode($result);exit;


?>