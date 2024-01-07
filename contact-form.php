<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "mayankagrawal2911@gmail.com";
    $subject = "New Message from Contact Form";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $mailResult = mail($to, $subject, $message, $headers);

    if ($mailResult) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
