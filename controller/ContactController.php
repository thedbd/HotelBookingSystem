<?php

    require 'PHPMailer-master/PHPMailerAutoload.php';

    if(isset($_GET['p']))
    {
        if($_GET['p']=="contact"){
            if (empty($_POST)) {
                include 'view/contact.php';
                 return;
                }

                $email = $_POST['email'];
                $name = $_POST['uname'];
                $subject = $_POST['subject'];
                $msg = $_POST['msg'];
                
                $mail = new PHPMailer();
                
                //Enable SMTP debugging.
                //$mail->SMTPDebug = 1;
                //Set PHPMailer to use SMTP.
                $mail->isSMTP();
                //Set SMTP host name
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPOptions = array(
                                    'ssl' => array(
                                        'verify_peer' => false,
                                        'verify_peer_name' => false,
                                        'allow_self_signed' => true
                                    )
                                );
                //Set this to true if SMTP host requires authentication to send email
                $mail->SMTPAuth = TRUE;
                //Provide username and password
                $mail->Username = "davidmagar09@gmail.com";
                $mail->Password = "9806579201";
                //If SMTP requires TLS encryption then set it
                $mail->SMTPSecure = "false";
                $mail->Port = 587;
                //Set TCP port to connect to
                
                $mail->From = $email;
                $mail->FromName = $name;
                
                //Recipients
                $mail->setFrom('from@example.com', 'Mailer');
                    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
                    //$mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addAddress("davidmagar09@gmail.com", "Hotel");
                $mail->addReplyTo($email, $name);
                // $mail->addCC('cc@example.com');
                //  $mail->addBCC('bcc@example.com');
             
                $mail->isHTML(true);
                
                $mail->Subject = $subject;
                $mail->Body = $msg;//"<i>this is test mail.</i>";//.$row["pass"];
                $mail->AltBody = "This is the plain text version of the email content";
                if(!$mail->send())
                {
                   
                    include 'view/contact.php';
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }
                else
                {   
                    $success = "message sent successfully!";
                    header("location: $base_url?p=contact&msg=<?php $success ?>");
                   // include 'view/contact.php';
                   // echo "<script type='text/javascript'>alert('Message has been sent successfully!')</script>";
                }

        }
    }

    
