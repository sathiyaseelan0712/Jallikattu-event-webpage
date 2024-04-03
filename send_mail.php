<?php
require 'master/PHPMailerAutoload.php'; 

            $name=$_POST['name'];
            $mail=$_POST['email'];
            $mailto = $mail;
            $mailSub = "Feedback registration...";
            $mailMsg = "Thanks for using our feedback".$name;
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail ->SMTPDebug = 0;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'ssl';
            $mail ->Host = "smtp.gmail.com"; 
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);
            $mail ->Username = "tnjallikattu2024@gmail.com";
            $mail ->Password = "9042252093";
            $mail ->SetFrom("tnjallikattu2024@gmail.com");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMsg;
            $mail ->AddAddress($mailto);

            if($mail->Send())
             {
                 echo "<script>";
                 echo "alert('Mail Sent successfully....');";
                 echo "window.location.href='index.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='contact.html';</script>";              
             }
                    
         
   
    

?>


   

