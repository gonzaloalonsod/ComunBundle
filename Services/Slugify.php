<?php

namespace Tecspro\ComunBundle\Services;

class Slugify {

    public function slugify($text) {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '_', $text);

        // pasar a mayusculas
        $text = strtoupper(trim($text, '_'));

        return $text;
    }
}