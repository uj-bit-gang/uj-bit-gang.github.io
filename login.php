<?php
session_start();
include("config.php");

$user = mysqli_real_escape_string($db,$_POST['student']);
$student =  md5($user);
$pin = '0681721606';

if($user != $pin){
   $query = "SELECT * FROM student WHERE student_no ='$student'";
   $result = mysqli_query($db,$query);
   if(mysqli_num_rows($result)){
      $_SESSION['loggedin'] = TRUE;
      $_SESSION['name'] = $_POST['student'];
      $_SESSION['id'] = $user;
      header("location: welcome");
   }else
      header("location: fail");
      exit("Wrong student number");
}else
$student_ids = [];

foreach($student_ids as $student_no){
   $temp_id = password_hash($student_no, PASSWORD_DEFAULT);
   $hashed_id = md5($student_no);   
   $sql = "INSERT INTO `student` (`id`, `student_no`, `unique_id`) VALUES (NULL, '$hashed_id', '$temp_id')";
   if(mysqli_query($db, $sql)){
      echo "";
   }
   echo "Done!";
}
?>