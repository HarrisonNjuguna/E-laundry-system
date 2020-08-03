<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $number = trim($_POST["number"]);
    $message = trim($_POST["message"]);

    if ($name == "" OR $email == "" OR $number == "" OR $message == "") {
      echo "Kindly fill all the fields";
      exit;
    }

    foreach ($_POST as $value) {
      if (stripos($value, 'Content-Type:') !== FALSE) {
        echo "There was a problem with the information you entered";
        exit;
      }
    }

    if ($_POST["address"] != "") {
      echo "Your form submision has an error";
      exit;
    }

    require_once("include/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!$mail->ValidateAddress($email)) {
      echo "You must specify a valid email address";
      exit;
    }

    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
    $email_body = $email_body . "Number: " . $number . "<br>";
    $email_body = $email_body . "Message: " . $message;

    $mail->SetFrom($email, $name);
    $address = "ellywenani@gmail.com";
    $mail->AddAddress($address, "Elly Wenani");
    $mail->Subject    = "Mail to E-Laundry | " . $name;
    $mail->MsgHTML($email_body);

    if(!$mail->Send()) {
      echo "There was a problem sending the mail: " . $mail->ErrorInfo;
      exit;
    } else {
      echo "Message sent!";
    }

    header("Location: contact.php?status=thanks");
    exit;
  }
?><?php
$pageTitle = "Contact E-Laundry";
$section = "contact";
include("include/header.php"); ?>

    <div class="contact-section">

        <h1>Contact Us</h1>

        <?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
          <p>Thanks for contacting E-Laundry. We will get back to you soon. </p>
        <?php } else { ?>

        <form class="contact-form" action="contact.php" method="post">

            <input type="text" class="contact-form-text" placeholder="Your Name" name="name" value="" id="name">

            <input type="email" class="contact-form-text" placeholder="Your E-mail" name="email" value="" id="email">

            <input type="text" class="contact-form-text" placeholder="Phone Number" name="number" id="number">

            <input style="display: none;" type="text" class="contact-form-text" placeholder="address" name="address" id="address">


        <textarea class="contact-form-text" placeholder="Your Feedback" name="message" id="message"></textarea>

            <input type="submit" class="contact-form-btn" name="" value="Send">

        </form>

        <?php } ?>

      </div>

<?php include("include/footer.php"); ?>
