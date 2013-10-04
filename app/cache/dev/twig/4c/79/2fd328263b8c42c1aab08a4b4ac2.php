<?php

/* SKMonPremierBundle:Default:index.html.twig */
class __TwigTemplate_4c792fd328263b8c42c1aab08a4b4ac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SKMonPremierBundle::Layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SKMonPremierBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " TP2 SLAM4 ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->env->loadTemplate("SKMonPremierBundle::phrases.html.twig")->display(array_merge($context, array("var1" => "Symfony", "var2" => "2.3.3")));
        // line 6
        echo "<p>";
        $this->displayBlock("title", $context, $blocks);
        echo "</p>
<p><h4> Le but de bien gerer l'architecture globale de ce framework</h4></p

";
    }

    public function getTemplateName()
    {
        return "SKMonPremierBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  39 => 5,  36 => 4,  29 => 2,);
    }
}
