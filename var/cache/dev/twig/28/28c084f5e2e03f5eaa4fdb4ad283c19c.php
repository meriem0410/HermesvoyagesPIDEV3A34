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

/* guide/showFront.html.twig */
class __TwigTemplate_523602a8c6a58897e1a06766adf74111 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/showFront.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "guide/showFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Guide";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
          integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
          crossorigin=\"\"/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
            integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
            crossorigin=\"\"></script>
<div class=\"container\">
    <div class=\"row mt-5\">
        <div class=\"col-md-4\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17))), "html", null, true);
        echo "\" class=\"img-fluid mb-4\" alt=\"Guide Image\" style=\"width: 200px; height: 200px;\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" style=\"color: black;\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</h5>
                    <p class=\"card-text\" style=\"color: black;\">Téléphone: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 21, $this->source); })()), "numTel", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                    <p class=\"card-text\" style=\"color: black;\">Disponibilité: ";
        // line 22
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 22, $this->source); })()), "disponibilite", [], "any", false, false, false, 22)) ? ("Oui") : ("Non"));
        echo "</p>
                    <p class=\"card-text\" style=\"color: black;\"><a class=\"glyphicon glyphicon-thumbs-up\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Thumbs_up", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\"></a> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 23, $this->source); })()), "Likes", [], "any", false, false, false, 23), "html", null, true);
        echo "                            <a class=\"glyphicon glyphicon-thumbs-down\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Thumbs_Down", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\"></a> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 23, $this->source); })()), "Dislikes", [], "any", false, false, false, 23), "html", null, true);
        echo "    </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-8\">
            <h2 class=\"mb-4\" style=\"color: green;\">Excursions</h2>
            <div class=\"row\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["excursion"]) {
            // line 31
            echo "                        <div class=\"col-md-6\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <!-- Excursion details -->
                                    <h5 class=\"card-title\" style=\"color: black;\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 35), "html", null, true);
            echo "</h5>
                                    <div class=\"embed-responsive embed-responsive-16by9\">
                                        <iframe class=\"embed-responsive-item\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Video/" . twig_get_attribute($this->env, $this->source, $context["excursion"], "video", [], "any", false, false, false, 37))), "html", null, true);
            echo "\" allowfullscreen></iframe>
                                    </div>
                                    <p class=\"card-text mt-2\" style=\"color: black;\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                                    <p class=\"card-text\" style=\"color: black;\">Ville: ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "ville", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                                    <div id=\"map_";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" style=\"height: 300px;\"></div> <!-- Unique ID for each map -->
                                    <script>
                                        var map_";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo " = L.map('map_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "').setView([";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "latitude", [], "any", false, false, false, 43), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "longitude", [], "any", false, false, false, 43), "html", null, true);
            echo "], 5);
                                        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                            maxZoom: 19,
                                            attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
                                        }).addTo(map_";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo ");

                                        var marker = L.marker([";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "latitude", [], "any", false, false, false, 49), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "longitude", [], "any", false, false, false, 49), "html", null, true);
            echo "]).addTo(map_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo ");
                                        var circle = L.circle([";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "latitude", [], "any", false, false, false, 50), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "longitude", [], "any", false, false, false, 50), "html", null, true);
            echo "], {
                                            color: 'red',
                                            fillColor: '#f03',
                                            fillOpacity: 0.5,
                                            radius: 50000
                                        }).addTo(map_";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo ");
                                        marker.bindPopup(\"Excursion: ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 56), "html", null, true);
            echo "\").openPopup();
                                        circle.bindPopup(\"Center: [";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "latitude", [], "any", false, false, false, 57), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "longitude", [], "any", false, false, false, 57), "html", null, true);
            echo "]\");
                                    </script>
                                </div>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "                        <p class=\"col-md-12\">Aucune excursion disponible.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excursion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "guide/showFront.html.twig";
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
        return array (  220 => 65,  213 => 63,  200 => 57,  196 => 56,  192 => 55,  182 => 50,  174 => 49,  169 => 47,  156 => 43,  151 => 41,  147 => 40,  143 => 39,  138 => 37,  133 => 35,  127 => 31,  122 => 30,  106 => 23,  102 => 22,  98 => 21,  92 => 20,  86 => 17,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Guide{% endblock %}

{% block content %}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
          integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
          crossorigin=\"\"/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
            integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
            crossorigin=\"\"></script>
<div class=\"container\">
    <div class=\"row mt-5\">
        <div class=\"col-md-4\">
            <img src=\"{{ asset('Images/' ~ guide.image ) }}\" class=\"img-fluid mb-4\" alt=\"Guide Image\" style=\"width: 200px; height: 200px;\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" style=\"color: black;\">{{ guide.nom }} {{ guide.prenom }}</h5>
                    <p class=\"card-text\" style=\"color: black;\">Téléphone: {{ guide.numTel }}</p>
                    <p class=\"card-text\" style=\"color: black;\">Disponibilité: {{ guide.disponibilite ? 'Oui' : 'Non' }}</p>
                    <p class=\"card-text\" style=\"color: black;\"><a class=\"glyphicon glyphicon-thumbs-up\" href=\"{{ path('Thumbs_up', {'id': guide.id}) }}\"></a> {{guide.Likes}}                            <a class=\"glyphicon glyphicon-thumbs-down\" href=\"{{ path('Thumbs_Down', {'id': guide.id}) }}\"></a> {{guide.Dislikes}}    </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-8\">
            <h2 class=\"mb-4\" style=\"color: green;\">Excursions</h2>
            <div class=\"row\">
                    {% for excursion in excursions %}
                        <div class=\"col-md-6\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <!-- Excursion details -->
                                    <h5 class=\"card-title\" style=\"color: black;\">{{ excursion.titre }}</h5>
                                    <div class=\"embed-responsive embed-responsive-16by9\">
                                        <iframe class=\"embed-responsive-item\" src=\"{{ asset('Video/' ~ excursion.video) }}\" allowfullscreen></iframe>
                                    </div>
                                    <p class=\"card-text mt-2\" style=\"color: black;\">{{ excursion.description }}</p>
                                    <p class=\"card-text\" style=\"color: black;\">Ville: {{ excursion.ville }}</p>
                                    <div id=\"map_{{ excursion.id }}\" style=\"height: 300px;\"></div> <!-- Unique ID for each map -->
                                    <script>
                                        var map_{{ excursion.id }} = L.map('map_{{ excursion.id }}').setView([{{ excursion.latitude }}, {{ excursion.longitude }}], 5);
                                        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                            maxZoom: 19,
                                            attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
                                        }).addTo(map_{{ excursion.id }});

                                        var marker = L.marker([{{ excursion.latitude }}, {{ excursion.longitude }}]).addTo(map_{{ excursion.id }});
                                        var circle = L.circle([{{ excursion.latitude }}, {{ excursion.longitude }}], {
                                            color: 'red',
                                            fillColor: '#f03',
                                            fillOpacity: 0.5,
                                            radius: 50000
                                        }).addTo(map_{{ excursion.id }});
                                        marker.bindPopup(\"Excursion: {{ excursion.titre }}\").openPopup();
                                        circle.bindPopup(\"Center: [{{ excursion.latitude }}, {{ excursion.longitude }}]\");
                                    </script>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <p class=\"col-md-12\">Aucune excursion disponible.</p>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "guide/showFront.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\guide\\showFront.html.twig");
    }
}
