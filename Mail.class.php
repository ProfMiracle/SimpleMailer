<?php
namespace Mail;

class Mail
{
    private static $sender = 'info@mywebsite.com';
    private static $checkReturn = '-freturn@mywebsite.com';

    public static function mailNoreply($subject, $email, $message)
    {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.self::$sender."\r\n".
                    'X-Mailer: PHP/' . phpversion();

        $email = strtolower($email);
        $sendMail = mail($email, $subject, $message, $headers, static::$checkReturn);

        $e=error_get_last();
        if($e['message']!==''){
            return $e;
        }

        return true;
    }

    public static function mailReply($email, $subject, $message)
    {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.self::$sender."\r\n".
                    'Reply-To: '.self::$sender."\r\n" .
                    'X-Mailer: PHP/' . phpversion();
        
        $email = strtolower($email);            
        $sendMail = mail($email, $subject, $message, $headers, self::$checkReturn);

        $e=error_get_last();
        if($e['message']!==''){
            return $e;
        }

        return true;
    }
}
