<?php

namespace SK\MonPremierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
     $message='Voici mon premier message sous Symfony2';
     return $this->container->get('templating')->renderResponse('SKMonPremierBundle:Default:index.html.twig',array('message'=>$message));
    }
}
