<?php

namespace Tecspro\Bundle\ComunBundle\Services;

class Mailer {

    protected $mailer;

    public function __construct($mailer){
        
        $this->mailer = $mailer;
    }

    public function send_mailer($correos, $mensaje, $asunto, $origen) {

        if (!empty($correos)) {

            foreach ($correos as $correo) {

            $message = \Swift_Message::newInstance()
                ->setSubject($asunto)
                ->setFrom($origen)
                ->setTo('camuschinox@gmail.com')
                ->setBody($mensaje);   
            ;
            $this->mailer->send($message);
            }
        }       
    }
}


