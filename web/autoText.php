
<?php 
require '/Applications/MAMP/htdocs/travita/twilio-php-master/Services/Twilio.php';
    
    $from="+441622523191";
    $to="+447825661969";
    $msg="Your item was successfully recorded. Thank you for using Travita, we wish you a safe journey.";

    // set your AccountSid and AuthToken from www.twilio.com/user/account
    $AccountSid = "ACf0754ef26af972a5f833c050efa40bf7";
    $AuthToken = "79c432c9692e378928c606c49fc1c6c1";

    $client = new Services_Twilio($AccountSid, $AuthToken);

    $message = $client->account->messages->create(array(
        "From" => $from, // "+441622523191" - def
        "To" => $to, // +447825661969 - Vic, "+447877111078" - Jay
        "Body" => $msg,
    ));

    header('Location: Ready.html');
    // Display a confirmation message on the screen
    echo "Sent message {$message->sid}";
?>