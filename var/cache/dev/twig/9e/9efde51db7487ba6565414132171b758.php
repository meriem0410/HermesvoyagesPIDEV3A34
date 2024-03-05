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

/* status/index.html.twig */
class __TwigTemplate_faeb766fc3310eae8417b2244b745e9e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "status/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "status/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"container\">
        <h1>Welcome to the Home Page</h1>
        
";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 10), "get", ["id"], "method", true, true, false, 10) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "get", ["id"], "method", false, false, false, 10)))) {
            // line 11
            echo "
            <p>You are currently connected.</p>
            <form action=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" method=\"post\">
                <button type=\"submit\">Disconnect</button>
            </form>
        ";
        } else {
            // line 17
            echo "            <p>You are currently not connected.</p>
            <form action=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" method=\"post\">
                <button type=\"submit\">Connect</button>
            </form>
        ";
        }
        // line 22
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "status/index.html.twig";
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
        return array (  88 => 22,  81 => 18,  78 => 17,  71 => 13,  67 => 11,  65 => 10,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}



{% block content %}

    <div class=\"container\">
        <h1>Welcome to the Home Page</h1>
        
{% if app.session.get('id') is defined and app.session.get('id') is not null %}

            <p>You are currently connected.</p>
            <form action=\"{{ path('app_logout') }}\" method=\"post\">
                <button type=\"submit\">Disconnect</button>
            </form>
        {% else %}
            <p>You are currently not connected.</p>
            <form action=\"{{ path('login') }}\" method=\"post\">
                <button type=\"submit\">Connect</button>
            </form>
        {% endif %}
    </div>
{% endblock %}
", "status/index.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\templates\\status\\index.html.twig");
    }
}
