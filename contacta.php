<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$suggestion = $_POST["suggestion"];
$feedback = $_POST["feedback"];
$val = $_POST['hid'];

$conn = mysqli_connect("localhost:127.0.0.1","root","","jallikattu");
if ($conn->connect_error) {
    die("Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
}

if ($val == 1) {
    $select = "INSERT INTO contact (name, email, phone, suggestion, feedback) VALUES ('" . $name . "', '" . $email . "', '" . $phone . "', '" . $suggestion . "', '" . $feedback . "')";

    $sql = mysqli_query($conn, $select);

    if ($sql) {
        echo "Inserted successfully";
        require 'master/PHPMailerAutoload.php'; 

            $name=$_POST['name'];
            $mail=$_POST['email'];
            $mailto = $mail;
            $mailSub = "Feedback registration...";
            $mailMsg = "Thanks for joining hands with our Agri world.... The awesome review, We work hard to meet expectations like yours, and we’re happy to hear we hit the mark for you.Thanks lot for your Cheers!.....".$name;
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail ->SMTPDebug = 2;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'ssl';
			$mail ->SMTPAutoTLS = false;                  
			$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);
            $mail ->Username = "tnjallikattu@gmail.com";
            $mail ->Password = "9042252093";
            $mail ->SetFrom("tnjallikattu@gmail.com");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMsg;
            $mail ->AddAddress($mailto);

            if($mail->Send())
             {
                 echo "<script>";
                 echo "alert('Thanks for registering your feedback.Confirmation  Mail Sent successfully....');";
                 echo "window.location.href='index.html';</script>";
             }
            else
             {
				 echo 'Mailer Error: ' . $mail->ErrorInfo;
                  echo "<script>";
                 echo "alert('Something went wrong.Mail not Sent successfully....');";
                 echo "window.location.href='contact.html';</script>";
            
             }
                
        
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header('location:contact.html');
}

mysqli_close($conn);
?>
