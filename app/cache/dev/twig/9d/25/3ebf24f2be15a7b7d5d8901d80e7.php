<?php

/* SKMonPremierBundle::phrases.html.twig */
class __TwigTemplate_9d253ebf24f2be15a7b7d5d8901d80e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<h1> Voici mon premier site ";
        echo twig_escape_filter($this->env, (isset($context["var1"]) ? $context["var1"] : $this->getContext($context, "var1")), "html", null, true);
        echo " version ";
        echo twig_escape_filter($this->env, (isset($context["var2"]) ? $context["var2"] : $this->getContext($context, "var2")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SKMonPremierBundle::phrases.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,  82 => 18,  77 => 16,  72 => 6,  66 => 5,  59 => 19,  56 => 18,  54 => 16,  49 => 14,  44 => 12,  35 => 7,  33 => 6,  23 => 1,  41 => 6,  39 => 5,  36 => 4,  29 => 5,);
    }
}
