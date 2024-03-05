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

/* tickets_front/index.html.twig */
class __TwigTemplate_5d4f6caabe984bcb8c43bd37eb2a94a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tickets_front/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "tickets_front/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
    <h1 class=\"text-center mb-5\">Tickets</h1>
    <style>
        .transport-card {
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            transition: box-shadow 0.3s ease;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
        }

        .transport-card:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .transport-card img {
            width: 100%;
            height: auto;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .transport-card .card-body {
            padding: 20px;
        }

        .transport-card .card-text {
            color: #555;
            margin-bottom: 10px;
        }

        .transport-card .card-footer {
            background-color: #f9f9f9;
            padding: 15px 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .transport-card .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .transport-card .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
    
    ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 55, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 55) == 0)) {
            // line 56
            echo "        <div class=\"row\">
            <div class=\"col\">
                <p class=\"text-muted\">Aucun enregistrement trouvé</p>
            </div>
        </div>
    ";
        } else {
            // line 62
            echo "        <div class=\"row\">
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 64
                echo "                <div class=\"col-md-4 mb-4\">
                    <div class=\"transport-card\">
                        <img src=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cc.jpg"), "html", null, true);
                echo "\" alt=\"\">
                        <div class=\"card-body\" style=\"text-align: center; font-weight: bold;\">
                            <p class=\"card-text\"><strong>Destination:</strong> ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "destination", [], "any", false, false, false, 68), "html", null, true);
                echo "</p>
                            <p class=\"card-text\"><strong>Prix:</strong> ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "prix", [], "any", false, false, false, 69), "html", null, true);
                echo "</p>
                            <p class=\"card-text\"><strong>Départ:</strong> ";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "depart", [], "any", false, false, false, 70), "html", null, true);
                echo "</p>
                            <p class=\"card-text\"><strong>Arrivée:</strong> ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "arrive", [], "any", false, false, false, 71), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"";
                // line 74
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tickets_front_new");
                echo "\" class=\"btn btn-primary btn-sm btn-block\">Réserver <i class=\"icon-arrow-right22\"></i></a>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        </div>
    ";
        }
        // line 81
        echo "    
    ";
        // line 83
        echo "    <div class=\"row mt-4\">
        <div class=\"col\">
            ";
        // line 85
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 85, $this->source); })()));
        echo "
        </div>
    </div>
    
    <div class=\"row mt-4\">
        <div class=\"col\">
            <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_front_index");
        echo "\" class=\"btn btn-success\">Retour aux moyens de transport</a>
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
        return "tickets_front/index.html.twig";
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
        return array (  187 => 91,  178 => 85,  174 => 83,  171 => 81,  167 => 79,  156 => 74,  150 => 71,  146 => 70,  142 => 69,  138 => 68,  133 => 66,  129 => 64,  125 => 63,  122 => 62,  114 => 56,  112 => 55,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block content %}
<div class=\"container\">
    <h1 class=\"text-center mb-5\">Tickets</h1>
    <style>
        .transport-card {
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            transition: box-shadow 0.3s ease;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
        }

        .transport-card:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .transport-card img {
            width: 100%;
            height: auto;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .transport-card .card-body {
            padding: 20px;
        }

        .transport-card .card-text {
            color: #555;
            margin-bottom: 10px;
        }

        .transport-card .card-footer {
            background-color: #f9f9f9;
            padding: 15px 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .transport-card .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .transport-card .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
    
    {% if pagination.getTotalItemCount() == 0 %}
        <div class=\"row\">
            <div class=\"col\">
                <p class=\"text-muted\">Aucun enregistrement trouvé</p>
            </div>
        </div>
    {% else %}
        <div class=\"row\">
            {% for ticket in pagination %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"transport-card\">
                        <img src=\"{{ asset('images/cc.jpg') }}\" alt=\"\">
                        <div class=\"card-body\" style=\"text-align: center; font-weight: bold;\">
                            <p class=\"card-text\"><strong>Destination:</strong> {{ ticket.destination }}</p>
                            <p class=\"card-text\"><strong>Prix:</strong> {{ ticket.prix }}</p>
                            <p class=\"card-text\"><strong>Départ:</strong> {{ ticket.depart }}</p>
                            <p class=\"card-text\"><strong>Arrivée:</strong> {{ ticket.arrive }}</p>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"{{ path('app_tickets_front_new') }}\" class=\"btn btn-primary btn-sm btn-block\">Réserver <i class=\"icon-arrow-right22\"></i></a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
    
    {# Pagination controls #}
    <div class=\"row mt-4\">
        <div class=\"col\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
    
    <div class=\"row mt-4\">
        <div class=\"col\">
            <a href=\"{{ path('app_transport_front_index') }}\" class=\"btn btn-success\">Retour aux moyens de transport</a>
        </div>
    </div>
</div>
{% endblock %}
", "tickets_front/index.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\tickets_front\\index.html.twig");
    }
}
