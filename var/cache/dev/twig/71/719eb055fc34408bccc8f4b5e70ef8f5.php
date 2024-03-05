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

/* hebergement/index.html.twig */
class __TwigTemplate_398eabdb582e089de5cc54bbe4b836cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "hebergement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hebergement index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>Hebergement index</h1>

     ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 9, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Hebergement_search"), "method" => "GET"]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 10, $this->source); })()), "search", [], "any", false, false, false, 10), 'row');
        echo " ";
        // line 11
        echo "    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
    ";
        // line 13
        if ((array_key_exists("isSearchResult", $context) && (isset($context["isSearchResult"]) || array_key_exists("isSearchResult", $context) ? $context["isSearchResult"] : (function () { throw new RuntimeError('Variable "isSearchResult" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "        <h2>Résultats de recherche</h2>
        ";
            // line 16
            echo "    ";
        }
        // line 17
        echo "
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Adresse</th>
                <th>Type</th>
                <th>Prix par nuitée</th>
                <th>Capacité</th>
                <th>Nb de chambres</th>
                <th>Description</th>
              
                <th>Amenitites</th>
                <th>Images</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Hebergements"]) || array_key_exists("Hebergements", $context) ? $context["Hebergements"] : (function () { throw new RuntimeError('Variable "Hebergements" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Hebergement"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "adresse", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "type", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "prix", [], "any", false, false, false, 40), "html", null, true);
            echo "DT</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "maxguest", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "room", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "description", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>
    <ul>
       
            
    </ul> 
               </td>
               <td>
    <ul>
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Hebergement"], "amenities", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                // line 53
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["amenity"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    </ul>
            </td>
            <td>
    ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["Hebergement"], "image", [], "any", false, false, false, 58)) {
                // line 59
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["Hebergement"], "image", [], "any", false, false, false, 59))), "html", null, true);
                echo "\" width=\"50%\"/>
    ";
            }
            // line 61
            echo "</td>   
           
                <td>
                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Hebergement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["Hebergement"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Hebergement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Hebergement"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Hebergement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Hebergement_new");
        echo "\">Create new</a>
<canvas id=\"ratingsChart\"></canvas>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('ratingsChart').getContext('2d');
    var ratingLabels = JSON.parse('";
        // line 81
        echo (isset($context["ratingLabels"]) || array_key_exists("ratingLabels", $context) ? $context["ratingLabels"] : (function () { throw new RuntimeError('Variable "ratingLabels" does not exist.', 81, $this->source); })());
        echo "');
    var ratingData = JSON.parse('";
        // line 82
        echo (isset($context["ratingData"]) || array_key_exists("ratingData", $context) ? $context["ratingData"] : (function () { throw new RuntimeError('Variable "ratingData" does not exist.', 82, $this->source); })());
        echo "');
    var myChart = new Chart(ctx, {
        type: 'pie', // ou 'bar', 'line', etc. selon le type de graphique que vous souhaitez
        data: {
            labels: ratingLabels,
            datasets: [{
                label: 'Nombre d\\'avis par rating',
                data: ratingData,
                backgroundColor: [
                    // Ajoutez ici vos couleurs
                    'rgba(54, 162, 235, 0.2)', // Bleu
    'rgba(255, 206, 86, 0.2)', // Jaune
    'rgba(75, 192, 192, 0.2)', // Vert
    'rgba(153, 102, 255, 0.2)', // Violet
    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    // Ajoutez ici les bordures de vos couleurs
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Répartition des avis par rating'
            }
        }
    });
});
</script>

   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "hebergement/index.html.twig";
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
        return array (  246 => 82,  242 => 81,  234 => 76,  229 => 73,  220 => 69,  211 => 65,  207 => 64,  202 => 61,  196 => 59,  194 => 58,  189 => 55,  180 => 53,  176 => 52,  164 => 43,  160 => 42,  156 => 41,  152 => 40,  148 => 39,  144 => 38,  140 => 37,  137 => 36,  132 => 35,  112 => 17,  109 => 16,  106 => 14,  104 => 13,  100 => 12,  97 => 11,  94 => 10,  90 => 9,  86 => 7,  79 => 6,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Hebergement index{% endblock %}
{% block stylesheets %}{% endblock %}

{% block content %}
    <h1>Hebergement index</h1>

     {{ form_start(searchForm, {'action': path('Hebergement_search'), 'method': 'GET'}) }}
    {{ form_row(searchForm.search) }} {# Assurez-vous que 'search' est le nom de la propriété dans votre objet SearchData #}
    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
{{ form_end(searchForm) }}
    {% if isSearchResult is defined and isSearchResult %}
        <h2>Résultats de recherche</h2>
        {# Vous pouvez ajouter ici d'autres éléments spécifiques aux résultats de recherche #}
    {% endif %}

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Adresse</th>
                <th>Type</th>
                <th>Prix par nuitée</th>
                <th>Capacité</th>
                <th>Nb de chambres</th>
                <th>Description</th>
              
                <th>Amenitites</th>
                <th>Images</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for Hebergement in Hebergements %}
            <tr>
                <td>{{ Hebergement.id }}</td>
                <td>{{ Hebergement.adresse }}</td>
                <td>{{ Hebergement.type }}</td>
                <td>{{ Hebergement.prix }}DT</td>
                <td>{{ Hebergement.maxguest }}</td>
                <td>{{ Hebergement.room }}</td>
                <td>{{ Hebergement.description }}</td>
                <td>
    <ul>
       
            
    </ul> 
               </td>
               <td>
    <ul>
        {% for amenity in Hebergement.amenities %}
            <li>{{ amenity }}</li>
        {% endfor %}
    </ul>
            </td>
            <td>
    {% if Hebergement.image %}
        <img src=\"{{ asset('uploads/' ~ Hebergement.image) }}\" width=\"50%\"/>
    {% endif %}
</td>   
           
                <td>
                    <a href=\"{{ path('app_Hebergement_show', {'id': Hebergement.id}) }}\">show</a>
                    <a href=\"{{ path('app_Hebergement_edit', {'id': Hebergement.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_Hebergement_new') }}\">Create new</a>
<canvas id=\"ratingsChart\"></canvas>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('ratingsChart').getContext('2d');
    var ratingLabels = JSON.parse('{{ ratingLabels|raw }}');
    var ratingData = JSON.parse('{{ ratingData|raw }}');
    var myChart = new Chart(ctx, {
        type: 'pie', // ou 'bar', 'line', etc. selon le type de graphique que vous souhaitez
        data: {
            labels: ratingLabels,
            datasets: [{
                label: 'Nombre d\\'avis par rating',
                data: ratingData,
                backgroundColor: [
                    // Ajoutez ici vos couleurs
                    'rgba(54, 162, 235, 0.2)', // Bleu
    'rgba(255, 206, 86, 0.2)', // Jaune
    'rgba(75, 192, 192, 0.2)', // Vert
    'rgba(153, 102, 255, 0.2)', // Violet
    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    // Ajoutez ici les bordures de vos couleurs
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Répartition des avis par rating'
            }
        }
    });
});
</script>

   
{% endblock %}
", "hebergement/index.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\hebergement\\index.html.twig");
    }
}
