<?php

namespace SK\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SKGsbBundle:Default:index.html.twig', array('name' => $name));
    }
}
