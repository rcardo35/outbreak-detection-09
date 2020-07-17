<?php
////    require 'vendor/autoload.php'; // If you're using Composer (recommended)
//// Comment out the above line if not using Composer
//    require("sendgrid-php/sendgrid-php.php");
//// If not using Composer, uncomment the above line and
//// download sendgrid-php.zip from the latest release here,
//// replacing <PATH TO> with the path to the sendgrid-php.php file,
//// which is included in the download:
//// https://github.com/sendgrid/sendgrid-php/releases
//
//
//        $to = filter_var($_POST['demo-email'], FILTER_SANITIZE_EMAIL);
//        $building = filter_var($_POST['building'], FILTER_SANITIZE_STRING);
//
//        $email = new \SendGrid\Mail\Mail();
//        $email->setFrom("covidalert@techpointuniversity.edu", "TechPoint University Alert System");
//        $email->setSubject("COVID-19 Alert");
//        $email->addTo('rcardona4@miners.utep.edu', "University Member");
//        $email->addContent("text/html", "<strong>Univeristy Alert:</strong>
//            <p>A University team member who was in the <b>building</b> building within the last two weeks has been confirmed with COVID-19 and is under medical supervision off-campus. Until further notice no one is permitted to enter the <b>building</b> while the University employs professional sanitation and protocols for restoring the area for entry and use.</p>
//            <p>This is an automated notification, please do not reply to this email. If you have any questions please contact: <mailto>healthcenter@techpointuniversity.edu directly.</mailto></p>"
//        );
//        $sendgrid = new \SendGrid('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');
//        try {
//            $response = $sendgrid->send($email);
//            print $response->statusCode() . "\n";
//            print_r($response->headers());
//            print $response->body() . "\n";
//        } catch (Exception $e) {
//            echo 'Caught exception: ' . $e->getMessage() . "\n";
//        }
    
    
    $client  = new http\Client;
    $request = new http\Client\Request;
    $request->setRequestUrl('https://aquamarine-falcon-3956.twil.io/sendEmail');
    $request->setRequestMethod('POST');
    $body = new http\Message\Body;
    $body->append('{
    "TO": "rcardona4@miners.utep.edu",
    "FROM": "sms@bdm.owldemo.com",
    "SUBJECT": "testing",
    "BODY": "Hello World"
}');
    $request->setBody($body);
    $request->setOptions(array());
    $request->setHeaders(array(
            'Content-Type' => 'application/json'
    ));
    $client->enqueue($request)->send();
    $response = $client->getResponse();
    echo $response->getBody();