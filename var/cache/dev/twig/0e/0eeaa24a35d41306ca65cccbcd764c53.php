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
class __TwigTemplate_64592a29f91f7d836968951934444d62 extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "hebergement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hebergement index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>Hebergement index</h1>

  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 9, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hebergement_search"), "method" => "GET"]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 10, $this->source); })()), "search", [], "any", false, false, false, 10), 'widget');
        echo "
    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 12, $this->source); })()), 'form_end');
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
                <th>reservations</th>
                <th>Amenitites</th>
                <th>Images</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "adresse", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "type", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "prix", [], "any", false, false, false, 35), "html", null, true);
            echo "DT</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "maxguest", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "room", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "description", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>
    <ul>
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["hebergement"], "reservations", [], "any", false, false, false, 41));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 42
                echo "            <li>
                Du ";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "checkin", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "checkout", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
                echo "
                <!-- Autres détails de la réservation -->
            </li>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 47
                echo "            <li>Aucune réservation pour cet hébergement.</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    </ul> 
               </td>
               <td>
    <ul>
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["hebergement"], "amenities", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                // line 54
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["amenity"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </ul>
            </td>
            <td>
    ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["hebergement"], "image", [], "any", false, false, false, 59)) {
                // line 60
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["hebergement"], "image", [], "any", false, false, false, 60))), "html", null, true);
                echo "\" width=\"50%\"/>
    ";
            }
            // line 62
            echo "</td>   
           
                <td>
                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hebergement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_new");
        echo "\">Create new</a>

    <canvas id=\"ratingsChart\"  width=\"400\" height=\"400\"></canvas>
    <canvas id=\"reservationsChart\"  width=\"400\" height=\"400\"></canvas>

    ";
        // line 82
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 83
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo " ";
        // line 84
        echo "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
    var donneesReservations = ";
        // line 87
        echo (isset($context["donneesReservations"]) || array_key_exists("donneesReservations", $context) ? $context["donneesReservations"] : (function () { throw new RuntimeError('Variable "donneesReservations" does not exist.', 87, $this->source); })());
        echo ";
    var pourcentageRatings = ";
        // line 88
        echo (isset($context["pourcentageRatings"]) || array_key_exists("pourcentageRatings", $context) ? $context["pourcentageRatings"] : (function () { throw new RuntimeError('Variable "pourcentageRatings" does not exist.', 88, $this->source); })());
        echo ";
    console.log(\"Données des réservations :\", donneesReservations);
    console.log(\"Pourcentage des Ratings :\", pourcentageRatings);
    var ctxRatings = document.getElementById('ratingsChart').getContext('2d');
    var ratingsChart = new Chart(ctxRatings, {
    type: 'pie',
    data: {
        labels: ['1 étoile', '2 étoiles', '3 étoiles', '4 étoiles', '5 étoiles'], // Adaptez selon vos données
        datasets: [{
            data: pourcentagesRatings,
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 205, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(54, 162, 235, 0.6)',],
        }]
    },
    options: {
        // Options de configuration
    }
});

var ctxReservations = document.getElementById('reservationsChart').getContext('2d');
var reservationsChart = new Chart(ctxReservations, {
    type: 'bar', // Ou tout autre type qui vous convient
    data: {
        labels: ['maison de location', 'airbnb', 'hotel'],
        datasets: [{
            label: 'Nombre de réservations',
            data: [donneesReservations],
            backgroundColor: [ 'rgba(255, 99, 132, 0.6)',
    'rgba(255, 159, 64, 0.6)',
    'rgba(255, 205, 86, 0.6)'],
        }]
    },
    options: {
        // Options de configuration
    }
});    </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  310 => 88,  306 => 87,  301 => 84,  297 => 83,  278 => 82,  270 => 77,  265 => 74,  256 => 70,  247 => 66,  243 => 65,  238 => 62,  232 => 60,  230 => 59,  225 => 56,  216 => 54,  212 => 53,  206 => 49,  199 => 47,  188 => 43,  185 => 42,  180 => 41,  174 => 38,  170 => 37,  166 => 36,  162 => 35,  158 => 34,  154 => 33,  150 => 32,  147 => 31,  142 => 30,  121 => 12,  116 => 10,  112 => 9,  108 => 7,  98 => 6,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Hebergement index{% endblock %}
{% block stylesheets %}{% endblock %}

{% block content %}
    <h1>Hebergement index</h1>

  {{ form_start(searchForm, {'action': path('hebergement_search'), 'method': 'GET'}) }}
    {{ form_widget(searchForm.search) }}
    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
{{ form_end(searchForm) }}
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
                <th>reservations</th>
                <th>Amenitites</th>
                <th>Images</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for hebergement in hebergements %}
            <tr>
                <td>{{ hebergement.id }}</td>
                <td>{{ hebergement.adresse }}</td>
                <td>{{ hebergement.type }}</td>
                <td>{{ hebergement.prix }}DT</td>
                <td>{{ hebergement.maxguest }}</td>
                <td>{{ hebergement.room }}</td>
                <td>{{ hebergement.description }}</td>
                <td>
    <ul>
        {% for reservation in hebergement.reservations %}
            <li>
                Du {{ reservation.checkin|date('d/m/Y') }} au {{ reservation.checkout|date('d/m/Y') }}
                <!-- Autres détails de la réservation -->
            </li>
        {% else %}
            <li>Aucune réservation pour cet hébergement.</li>
        {% endfor %}
    </ul> 
               </td>
               <td>
    <ul>
        {% for amenity in hebergement.amenities %}
            <li>{{ amenity }}</li>
        {% endfor %}
    </ul>
            </td>
            <td>
    {% if hebergement.image %}
        <img src=\"{{ asset('uploads/' ~ hebergement.image) }}\" width=\"50%\"/>
    {% endif %}
</td>   
           
                <td>
                    <a href=\"{{ path('app_hebergement_show', {'id': hebergement.id}) }}\">show</a>
                    <a href=\"{{ path('app_hebergement_edit', {'id': hebergement.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_hebergement_new') }}\">Create new</a>

    <canvas id=\"ratingsChart\"  width=\"400\" height=\"400\"></canvas>
    <canvas id=\"reservationsChart\"  width=\"400\" height=\"400\"></canvas>

    {% block javascript %}
        {{ parent() }} {# Pour inclure les scripts du bloc parent #}

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
    var donneesReservations = {{ donneesReservations|raw }};
    var pourcentageRatings = {{ pourcentageRatings|raw }};
    console.log(\"Données des réservations :\", donneesReservations);
    console.log(\"Pourcentage des Ratings :\", pourcentageRatings);
    var ctxRatings = document.getElementById('ratingsChart').getContext('2d');
    var ratingsChart = new Chart(ctxRatings, {
    type: 'pie',
    data: {
        labels: ['1 étoile', '2 étoiles', '3 étoiles', '4 étoiles', '5 étoiles'], // Adaptez selon vos données
        datasets: [{
            data: pourcentagesRatings,
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 205, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(54, 162, 235, 0.6)',],
        }]
    },
    options: {
        // Options de configuration
    }
});

var ctxReservations = document.getElementById('reservationsChart').getContext('2d');
var reservationsChart = new Chart(ctxReservations, {
    type: 'bar', // Ou tout autre type qui vous convient
    data: {
        labels: ['maison de location', 'airbnb', 'hotel'],
        datasets: [{
            label: 'Nombre de réservations',
            data: [donneesReservations],
            backgroundColor: [ 'rgba(255, 99, 132, 0.6)',
    'rgba(255, 159, 64, 0.6)',
    'rgba(255, 205, 86, 0.6)'],
        }]
    },
    options: {
        // Options de configuration
    }
});    </script>
    {% endblock %}
{% endblock %}
", "hebergement/index.html.twig", "C:\\Users\\Meriem\\Desktop\\hermes\\templates\\hebergement\\index.html.twig");
    }
}
