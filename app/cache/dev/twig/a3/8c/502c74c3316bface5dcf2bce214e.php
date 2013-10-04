<?php

/* SKGsbBundle:Default:activite.html.twig */
class __TwigTemplate_a38c502c74c3316bface5dcf2bce214e extends Twig_Template
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
          Le secteur d'activité
L’industrie pharmaceutique est un secteur très lucratif dans lequel le mouvement de fusion acquisition
est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes
structures.
Des déboires divers récents autour de médicaments ou molécules ayant entraîné des complications
médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,
réputée être le lieu d' arrangements entre l'industrie et les praticiens, et tout du moins un terrain
d'influence opaque.
        
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
        return "SKGsbBundle:Default:activite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 62,  126 => 61,  114 => 51,  110 => 50,  101 => 44,  97 => 43,  93 => 42,  83 => 35,  79 => 34,  72 => 30,  68 => 28,  65 => 27,  49 => 13,  46 => 12,  38 => 7,  34 => 5,  31 => 4,);
    }
}
