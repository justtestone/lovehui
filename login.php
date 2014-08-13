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
$select="SELECT * FROM user where username='$username' and password='$password'";
$result=mysql_query($select,$con);
if(!mysql_fetch_assoc($result)) {
	die("用户名或密码错误");
}else{
	echo "登录成功";
}
?>
<a href="home.html">点击这里去首页</a>
</body>
</html>