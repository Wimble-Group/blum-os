<?php 

function send_mail($email) {
    $to  = TO_EMAIL;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From:  ".SITE_EMAIL."";
    $subject = 'Join the newsletter';
    $message = '
      <html>
        <head>
          <title>Join the newsletter</title>
        </head>
        <body>
          <p>Email: ' . $email . '</p>
        </body>
      </html>';
    mail($to, $subject, $message, $headers);
    $tab = array('status' => 'success');
    exit(json_encode($tab));
    }
