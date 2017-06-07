<?php
    //Check for post
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Get $_POST variables
        $name = strip_tags(trim($_POST['name']));
        $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_EMAIL);
        $message = trim($_POST['message']);
        $recipient = $_POST['recipient'];
        $subject = $_POST['subject'];

        //Check if form fields are empty
        if(empty($name) || empty($message) || empty($email)){
            //400 response code (failure) and exit
            http_response_code(400);
            echo "Please check your form fields";
            exit;
        }

        //Build message
        $message = "Name: $name\n";
        $message .= "Email: $email\n\n";
        $message .= "Message: \n$message\n";

        //Build Headers
        $headers="From: $name <$email>";

        //Send Email
        if(mail($recipient,$subject,$message,$headers)){
            //Set 200 response (success)
            http_response_code(200);
            echo "Thank you, your message has been sent";
        }else{
            //Set 500 response (internal service error)
            http_response_code(500);
            echo "Error sending message";
        }

    }else{
        //Set 403 response
        http_response_code(403);
        echo "There was an error with your submission, please try again.";
    }
?>