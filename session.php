<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select student_no from uj where student_no = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['student'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: login.html");
      die();
   }
?>