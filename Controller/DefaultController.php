<?php

namespace Tecspro\Bundle\ComunBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/slugify/index")
     * @Template()
     */
    public function indexAction()
    {
    	$valor = $this->get('slugify')->slugify("HOLA?Af=-9");

        return array('valor' => $valor);
    }
}
