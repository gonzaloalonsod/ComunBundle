<?php

namespace Tecspro\Bundle\ComunBundle\Services;

class Mailer {
    protected $mailer;

    public function __construct($mailer)
    {
        $this->mailer = $mailer;
    }
    
    public function send_mailer($asunto, $remitente, $correos, $mensaje)
    {
        if (!empty($correos)) {
            $message = \Swift_Message::newInstance()
                ->setSubject($asunto)
                ->setFrom($remitente)
                ->setTo($remitente)
                ->setBcc($correos)
                ->setBody($mensaje);   
            ;
            $this->mailer->send($message);
        }       
    }
}