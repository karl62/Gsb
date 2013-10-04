<?php

/* SKGsbBundle:Default:organisation.html.twig */
class __TwigTemplate_94e7c044120686e5ed6109fb1c8d1372 extends Twig_Template
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
          <p> Une conséquence de cette fusion, est la recherche d'une optimisation de l’activité du groupe ainsi
constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments
(en passant par une nécessaire restructuration et vague de licenciement), tout en prenant le meilleur
des deux laboratoires sur les produits concurrents.
L'entreprise compte 480 visiteurs médicaux en France métropolitaine (Corse comprise), et 60 dans les
départements et territoires d'outre-mer. Les territoires sont répartis en 6 secteurs géographiques
(Paris-Centre, Sud, Nord, Ouest, Est, DTOM Caraïbes-Amériques, DTOM Asie-Afrique).
<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SKGsb/images/carte_1.jpg"), "html", null, true);
        echo "\"alt=\"logo\" width=\"\" height=\"\" />
.</p>
        
        </div>
";
    }

    // line 27
    public function block_gauche($context, array $blocks = array())
    {
        // line 28
        echo "      <div class=\"menu_div\"> 
<ul>
<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_accueil");
        echo "\">Accueil : </a></li>

<li><a href=\"#\">Présentation</a> 
<ul class=\"sub-item1\"> 
<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_activite");
        echo "\">Activité :</a>
    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_entreprise");
        echo "\">L'entreprise :</a>
</li>
</ul> 
</li> 

<li><a href=\"#\">SI</a> 
<ul class=\"sub-item2\"> 
<li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_organisation");
        echo "\">Description :</a></li>
<li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_gestion");
        echo "\">Gestion :</a></li>
<li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_equipement");
        echo "\">Equipement :</a></li>
</ul>
</li>

<li><a href=\"#\">Reseau</a>
<ul class=\"sub-item3\"> 
<li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_repartition");
        echo "\">Repartition :</a></li>
<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_segmentation");
        echo "\">Segmentation :</a></li>
</ul>
</li>

</ul>
</div> 

";
    }

    // line 61
    public function block_bas($context, array $blocks = array())
    {
        // line 62
        echo "        <div id=\"cadredubas\">Copyright 2013/2014</div>
";
    }

    public function getTemplateName()
    {
        return "SKGsbBundle:Default:organisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 62,  129 => 61,  117 => 51,  113 => 50,  104 => 44,  100 => 43,  96 => 42,  86 => 35,  82 => 34,  75 => 30,  71 => 28,  68 => 27,  59 => 21,  49 => 13,  46 => 12,  38 => 7,  34 => 5,  31 => 4,);
    }
}
