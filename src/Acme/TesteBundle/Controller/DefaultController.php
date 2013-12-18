<?php

namespace Acme\TesteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeTesteBundle:Default:index.html.twig', array('name' => $name));
    }
}
