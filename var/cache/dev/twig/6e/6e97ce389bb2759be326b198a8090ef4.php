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

/* transport_front/statistics.html.twig */
class __TwigTemplate_2960e6a5d90f21dde215c6cf840185b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport_front/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "transport_front/statistics.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        canvas {
            display: block;
            margin: auto;
            margin-top: 20px;
        }

        .btn-back {
            margin-top: 20px;
            display: block;
            text-align: center;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 48
        echo "    <div class=\"container\">
        <h1>Statistiques des tickets par type de transport</h1>

        <table>
            <thead>
                <tr>
                    <th>Type de transport</th>
                    <th>Nombre de tickets</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 60
            echo "                    <tr>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "type", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "ticketCount", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </tbody>
        </table>

        <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>

        <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_front_index");
        echo "\" class=\"btn btn-warning btn-sm btn-back\">Retour à la liste</a>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            const ctx = document.getElementById('myChart').getContext('2d');
            const data = {
                labels: [";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            echo "'";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "type", [], "any", false, false, false, 78), "html", null, true);
            echo "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                datasets: [{
                    label: 'Nombre de tickets par type de transport',
                    data: [";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "ticketCount", [], "any", false, false, false, 81), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            };
            const chart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: {
                    plugins: {
                        subtitle: {
                            display: true,
                            text: 'Statistiques des tickets par type de transport',
                            font: {
                                size: 16
                            }
                        }
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
        return "transport_front/statistics.html.twig";
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
        return array (  183 => 81,  168 => 78,  157 => 70,  150 => 65,  141 => 62,  137 => 61,  134 => 60,  130 => 59,  117 => 48,  110 => 47,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        canvas {
            display: block;
            margin: auto;
            margin-top: 20px;
        }

        .btn-back {
            margin-top: 20px;
            display: block;
            text-align: center;
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"container\">
        <h1>Statistiques des tickets par type de transport</h1>

        <table>
            <thead>
                <tr>
                    <th>Type de transport</th>
                    <th>Nombre de tickets</th>
                </tr>
            </thead>
            <tbody>
                {% for stat in statistics %}
                    <tr>
                        <td>{{ stat.type }}</td>
                        <td>{{ stat.ticketCount }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>

        <a href=\"{{ path('app_transport_front_index') }}\" class=\"btn btn-warning btn-sm btn-back\">Retour à la liste</a>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            const ctx = document.getElementById('myChart').getContext('2d');
            const data = {
                labels: [{% for stat in statistics %}'{{ stat.type }}',{% endfor %}],
                datasets: [{
                    label: 'Nombre de tickets par type de transport',
                    data: [{% for stat in statistics %}{{ stat.ticketCount }},{% endfor %}],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            };
            const chart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: {
                    plugins: {
                        subtitle: {
                            display: true,
                            text: 'Statistiques des tickets par type de transport',
                            font: {
                                size: 16
                            }
                        }
                    }
                }
            });
        });
    </script>
{% endblock %}
", "transport_front/statistics.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\transport_front\\statistics.html.twig");
    }
}
