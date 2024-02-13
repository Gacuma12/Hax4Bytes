<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["email"];
    $subject = "Valentine's Choice";
    $message = "Thank you for your choice! You chose: " . $_POST["choice"];
    $headers = "From: your_email@example.com" . "\r\n" .
               "Reply-To: JamesVincentGacuma@Gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
}
?>