<?php 
if(isset($_POST['submit'])){
    $to = "aaron@wsioutdoor.com,jake.bapple@gmail.com"; // this is your Email address
    $from = $_POST['inputEmail']; // this is the sender's Email address
    $name = $_POST['inputName'];
    $subject = $_POST['inputSubject'];
    $my_message = $_POST['inputMessage'];
    $message = "Someone has sent you a message using your contact form: " + "Name: " + $name + " " + "Email: " + $from + " " + "Subject: " + $subject + " " + "Message: " + $my_message +".";
    mail($to, $subject, $message);
    header("Location: thank_you.php");

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>