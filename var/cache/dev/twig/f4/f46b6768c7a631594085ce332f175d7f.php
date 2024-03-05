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

/* status/status.html.twig */
class __TwigTemplate_02c4f24b230ce53151db39d7c22ac103 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "status/status.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "get", ["isBanned"], "method", false, false, false, 1) == 1)) {
            echo " 
        ";
            // line 2
            $this->loadTemplate("banned.html.twig", "status/status.html.twig", 2)->display($context);
        } else {
            // line 3
            echo " 
        ";
            // line 4
            $this->loadTemplate("status/index.html.twig", "status/status.html.twig", 4)->display($context);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "status/status.html.twig";
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
        return array (  50 => 4,  47 => 3,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.session.get('isBanned') == 1 %} 
        {% include 'banned.html.twig' %}
{% else %} 
        {% include 'status/index.html.twig' %}
{% endif %}
", "status/status.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\templates\\status\\status.html.twig");
    }
}
