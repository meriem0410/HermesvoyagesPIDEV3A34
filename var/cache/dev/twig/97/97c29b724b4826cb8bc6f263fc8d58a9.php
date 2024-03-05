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

/* transport_front/show.html.twig */
class __TwigTemplate_5f2b2aa8b80e5933a79e22c592e17e11 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport_front/show.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "transport_front/show.html.twig", 1);
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
    <h1 class=\"text-center mb-5\"></h1>
    <style>
        .transport-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            transition: box-shadow 0.3s ease;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .transport-card:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .transport-card .card-body {
            padding: 20px;
            background-image: url('";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cc.jpg"), "html", null, true);
        echo "');
            background-size: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .transport-card .card-body h5.card-title,
        .transport-card .card-body p.card-text {
            color: #fff;
            margin-bottom: 0;
        }

        .transport-card .card-footer {
            background-color: #f9f9f9;
            padding: 15px 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
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
    <div class=\"row\">
        ";
        // line 52
        if (twig_test_empty((isset($context["ticketss"]) || array_key_exists("ticketss", $context) ? $context["ticketss"] : (function () { throw new RuntimeError('Variable "ticketss" does not exist.', 52, $this->source); })()))) {
            // line 53
            echo "            <p class=\"text-muted\">Aucun enregistrement trouvé</p>
        ";
        } else {
            // line 55
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketss"]) || array_key_exists("ticketss", $context) ? $context["ticketss"] : (function () { throw new RuntimeError('Variable "ticketss" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 56
                echo "                <div class=\"col-md-4 mb-4\">
                    <div class=\"transport-card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\" style=\"font-weight: bold; color: black;\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "destination", [], "any", false, false, false, 59), "html", null, true);
                echo "</h5>
                            <p class=\"card-text\" style=\"font-weight: bold; color: black;\">prix:";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "prix", [], "any", false, false, false, 60), "html", null, true);
                echo " </p>
                            <p class=\"card-text\" style=\"font-weight: bold; color: black;\">Départ: ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "depart", [], "any", false, false, false, 61), "html", null, true);
                echo "</p>
                            <p class=\"card-text\" style=\"font-weight: bold; color: black;\">Arrivée: ";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "arrive", [], "any", false, false, false, 62), "html", null, true);
                echo "</p>
                        </div>
                        
                        <div class=\"card-footer\">
                            <a href=\"#\" class=\"btn btn-primary btn-sm btn-block\">Réserver <i class=\"icon-arrow-right22\"></i></a>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        ";
        }
        // line 72
        echo "    </div>
    <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_front_index");
        echo "\" class=\"btn btn-success\">Retour aux moyens de transport</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "transport_front/show.html.twig";
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
        return array (  161 => 73,  158 => 72,  155 => 71,  140 => 62,  136 => 61,  132 => 60,  128 => 59,  123 => 56,  118 => 55,  114 => 53,  112 => 52,  79 => 22,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block content %}
<div class=\"container\">
    <h1 class=\"text-center mb-5\"></h1>
    <style>
        .transport-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            transition: box-shadow 0.3s ease;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .transport-card:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .transport-card .card-body {
            padding: 20px;
            background-image: url('{{ asset('images/cc.jpg') }}');
            background-size: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .transport-card .card-body h5.card-title,
        .transport-card .card-body p.card-text {
            color: #fff;
            margin-bottom: 0;
        }

        .transport-card .card-footer {
            background-color: #f9f9f9;
            padding: 15px 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
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
    <div class=\"row\">
        {% if ticketss is empty %}
            <p class=\"text-muted\">Aucun enregistrement trouvé</p>
        {% else %}
            {% for ticket in ticketss %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"transport-card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\" style=\"font-weight: bold; color: black;\">{{ ticket.destination }}</h5>
                            <p class=\"card-text\" style=\"font-weight: bold; color: black;\">prix:{{ ticket.prix }} </p>
                            <p class=\"card-text\" style=\"font-weight: bold; color: black;\">Départ: {{ ticket.depart }}</p>
                            <p class=\"card-text\" style=\"font-weight: bold; color: black;\">Arrivée: {{ ticket.arrive }}</p>
                        </div>
                        
                        <div class=\"card-footer\">
                            <a href=\"#\" class=\"btn btn-primary btn-sm btn-block\">Réserver <i class=\"icon-arrow-right22\"></i></a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endif %}
    </div>
    <a href=\"{{ path('app_transport_front_index') }}\" class=\"btn btn-success\">Retour aux moyens de transport</a>
</div>
{% endblock %}
", "transport_front/show.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\transport_front\\show.html.twig");
    }
}
