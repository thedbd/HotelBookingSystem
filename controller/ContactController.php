<?php
include 'view/contact.php';
?>

<?php
    if (isset($_GET['p'])) {
        if ($_GET['p'] == "contact") {
            if (empty($_POST)) {
                include 'view/contact.php';
                return;
            }
            $name = $_POST['cname'];
            $to = $_POST['cemail'];
            $subject = $_POST['csubject'];
            $msg = $_POST['cmessage'];
            $headers = "From: linkwithdm@gmail.com" . "\r\n" .
            
            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);
            
            // send email
            if(mail($to,$subject,$msg,$headers)){
                echo "mail sent successfully";
            }
            else
            {
                echo "mail can't be sent.";
            }
        }
    }
?>