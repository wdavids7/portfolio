<?php
$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        // Submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        // Test email
        $to = "blah@blah.com";
        $body = "";

        $body .= "From: " . $userName . "\r\n";
        $body .= "Email: " . $userEmail . "\r\n";
        $body .= "Message: " . $message . "\r\n";

        //Disabled sent, need liveserver
        //mail($to,$messageSubject, $body);

        $message_sent = true;
    } else {
        $invalid_class_name = "form-invalid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/contactus.css">

    <title>Contact us</title>
</head>
<br>

<body>
    <?php
    if ($message_sent) :
    ?>

        <h3 class="text-center">Thank you for making contact, we'll be in touch.</h3>

    <?php
    else :
    ?>

        <!-- Contact us section start-->
        <div class="container">
            <h1 class="text-center">Contact us</h1><br>
            <!-- Contact form -->
            <form action="./contactus-page.php" method="POST" class="contact-form">

                <!-- Name Input -->
                <div class="form-group">
                    <label for="name" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full name" tabindex="1" required>
                </div>

                <!-- Email Input -->
                <div class="form-group">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control <?= $invalid_class_name ?? "" ?>" id="email" name="email" placeholder="Your e-mail" tabindex="2" required>
                </div>

                <!-- Subject Input -->
                <div class="form-group">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello there!" tabindex="3" required>
                </div>

                <!-- Message Input -->
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" cols="50" rows="5" id="message" name="message" placeholder="Enter message here..." tabindex="4"></textarea>
                </div>

                <!-- Button - Send -->
                <div class="text-center"><button type="submit" name="submit" class="btn btn-warning">Send</button></div>
            </form>
        </div>
        <!-- Contact us section end -->

    <?php
    endif;
    ?>
</body>

<footer>
    <!-- JS -->
    <script src="../js/contactus.js"></script>

</footer>

</html>