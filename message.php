
<?php

// print_r($_POST);
// var_dump_r($_POST);

require('connect.php');

 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $state=$_POST['state'];
 $city=$_POST['city'];
 $message=$_POST['message'];

 
 $sql="insert into message_tbl(sender_name,sender_email,sender_state,sender_city,sender_phone,message) values('$name','$email','$state','$city','$phone','$message')";
//    echo $sql;
  mysql_query($sql,$con);

  header('location:index.php');

 ?>
