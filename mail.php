<?php

$name = $_POST['student'];
$visitor_email = $_POST['email'];
$bay = $_POST['bay'];
$ifs .= $_POST['ifs'];
$dsw .= $_POST['dsw'];
$ssw .= $_POST['ssw'];
$word = "@student.uj.ac.za";

if($bay == true){
    $bay = "Click on the link to access BAY Textbook(s) https://1drv.ms/u/s!AvvgY06e9tmAg6kQrrScdmZ9Ntqslg?e=xehzwz";
}
if($ifs == true){
    $ifs = "Click on the link to access IFS Textbook(s) https://1drv.ms/b/s!AvvgY06e9tmAg6kKMFE-0Yy1k0wsNQ?e=YNuGfv";
}
if($ssw == true){
    $ssw = "Click on the link to access CMN Textbook(s) https://1drv.ms/u/s!AvvgY06e9tmAg6kXTCbpPkXK6-T7KQ?e=1fheQN";
}
if($dsw == true){
    $dsw = "Click on the link to access DSW Textbook(s) https://1drv.ms/b/s!AvvgY06e9tmAg6kegoUk3FeevEIy2A?e=jDbPTS";
}
 
if(strpos($visitor_email, $word) == false){
    header("location: https://uj-bit-gang.github.io/fail.html");
    exit();
} else{
    $to = $visitor_email;
    $subject = "Text Book Request";
        
    $message = "Student: $name with email: $visitor_email<br>";
    $message .= "Request: <br>$dsw<br>$ssw<br>$ifs<br>$bay";
            
    $header = "From:info@newginvestments.co.za \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
            
    $retval = mail ($to,$subject,$message,$header);
            
        if( $retval == true ) {
            header("location: https://uj-bit-gang.github.io/success.html");
            exit();
        }else {
            header("location: https://uj-bit-gang.github.io/fail.html");
        }
    }
?>     