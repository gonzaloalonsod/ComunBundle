<?php

namespace Tecspro\Bundle\ComunBundle\Services;

class Mailer {

    protected $mailer;

    public function __construct($mailer){
        
        $this->mailer = $mailer;
    }

    public function send_mailer($asunto, $remitente, $destinatarios, $mensaje) {

        if (!empty($destinatarios)) {
            $emails = \Swift_Message::newInstance()
                ->setSubject($asunto)
                ->setFrom($remitente)
                ->setTo($destinatarios)
                ->setBody($mensaje);   
            ;
            $this->mailer->send($emails);
        }       
    }
}


