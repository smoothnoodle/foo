<?php
//test it on hostmonster, it work! Output database detail.. awesome!!!
// multiple recipients
$to  = 'kevin.heaven@eyepoppy.com' . ', '; // note the comma
$to .= 'diy6oy@hotmail.com';

// subject
$subject = 'testing HTML email';
$user_id ='8';
// message
$message = "
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <h1>$user_id</h1>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
  <a href='http://www.wuuker.com/' target='_blank'>wuuker.com</a>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Confirmation Reminder <confirmation@wuuker.com>' . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
echo $sent ? "Mail Sent" : "mail Failed";
?>