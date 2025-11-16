<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your email address here 👇
    $to = "mupenzicedrick587@gmail.com";  
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $subject = "New Message from $name via Portfolio Website";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('✅ Message sent successfully!'); window.location.href='index.html#contact';</script>";
    } else {
        echo "<script>alert('❌ Message could not be sent. Please try again later.'); window.location.href='index.html#contact';</script>";
    }
}
?>
