<?php
    if (isset( $_POST['name'])) {
        $name = strip_tags(trim($_POST['name']));
    }

    if (isset( $_POST['email'])) {
        $email = strip_tags(trim($_POST['email']));
    }

    if (isset( $_POST['subject'])) {
        $subject = strip_tags(trim($_POST['subject']));
    }

    if (isset( $_POST['details'])) {
        $details = strip_tags(trim($_POST['details']));
    }

    $recipient = 'boryana.dimitrova@outlook.com';
    $mailheader = "From: $email \r\n";
    $formcontent="Name: $name \nEmail: $email \nSubject: $subject \nMessage: $message";
    $emailSubject = 'New contact form submition';

    mail($recipient, $emailSubject, $formcontent, $mailheader) or die("Error!");
?>