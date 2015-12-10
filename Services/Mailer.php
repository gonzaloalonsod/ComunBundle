<?php

namespace Tecspro\Bundle\ComunBundle\Services;

class Mailer {

    public function send_mailer($correos, $mensaje) {

        if (!empty($correos)) {
            $message = \Swift_Message::newInstance(
                setSubject("Mensaje del sistema de alertas")
                ->setFrom('siaval@gmail.com')
                ->setTo($correos)
                ->setBody($mensaje)
                )
            ;
            $this->get('mailer')->send($message);
        }
    }
}


