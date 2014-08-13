<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
header("Content-Type: text/html; charset=utf-8");
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("数据库连接失败");
}else{
	echo "连接成功";
}
mysql_select_db("love",$con);
$insert="INSERT INTO user (username,password) values('$username','$password')";
$result=mysql_query($insert,$con);
if (!$result) {
	die("注册失败");
}else{
	echo "注册成功";
}
 ?>
<a href="index.html">点击这里去登录</a>
</body>
</html>