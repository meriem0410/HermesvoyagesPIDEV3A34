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

/* transport/index.html.twig */
class __TwigTemplate_415b52b0b61635d5bccc655f56564fd1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "transport/index.html.twig", 1);
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
        echo "
<div class=\"col-lg-12 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Gestion Transport</h4>
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 23
            echo "                        <tr>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_show", ["id" => twig_get_attribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Show</a>
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">Edit</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                        <tr>
                            <td colspan=\"4\">No records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_new");
        echo "\" class=\"btn btn-success\">Create New</a>
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
        return "transport/index.html.twig";
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
        return array (  139 => 40,  134 => 37,  125 => 33,  116 => 29,  112 => 28,  107 => 26,  103 => 25,  99 => 24,  96 => 23,  91 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Transport index{% endblock %}

{% block content %}

<div class=\"col-lg-12 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Gestion Transport</h4>
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for transport in transports %}
                        <tr>
                            <td>{{ transport.id }}</td>
                            <td>{{ transport.type }}</td>
                            <td>{{ transport.description }}</td>
                            <td>
                                <a href=\"{{ path('app_transport_show', {'id': transport.id}) }}\" class=\"btn btn-primary btn-sm\">Show</a>
                                <a href=\"{{ path('app_transport_edit', {'id': transport.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\">No records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <a href=\"{{ path('app_transport_new') }}\" class=\"btn btn-success\">Create New</a>
        </div>
    </div>
</div>
{% endblock %}
", "transport/index.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\transport\\index.html.twig");
    }
}
