<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* guide/front.html.twig */
class __TwigTemplate_e0efba95ca116ab5f9c2f2be128af571 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/front.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "guide/front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Guide index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<head>
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!-- Inclure les styles de Swiper -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\">
    <style>
        /* Ajuster la taille des cartes pour s'adapter à l'espace */
        .swiper-slide {
            width: auto;
            margin-right: 15px; /* Espacement entre les cartes */
        }
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 15px; /* Augmenter la taille de la bordure arrondie */
            background-color: rgba(206766); /* Changer la couleur de fond en blanc */
            padding: 20px; /* Augmenter la marge intérieure */
            width: 300px; /* Définir une largeur fixe pour la carte */
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .card-body {
            text-align: center; 
        } 

        h1 {
            text-align: center; /* Center the text */
            text-decoration: underline; /* Underline the text */
            font-family: Arial, sans-serif; /* Use a better font */
        } 
        
    </style>
</head>
<body>
    <h1>Nos Guides virtuelles</h1>
    <h2 style=\"text-align: center\">Order by :</h2>
    <div style=\"text-align: center; font-size: larger;\">
    <p> Max Likes 
        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_OrderByLikes");
        echo "\" >
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-up\" viewBox=\"0 0 16 16\">
              <path fill-rule=\"evenodd\" d=\"M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5\"/>
            </svg>
        </a>
        Max Dislikes 
        <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_OrderByDisLikes");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-up\" viewBox=\"0 0 16 16\">
              <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1\"/>
            </svg>
        </a>
    </p>
</div>

    <!-- Conteneur Swiper -->
    <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guides"]) || array_key_exists("guides", $context) ? $context["guides"] : (function () { throw new RuntimeError('Variable "guides" does not exist.', 72, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
            // line 73
            echo "            
                <div class=\"swiper-slide\">
                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_showFront", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">
                        <div class=\"card\">
                       <center>     <img class=\"card-img-top\" src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["guide"], "image", [], "any", false, false, false, 77))), "html", null, true);
            echo "\" alt=\"Card image cap\" style=\"width: 200px; height: 200px;\"> </center> 

                            <div class=\"card-body\">
                                <h3 class=\"card-title\"><strong>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "nom", [], "any", false, false, false, 80), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "prenom", [], "any", false, false, false, 80), "html", null, true);
            echo "</strong></h3>
                                 <h3 class=\"card-title\"><strong><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-youtube\" viewBox=\"0 0 16 16\">
  <path d=\"M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z\"/>
</svg>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "videoCount", [], "any", false, false, false, 83), "html", null, true);
            echo "</strong></h3>
                               <h3 class=\"card-title\"> <i class=\"glyphicon glyphicon-thumbs-up\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "Likes", [], "any", false, false, false, 84), "html", null, true);
            echo "</i> <i class=\"glyphicon glyphicon-thumbs-down\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "Dislikes", [], "any", false, false, false, 84), "html", null, true);
            echo "</i>
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 91
            echo "               <p style=\"text-align: center;\">Pas de voyage virtuel disponible pour le moment !</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </div>
        <!-- Flèches de navigation Swiper -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
    </div>

    <!-- Inclure la bibliothèque Swiper.js -->
    <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
    <script>
        // Initialiser Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto', // Nombre de slides visibles
            spaceBetween: 300, // Espacement entre les slides
            navigation: {
                nextEl: '.swiper-button-next', // Sélecteur de la flèche suivante
                prevEl: '.swiper-button-prev', // Sélecteur de la flèche précédente
            },
        });
    </script>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "guide/front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  200 => 93,  193 => 91,  179 => 84,  175 => 83,  167 => 80,  161 => 77,  156 => 75,  152 => 73,  147 => 72,  133 => 61,  124 => 55,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Guide index{% endblock %}

{% block content %}
<head>
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!-- Inclure les styles de Swiper -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\">
    <style>
        /* Ajuster la taille des cartes pour s'adapter à l'espace */
        .swiper-slide {
            width: auto;
            margin-right: 15px; /* Espacement entre les cartes */
        }
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 15px; /* Augmenter la taille de la bordure arrondie */
            background-color: rgba(206766); /* Changer la couleur de fond en blanc */
            padding: 20px; /* Augmenter la marge intérieure */
            width: 300px; /* Définir une largeur fixe pour la carte */
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .card-body {
            text-align: center; 
        } 

        h1 {
            text-align: center; /* Center the text */
            text-decoration: underline; /* Underline the text */
            font-family: Arial, sans-serif; /* Use a better font */
        } 
        
    </style>
</head>
<body>
    <h1>Nos Guides virtuelles</h1>
    <h2 style=\"text-align: center\">Order by :</h2>
    <div style=\"text-align: center; font-size: larger;\">
    <p> Max Likes 
        <a href=\"{{ path('app_guide_OrderByLikes')}}\" >
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-up\" viewBox=\"0 0 16 16\">
              <path fill-rule=\"evenodd\" d=\"M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5\"/>
            </svg>
        </a>
        Max Dislikes 
        <a href=\"{{ path('app_guide_OrderByDisLikes')}}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-up\" viewBox=\"0 0 16 16\">
              <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1\"/>
            </svg>
        </a>
    </p>
</div>

    <!-- Conteneur Swiper -->
    <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
            {% for guide in guides %}
            
                <div class=\"swiper-slide\">
                    <a href=\"{{ path('app_guide_showFront', {'id': guide.id}) }}\">
                        <div class=\"card\">
                       <center>     <img class=\"card-img-top\" src=\"{{ asset('Images/' ~ guide.image ) }}\" alt=\"Card image cap\" style=\"width: 200px; height: 200px;\"> </center> 

                            <div class=\"card-body\">
                                <h3 class=\"card-title\"><strong>{{ guide.nom }} {{ guide.prenom }}</strong></h3>
                                 <h3 class=\"card-title\"><strong><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-youtube\" viewBox=\"0 0 16 16\">
  <path d=\"M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z\"/>
</svg>{{ guide.videoCount }}</strong></h3>
                               <h3 class=\"card-title\"> <i class=\"glyphicon glyphicon-thumbs-up\">{{ guide.Likes }}</i> <i class=\"glyphicon glyphicon-thumbs-down\">{{ guide.Dislikes }}</i>
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            {% else %}
               <p style=\"text-align: center;\">Pas de voyage virtuel disponible pour le moment !</p>
            {% endfor %}
        </div>
        <!-- Flèches de navigation Swiper -->
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
    </div>

    <!-- Inclure la bibliothèque Swiper.js -->
    <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
    <script>
        // Initialiser Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto', // Nombre de slides visibles
            spaceBetween: 300, // Espacement entre les slides
            navigation: {
                nextEl: '.swiper-button-next', // Sélecteur de la flèche suivante
                prevEl: '.swiper-button-prev', // Sélecteur de la flèche précédente
            },
        });
    </script>
</body>
{% endblock %}
", "guide/front.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\guide\\front.html.twig");
    }
}
