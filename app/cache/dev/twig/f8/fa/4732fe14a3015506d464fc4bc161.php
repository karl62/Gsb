<?php

/* SKGsbBundle:Default:visiteurs.html.twig */
class __TwigTemplate_f8fa4732fe14a3015506d464fc4bc161 extends Twig_Template
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
          <p> La force commerciale d'un laboratoire pharmaceutique est assurée par un travail de conseil et
d'information auprès des prescripteurs. Les visiteurs médicaux (ou délégués) démarchent les
médecins, pharmaciens, infirmières et autres métiers de santé susceptibles de prescrire aux patients
les produits du laboratoire.
L'objectif d'une visite est d'actualiser et rafraîchir la connaissance des professionnels de santé sur les
produits de l'entreprise. Les visiteurs ne font pas de vente, mais leurs interventions ont un impact
certain sur la prescription de la pharmacopée du laboratoire.
Pour donner une organisation commune aux délégués médicaux, l'entreprise a adopté l'organisation
de la flotte de visiteurs existant chez Galaxy, selon un système hiérarchique par région et, à un niveau
supérieur, par secteur géographique (Sud, Nord, Paris-Centre, Antilles-Guyane, etc).
Il n'y a pas eu d'harmonisation de la relation entre les personnels de terrain (Visiteurs et Délégués
régionaux) et les responsables de secteur. Les habitudes en cours avant la fusion ont été adaptées
sans que soient données des directives au niveau local.
.</p>
        
        </div>
";
    }

    // line 32
    public function block_gauche($context, array $blocks = array())
    {
        // line 33
        echo "      <div class=\"menu_div\"> 
<ul>
<li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_accueil");
        echo "\">Accueil : </a></li>

<li><a href=\"#\">Présentation</a> 
<ul class=\"sub-item1\"> 
<li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_presentation");
        echo "\">Presentation :</a>
</li>
</ul> 
</li> 

<li><a href=\"#\">Organisation</a> 
<ul class=\"sub-item2\"> 
<li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_organisation");
        echo "\">Organisation :</a></li>
</ul>
</li>

<li><a href=\"#\">Visiteurs</a>
<ul class=\"sub-item3\"> 
<li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("SKGsbBundle_visiteur");
        echo "\">Visiteur :</a></li>
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
        return "SKGsbBundle:Default:visiteurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 62,  115 => 61,  103 => 52,  94 => 46,  84 => 39,  77 => 35,  73 => 33,  70 => 32,  49 => 13,  46 => 12,  38 => 7,  34 => 5,  31 => 4,);
    }
}
