<?php

namespace SK\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        return $this->container->get('templating')->renderResponse('SKGsbBundle:Default:index.html.twig',
                array(''));
    }
      public function entrepriseAction()
    {
       
        return $this->container->get('templating')->renderResponse('SKGsbBundle:Default:entreprise.html.twig',
                array(''));
    }
       public function activiteAction()
    {
       
        return $this->container->get('templating')->renderResponse('SKGsbBundle:Default:activite.html.twig',
                array(''));
    }
         public function descriptionAction()
    {
       
        return $this->container->get('templating')->renderResponse('SKGsbBundle:Default:description.html.twig',
                array(''));
    }
         public function gestionAction()
    {
       
        return $this->container->get('templating')->renderResponse('SKGsbBundle:Default:gestion.html.twig',
                array(''));
    }
         public function equipementAction()
    {
       
        return $this->container->get('templating')->renderResponse('SKGsbBundle:Default:equipement.html.twig',
                array(''));
    }
    
       public function organisationAction()
    {
       
        return $this->container->get('templating')->renderResponse('SKGsbBundle:Default:organisation.html.twig',
                array(''));
    }
          public function visiteurAction()
    {
       
        return $this->container->get('templating')->renderResponse('SKGsbBundle:Default:visiteurs.html.twig',
                array(''));
    }
          public function repartitionAction()
    {
       
        return $this->container->get('templating')->renderResponse('SKGsbBundle:Default:repartition.html.twig',
                array(''));
    }
          public function segmentationAction()
    {
       
        return $this->container->get('templating')->renderResponse('SKGsbBundle:Default:segmentation.html.twig',
                array(''));
    }
    
    
    
    
    
}





