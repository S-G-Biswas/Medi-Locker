<?php

require('connect.php');
session_start();
$email=$_POST['u_email'];
$password=$_POST['u_password'];

$sql="select * from user_tbl where user_email='$email' and user_password='$password'";

$res= mysql_query($sql,$con);
$numrows=mysql_num_rows($res);
//echo $numrows;

if ($numrows>=1){
    $data=mysql_fetch_assoc($res);
    $_SESSION['user_id']=$data['user_id'];
    $_SESSION['user_name']=$data['user_name'];
    $_SESSION['user_login']= 1;
    header('location:../admin/index.php');
}

else{
    header('location:login.php?error=1');
}
?>