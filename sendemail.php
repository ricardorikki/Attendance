<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = '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';

           

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("ricardo.o.knight@gmail.com", "Ricardo Knight");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            //$email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>