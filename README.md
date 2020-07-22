# SimpleMailer
Simplifies Mailer Function

# edit the Mail.class.php
Change the $sender to your preferred sender

# calling the method
NOREPLY->
use Mail::mailNoreply($email, $subject, $message)

REPLY PATH  ENABLED
use Mail::mailReply($email, $subject, $message)

you can cal the function any where in your project

#parameter
1. $subject= message subject
2. $email = recipient email address
3. $message = message to be sent
