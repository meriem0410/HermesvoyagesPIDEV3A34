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

/* transport/show.html.twig */
class __TwigTemplate_8f669d529c8c7265d98dd288c70268ed extends Template
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
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/show.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "transport/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Transport";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Transport Details</h4>
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_index");
        echo "\" class=\"btn btn-primary\">Back to List</a>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\" class=\"btn btn-warning\">Edit</a>
        </div>
    </div>
</div>

";
        // line 34
        echo twig_include($this->env, $context, "transport/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "transport/show.html.twig";
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
        return array (  118 => 34,  110 => 29,  106 => 28,  98 => 23,  91 => 19,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Transport{% endblock %}

{% block content %}
<div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Transport Details</h4>
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ transport.id }}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>{{ transport.type }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ transport.description }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href=\"{{ path('app_transport_index') }}\" class=\"btn btn-primary\">Back to List</a>
            <a href=\"{{ path('app_transport_edit', {'id': transport.id}) }}\" class=\"btn btn-warning\">Edit</a>
        </div>
    </div>
</div>

{{ include('transport/_delete_form.html.twig') }}
{% endblock %}
", "transport/show.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\transport\\show.html.twig");
    }
}
