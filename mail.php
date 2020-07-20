<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    $to = $_POST['demo-email'];
    $building = $_POST['building'];
    
    
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'apikey';                     // SMTP username
            $mail->Password   = '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';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom('covidalert@techpointuniversity.edu', 'TechPoint University COVID-19 Alert System');
            $mail->addAddress($to);     // Add a recipient
            $mail->addCC('rcardona4@miners.utep.edu');
        
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'COVID-19 ALERT';
            $mail->Body    = "<p><b>University Alert:</b></p>
                          <p>A University team member who was in <b>{$building}</b> within the last two weeks has been confirmed with COVID-19 and is under medical supervision off-campus. Until further notice, no one is permitted to enter <b>{$building}</b> while the University employs professional sanitation and protocols for restoring the area for entry and use.</p>
                          <p>This is an automated notification. Please do not reply to this email.<br> If you have any questions please contact: healthcenter@techpointuniversity.edu directly.

</p>";
        
            $mail->send();
            echo 'Message has been sent';
            header('Location: health-center-view.php?noaccess=false');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }