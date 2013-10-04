<?php

/* SKGsbBundle:Default:repartition.html.twig */
class __TwigTemplate_756ae73e8a6dc539b34256ade32451f2 extends Twig_Template
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
   Répartition des services
Chaque étage dispose d'une baie de
brassage qui le relie par une fibre à la
baie centrale de la salle serveurs.
Toutes les salles de réunion sont
équipées d'un point d'accès Wifi
positionné par défaut dans le VLAN
\"Visiteurs\" qui autorise uniquement un
accès Internet.
Les portables connectés en wifi à ce
point d'accès reçoivent ainsi une
adresse IP et n'ont, par conséquent
accès qu'aux services DHCP et DNS.
Le point d’accès peut être configuré à
la demande pour être raccordé à un
VLAN présent au niveau de l'étage.
Chaque salle de réunion dispose d'un
vidéoprojecteur, d'enceintes et d'un
tableau numérique interactif.
La salle \"Démonstration\" est destinée à
l'accueil des organismes de santé
(AFSSAPS notamment) et des
partenaires scientifiques. Elle dispose
de paillasses et d'équipements de
laboratoire, en plus d'une salle de
réunion.
<br>
        <center><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SKGsb/images/repartition.jpg"), "html", null, true);
        echo "\"alt=\"logo\" width=\"\" height=\"\"  /></center>
        </div>
";
    }

    // line 45
    public function block_gauche($context, array $blocks = array())
    {
        // line 46
        echo "      <div class=\"menu_div\"> 
<ul>
<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_accueil");
        echo "\">Accueil : </a></li>

<li><a href=\"#\">Présentation</a> 
<ul class=\"sub-item1\"> 
<li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_activite");
        echo "\">Activité :</a>
    <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_entreprise");
        echo "\">L'entreprise :</a>
</li>
</ul> 
</li> 

<li><a href=\"#\">SI</a> 
<ul class=\"sub-item2\"> 
<li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_organisation");
        echo "\">Description :</a></li>
<li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_gestion");
        echo "\">Gestion :</a></li>
<li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_equipement");
        echo "\">Equipement :</a></li>
</ul>
</li>

<li><a href=\"#\">Reseau</a>
<ul class=\"sub-item3\"> 
<li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_repartition");
        echo "\">Repartition :</a></li>
<li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_segmentation");
        echo "\">Segmentation :</a></li>
</ul>
</li>

</ul>
</div> 

";
    }

    // line 79
    public function block_bas($context, array $blocks = array())
    {
        // line 80
        echo "        <div id=\"cadredubas\">Copyright 2013/2014</div>
";
    }

    public function getTemplateName()
    {
        return "SKGsbBundle:Default:repartition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 80,  147 => 79,  135 => 69,  131 => 68,  122 => 62,  118 => 61,  114 => 60,  104 => 53,  100 => 52,  93 => 48,  89 => 46,  86 => 45,  79 => 41,  49 => 13,  46 => 12,  38 => 7,  34 => 5,  31 => 4,);
    }
}
