<?php
 //echo "nihao"
$con = mysqli_connect('127.0.0.1','root','123456','traval')or die('数据库连接失败！');
if($con){
mysqli_query($con,'set names utf8'); 
//插入新用户
$sql = "insert into log(username,password) values('gouli','456')";
$result = mysqli_query($con,$sql);
var_dump($result);
//查询所有用户
  $sql2="SELECT * FROM log ";
  $result2=mysqli_query($con,$sql2); 
  while($result_arr=mysqli_fetch_assoc($result2)){
      echo"<pre>";
      print_r($result_arr);}

}else{
    echo'失败';
}


//  $link=mysqli_connect("127.0.0.1","root","123456");
//  mysqli_select_db($link,"traval") or die("数据库选择失败！<br>");
//     //mysqli_query($link,"set names'utf-8'");
//    if (!$link) {
//      echo"连接失败！";
//    }
//   $sql="SELECT * FROM log ";
//   $result=mysqli_query($link,$sql); 
//   while($result_arr=mysqli_fetch_assoc($result)){
//       echo"<pre>";
//       print_r($result_arr);
  



?>
