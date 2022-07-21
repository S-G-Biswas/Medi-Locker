
<?php

// print_r($_POST);
// var_dump_r($_POST);

require('connect.php');

 
 $name=$_POST['u_name'];
 $email=$_POST['u_email'];
 $password=$_POST['u_password'];
 $phone=$_POST['u_phone'];
 $state=$_POST['u_state'];
 $city=$_POST['u_city'];

 
 $sql="insert into user_tbl(user_name,user_email,user_password,user_phone,user_state,user_city) values('$name','$email','$password','$phone','$state','$city')";
//    echo $sql;
  mysql_query($sql,$con);

  header('location:index.php');

 ?>
