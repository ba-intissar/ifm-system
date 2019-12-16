<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
				 $phone = strip_tags(trim($_POST["phone"]));
				$phone = str_replace(array("\r","\n"),array(" "," "),$phone);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($phone) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Il y'a une problème. Merci de complèter le formulaire et envoyer.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "dorraselmi7@gmail.com";

        // Set the email subject.
        $subject = "Nouveau contacte de $name";

        // Build the email content.
        $email_content = "Name: $name\n";
		$email_content = "Phone: $phone\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "De: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Merci! Ton message a été envoyé.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
           echo "Oops! Erreur, Votre message ne peut pas être envoyé.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Une problème au niveau ton formulaire, merci d'essayer encore!.";
    }

?>