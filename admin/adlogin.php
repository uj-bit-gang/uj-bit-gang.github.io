<?php
session_start();
include("config.php");

$user = mysqli_real_escape_string($db,$_POST['auth']);
$auth =  md5($user);
$pin = '0681721606';

if($user != $pin){
   $query = "SELECT * FROM `admin` WHERE auth = '$auth' ";
   $result = mysqli_query($db,$query);
   if(mysqli_num_rows($result)){
      $results = mysqli_fetch_array($result);
      $_SESSION['loggedin'] = TRUE;
      $_SESSION['name'] = $results['admin_name'];
      header("location: admin.php");
   }else
      header("location: ../fail.html");
      exit("Wrong auth number");
}else
$auth_ids = [];

foreach($auth_ids as $auth_no){
   $temp_id = password_hash($auth_no, PASSWORD_DEFAULT);
   $hashed_id = md5($auth_no);   
   $sql = "INSERT INTO `admin`(`admin_name`, `auth`) VALUES ('Axole','$hashed_id')";
   if(mysqli_query($db, $sql)){
      echo "";
   }
   echo "Done!";
}
