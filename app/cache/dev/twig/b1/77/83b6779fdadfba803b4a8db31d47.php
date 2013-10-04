<?php

/* SKGsbBundle::Layout.html.twig */
class __TwigTemplate_b17783b6779fdadfba803b4a8db31d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'haut' => array($this, 'block_haut'),
            'centre' => array($this, 'block_centre'),
            'gauche' => array($this, 'block_gauche'),
            'bas' => array($this, 'block_bas'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SKGsb/css/style.css"), "html", null, true);
        echo "\"
    </head>
    
    <body>
       
        ";
        // line 13
        $this->displayBlock('haut', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('centre', $context, $blocks);
        echo " 
        ";
        // line 15
        $this->displayBlock('gauche', $context, $blocks);
        echo "  
        ";
        // line 16
        $this->displayBlock('bas', $context, $blocks);
        echo " 
        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "GSB";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_haut($context, array $blocks = array())
    {
        echo "<div id=\"cadreduhaut\"><";
    }

    // line 14
    public function block_centre($context, array $blocks = array())
    {
        echo "<div id=\"cadreducentre\"><";
    }

    // line 15
    public function block_gauche($context, array $blocks = array())
    {
        echo "<div id=\"cadredegauche\"><";
    }

    // line 16
    public function block_bas($context, array $blocks = array())
    {
        echo "<div id=\"cadredubas\"><";
    }

    public function getTemplateName()
    {
        return "SKGsbBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 16,  87 => 14,  81 => 13,  76 => 6,  70 => 5,  61 => 16,  52 => 14,  50 => 13,  42 => 8,  37 => 7,  35 => 6,  25 => 1,  121 => 53,  118 => 52,  106 => 43,  102 => 42,  93 => 15,  89 => 35,  85 => 34,  75 => 27,  71 => 26,  64 => 22,  60 => 20,  57 => 15,  49 => 13,  46 => 12,  38 => 7,  34 => 5,  31 => 5,);
    }
}
