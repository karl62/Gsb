<?php

/* SKGsbBundle::presentation.html.twig */
class __TwigTemplate_120e3eadbf78851fa71a62fb3d5c73cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "        
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SKGsb/css/style.css"), "html", null, true);
        echo "\"
    </head>
   <p> Le secteur d'activité
L’industrie pharmaceutique est un secteur très lucratif dans lequel le mouvement de fusion acquisition
est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes
structures.
Des déboires divers récents autour de médicaments ou molécules ayant entraîné des complications
médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,
réputée être le lieu d' arrangements entre l'industrie et les praticiens, et tout du moins un terrain
d'influence opaque.
L'entreprise
Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy
(spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat
européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union
de trois petits laboratoires .
En 2009, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur
industriel. L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris.
Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis.</p>
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

    public function getTemplateName()
    {
        return "SKGsbBundle::presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 6,  61 => 5,  33 => 7,  31 => 6,  27 => 5,  21 => 1,  105 => 17,  100 => 16,  94 => 15,  88 => 14,  82 => 13,  77 => 6,  71 => 5,  65 => 18,  53 => 14,  43 => 8,  36 => 8,  26 => 1,  72 => 19,  69 => 18,  62 => 17,  59 => 16,  56 => 15,  51 => 13,  48 => 7,  41 => 4,  38 => 7,  32 => 5,);
    }
}
