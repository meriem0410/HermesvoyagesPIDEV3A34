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

/* transport_front/index.html.twig */
class __TwigTemplate_26206fab8b3cd17998a2f7e1876022a3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport_front/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "transport_front/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Transport index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"container\">
    <h1 class=\"text-center mb-5\">Transport</h1>
    <style>
        /* Your existing CSS styles here */
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

        .transport-card img {
            width: 100%;
            height: auto;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .transport-card .card-body {
            padding: 20px;
            text-align: center;
        }

        .transport-card .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: #000;
            font-weight: bold;
        }

        .transport-card .card-text {
            color: #000;
            font-weight: bold;
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
        // line 65
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 65, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 65) == 0)) {
            // line 66
            echo "        <div class=\"row\">
            <div class=\"col\">
                <p class=\"text-muted\">Aucun enregistrement trouvé</p>
            </div>
        </div>
        ";
        } else {
            // line 72
            echo "        <div class=\"row\">
        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 74
                echo "        <div class=\"col-md-4 mb-4\">
            <div class=\"transport-card\">
                <img src=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/aa.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 76), "html", null, true);
                echo "\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 78), "html", null, true);
                echo "</h5>
                    <p class=\"card-text\">";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 79), "html", null, true);
                echo "</p>
                </div>
                <div class=\"card-footer\">
                    <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_front_show", ["id" => twig_get_attribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm btn-block\">Find tickets <i class=\"icon-arrow-right22\"></i></a>
                </div>
            </div>
        </div>
       
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
    </div>
    ";
        }
        // line 91
        echo "    ";
        // line 92
        echo "    <div class=\"row mt-4\">
        <div class=\"col\">
            ";
        // line 94
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 94, $this->source); })()));
        echo "
        </div>
    </div>
    <div class=\"row mt-4\">
        ";
        // line 98
        echo "<br>";
        echo "
        <div class=\"col-md-6\">
            <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tickets_front_index");
        echo "\" class=\"btn btn-primary btn-block btn-lg\">Tous les tickets <i class=\"icon-arrow-right22 ml-2\"></i></a>
        </div>
        <div class=\"col-md-6\">
            <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_front_statistics");
        echo "\" class=\"btn btn-warning btn-block btn-lg\">Statistique <i class=\"icon-arrow-right22 ml-2\"></i></a>
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
        return "transport_front/index.html.twig";
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
        return array (  213 => 103,  207 => 100,  202 => 98,  195 => 94,  191 => 92,  189 => 91,  184 => 88,  172 => 82,  166 => 79,  162 => 78,  155 => 76,  151 => 74,  147 => 73,  144 => 72,  136 => 66,  134 => 65,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Transport index{% endblock %}

{% block content %}
<div class=\"container\">
    <h1 class=\"text-center mb-5\">Transport</h1>
    <style>
        /* Your existing CSS styles here */
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

        .transport-card img {
            width: 100%;
            height: auto;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .transport-card .card-body {
            padding: 20px;
            text-align: center;
        }

        .transport-card .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: #000;
            font-weight: bold;
        }

        .transport-card .card-text {
            color: #000;
            font-weight: bold;
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
        {% if pagination.getTotalItemCount() == 0 %}
        <div class=\"row\">
            <div class=\"col\">
                <p class=\"text-muted\">Aucun enregistrement trouvé</p>
            </div>
        </div>
        {% else %}
        <div class=\"row\">
        {% for transport in pagination %}
        <div class=\"col-md-4 mb-4\">
            <div class=\"transport-card\">
                <img src=\"{{ asset('images/aa.png') }}\" alt=\"{{ transport.type }}\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ transport.type }}</h5>
                    <p class=\"card-text\">{{ transport.description }}</p>
                </div>
                <div class=\"card-footer\">
                    <a href=\"{{ path('app_transport_front_show', {'id': transport.id}) }}\" class=\"btn btn-primary btn-sm btn-block\">Find tickets <i class=\"icon-arrow-right22\"></i></a>
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
        {{ \"<br>\"|raw }}
        <div class=\"col-md-6\">
            <a href=\"{{ path('app_tickets_front_index') }}\" class=\"btn btn-primary btn-block btn-lg\">Tous les tickets <i class=\"icon-arrow-right22 ml-2\"></i></a>
        </div>
        <div class=\"col-md-6\">
            <a href=\"{{ path('app_transport_front_statistics') }}\" class=\"btn btn-warning btn-block btn-lg\">Statistique <i class=\"icon-arrow-right22 ml-2\"></i></a>
        </div>
    </div>
</div>
{% endblock %}
", "transport_front/index.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\transport_front\\index.html.twig");
    }
}
