<?php

$name = $_POST['student'];
$visitor_email = $_POST['email'];
$bay = $_POST['bay'];
$ifs .= $_POST['ifs'];
$dsw .= $_POST['dsw'];
$ssw .= $_POST['ssw'];
$word = "@student.uj.ac.za";
 
if(strpos($visitor_email, $word) == false){
    header("location: https://uj-bit-gang.github.io/fail.html");
    exit();
} else{
    $to = "220023913@student.uj.ac.za";
    $subject = "Text Book Request";
        
    $message = "Student: $name with email: $visitor_email";
    $message .= "Request: $dsw, $ssw, $dsw, $bay text-book(s)";
            
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