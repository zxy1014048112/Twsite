<?php
$user=$_POST['username'];
$pwd=$_POST['password'];
echo"你输入的账号密码是：$user $pwd";



$con = mysqli_connect('127.0.0.1','root','123456','traval')or die('数据库连接失败！');
if($con){
mysqli_query($con,'set names utf8'); 
//插入新用户
// $sql = "insert into log(username,password) values('gouli','456')";
// $result = mysqli_query($con,$sql);
// var_dump($result);
//查询所有用户
  $sql2="SELECT * FROM log where username='$user' and password='$pwd'";
  $result2=mysqli_query($con,$sql2); 
  while($result_arr=mysqli_fetch_assoc($result2)){
      echo"<pre>";
      print_r($result_arr);}


      if($result2->num_rows >0){
            echo '登录成功';
             }else{
            echo '登录失败';
};


}else{
    echo'链接数据库失败';
}



?>