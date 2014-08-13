<?php 
$username=$_POST['username'];
$password=$_POST['password'];


$con=mysql_connect("localhost","root","");
if(!$con){
	die("数据库连接失败")
}else{
	echo "连接成功";
}
mysql_select_db("love",$con);
$insert="INSERT INTO user (username,password) values($username,$password)";

 ?>