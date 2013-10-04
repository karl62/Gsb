<?php

/* SKGsbBundle:Default:segmentation.html.twig */
class __TwigTemplate_2f323082df831893c05a32536e592741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SKGsbBundle::Layout.html.twig");

        $this->blocks = array(
            'haut' => array($this, 'block_haut'),
            'centre' => array($this, 'block_centre'),
            'gauche' => array($this, 'block_gauche'),
            'bas' => array($this, 'block_bas'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SKGsbBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_haut($context, array $blocks = array())
    {
        // line 5
        echo "        <div id=\"cadreduhaut\">
       
           <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SKGsb/images/logo.jpg"), "html", null, true);
        echo "\"alt=\"logo\" width=\"105px\" height=\"105px\" align=\"left\" /></left>
        <h2>Laboratoire pharmaceutique G.S.B</h2>
        </div>
";
    }

    // line 12
    public function block_centre($context, array $blocks = array())
    {
        // line 13
        echo "        <div id=\"cadreducentre\">
 Segmentation
L'organisation des VLAN et de l'adressage IP est la suivante :
<br><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SKGsb/images/segmentation.jpg"), "html", null, true);
        echo "\"alt=\"logo\" width=\"\" height=\"\"  />
Les règles actuelles concernant les vlans sont les suivantes :
 chaque vlan (sauf le vlan visiteur) peut uniquement accéder (quel que soit le protocole) aux
vlans \"Serveurs\" et \"Sortie\";
 le vlan \"Visiteurs\" peut uniquement interroger les serveur DNS et DHCP et sortir sur internet ;
        
        </div>
";
    }

    // line 25
    public function block_gauche($context, array $blocks = array())
    {
        // line 26
        echo "      <div class=\"menu_div\"> 
<ul>
<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_accueil");
        echo "\">Accueil : </a></li>

<li><a href=\"#\">Présentation</a> 
<ul class=\"sub-item1\"> 
<li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_activite");
        echo "\">Activité :</a>
    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_entreprise");
        echo "\">L'entreprise :</a>
</li>
</ul> 
</li> 

<li><a href=\"#\">SI</a> 
<ul class=\"sub-item2\"> 
<li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_organisation");
        echo "\">Description :</a></li>
<li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_gestion");
        echo "\">Gestion :</a></li>
<li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_equipement");
        echo "\">Equipement :</a></li>
</ul>
</li>

<li><a href=\"#\">Reseau</a>
<ul class=\"sub-item3\"> 
<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_repartition");
        echo "\">Repartition :</a></li>
<li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_segmentation");
        echo "\">Segmentation :</a></li>
</ul>
</li>

</ul>
</div> 

";
    }

    // line 59
    public function block_bas($context, array $blocks = array())
    {
        // line 60
        echo "        <div id=\"cadredubas\">Copyright 2013/2014</div>
";
    }

    public function getTemplateName()
    {
        return "SKGsbBundle:Default:segmentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 60,  127 => 59,  115 => 49,  111 => 48,  102 => 42,  98 => 41,  94 => 40,  84 => 33,  80 => 32,  73 => 28,  69 => 26,  66 => 25,  54 => 16,  49 => 13,  46 => 12,  38 => 7,  34 => 5,  31 => 4,);
    }
}
