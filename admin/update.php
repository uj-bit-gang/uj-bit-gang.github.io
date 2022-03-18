<?php
session_start();
include ('config.php');

$update = $_POST['update'];
if ($update != 'announcement'){
    $module = mysqli_real_escape_string($db,$_POST['module']);
    $date = mysqli_real_escape_string($db,$_POST['date']);
    $time = mysqli_real_escape_string($db,$_POST['time']);
    $admin = $_SESSION['name'];
    $task = mysqli_real_escape_string($db,$_POST['task']);

    $sql = "INSERT INTO `duedate`(`id`, `module`, `date`, `time`, `admin`, `task`) 
            VALUES (' ','$module','$date','$time','$admin','$task')";
    if(mysqli_query($db, $sql)){
        echo "";
    }
    echo "Done!";
}
else{
    $module = mysqli_real_escape_string($db,$_POST['module']);
    $date = mysqli_real_escape_string($db,$_POST['date']);
    $time = mysqli_real_escape_string($db,$_POST['time']);
    $admin = $_SESSION['name'];
    $task = mysqli_real_escape_string($db,$_POST['task']);
    $due = $date." ".$time;

    $sql = "INSERT INTO `announcements`(`time`, `module`, `massage`, `id`, `admin_name`) 
    VALUES ('$due','$module','$task',' ','$admin')";
        if(mysqli_query($db, $sql)){
            echo "";
        }
        echo "Done!";
}
?>