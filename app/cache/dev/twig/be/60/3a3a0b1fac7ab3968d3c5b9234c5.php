<?php

/* SKGsbBundle:Default:equipement.html.twig */
class __TwigTemplate_be603a3a0b1fac7ab3968d3c5b9234c5 extends Twig_Template
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
 L'équipement
L'informatique est fortement répandue sur le site. Chaque employé est équipé d'un poste fixe relié au
système central. On dénombre ainsi plus de 350 équipements terminaux et un nombre de serveurs
physiques conséquent (45 en 2012) sur lesquels tournent plus de 100 serveurs virtuels.
On trouve aussi des stations de travail plus puissantes dans la partie labo-recherche, et une multitude
d'ordinateurs portables (personnels de direction, service informatique, services commerciaux, etc).
Les visiteurs médicaux reçoivent une indemnité bisannuelle pour s'équiper en informatique (politique
Swiss-Bourdin) ou une dotation en équipement (politique Galaxy). Il n'y a pas à l'heure actuelle
d'uniformisation des machines ni du mode de fonctionnement
Chaque employé de l'entreprise a une adresse de messagerie de la forme nomUtilisateur@swissgalaxy.
com. Les anciennes adresses de chaque laboratoire ont été définitivement fermées au 1er
janvier 2011.
        
        </div>
";
    }

    // line 30
    public function block_gauche($context, array $blocks = array())
    {
        // line 31
        echo "      <div class=\"menu_div\"> 
<ul>
<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_accueil");
        echo "\">Accueil : </a></li>

<li><a href=\"#\">Présentation</a> 
<ul class=\"sub-item1\"> 
<li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_activite");
        echo "\">Activité :</a>
    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_entreprise");
        echo "\">L'entreprise :</a>
</li>
</ul> 
</li> 

<li><a href=\"#\">SI</a> 
<ul class=\"sub-item2\"> 
<li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_organisation");
        echo "\">Description :</a></li>
<li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_gestion");
        echo "\">Gestion :</a></li>
<li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_equipement");
        echo "\">Equipement :</a></li>
</ul>
</li>

<li><a href=\"#\">Reseau</a>
<ul class=\"sub-item3\"> 
<li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_repartition");
        echo "\">Repartition :</a></li>
<li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_segmentation");
        echo "\">Segmentation :</a></li>
</ul>
</li>

</ul>
</div> 

";
    }

    // line 64
    public function block_bas($context, array $blocks = array())
    {
        // line 65
        echo "        <div id=\"cadredubas\">Copyright 2013/2014</div>
";
    }

    public function getTemplateName()
    {
        return "SKGsbBundle:Default:equipement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 65,  129 => 64,  117 => 54,  113 => 53,  104 => 47,  100 => 46,  96 => 45,  86 => 38,  82 => 37,  75 => 33,  71 => 31,  68 => 30,  49 => 13,  46 => 12,  38 => 7,  34 => 5,  31 => 4,);
    }
}
