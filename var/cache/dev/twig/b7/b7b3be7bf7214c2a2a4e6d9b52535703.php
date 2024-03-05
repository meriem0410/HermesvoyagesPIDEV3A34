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

/* tickets/index.html.twig */
class __TwigTemplate_6c8d4cf431af23e931e9cee2fbb66da0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tickets/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "tickets/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tickets index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"col-lg-8 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Gestion Tickets</h4>
            <p class=\"card-description\">List of tickets</p>
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            
                            <th>Destination</th>
                            <th>Prix</th>
                            <th>Depart</th>
                            <th>Arrive</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 24
        if (twig_test_empty((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 24, $this->source); })()))) {
            // line 25
            echo "                            <tr>
                                <td colspan=\"6\">No records found</td>
                            </tr>
                        ";
        } else {
            // line 29
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 30
                echo "                                <tr>
                                   
                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "destination", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                                    <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "prix", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "depart", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "arrive", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>

                                    
                                    <td>
                                        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tickets_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\">Show</a>
                                        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tickets_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\">Edit</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        ";
        }
        // line 45
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"card-footer\">
            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tickets_new");
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
        return "tickets/index.html.twig";
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
        return array (  153 => 50,  146 => 45,  143 => 44,  133 => 40,  129 => 39,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 30,  101 => 29,  95 => 25,  93 => 24,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Tickets index{% endblock %}

{% block content %}
<div class=\"col-lg-8 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Gestion Tickets</h4>
            <p class=\"card-description\">List of tickets</p>
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            
                            <th>Destination</th>
                            <th>Prix</th>
                            <th>Depart</th>
                            <th>Arrive</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% if tickets is empty %}
                            <tr>
                                <td colspan=\"6\">No records found</td>
                            </tr>
                        {% else %}
                            {% for ticket in tickets %}
                                <tr>
                                   
                                    <td>{{ ticket.destination }}</td>
                                    <td>{{ ticket.prix }}</td>
                                    <td>{{ ticket.depart }}</td>
                                    <td>{{ ticket.arrive }}</td>

                                    
                                    <td>
                                        <a href=\"{{ path('app_tickets_show', {'id': ticket.id}) }}\" class=\"btn btn-primary btn-sm\">Show</a>
                                        <a href=\"{{ path('app_tickets_edit', {'id': ticket.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                                    </td>
                                </tr>
                            {% endfor %}
                        {% endif %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"card-footer\">
            <a href=\"{{ path('app_tickets_new') }}\" class=\"btn btn-success\">Create New</a>
        </div>
    </div>
</div>
{% endblock %}
", "tickets/index.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\tickets\\index.html.twig");
    }
}
