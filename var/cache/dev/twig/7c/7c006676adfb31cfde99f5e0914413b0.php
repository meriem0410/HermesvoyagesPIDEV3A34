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

/* reservation/index.html.twig */
class __TwigTemplate_842f8c4f7bb17d173ff058409ccae695 extends Template
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
            'page_contents' => [$this, 'block_page_contents'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "reservation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reservation index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <h1>Reservation index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Checkin</th>
                <th>Checkout</th>
                <th>Nbguest</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["reservation"], "Checkin", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "Checkin", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 26
            ((twig_get_attribute($this->env, $this->source, $context["reservation"], "Checkout", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "Checkout", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "nbguest", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "         ";
        $this->displayBlock('page_contents', $context, $blocks);
        // line 39
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new", ["HebergementId" => (isset($context["un_identifiant"]) || array_key_exists("un_identifiant", $context) ? $context["un_identifiant"] : (function () { throw new RuntimeError('Variable "un_identifiant" does not exist.', 42, $this->source); })())]), "html", null, true);
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_page_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_contents"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservation/index.html.twig";
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
        return array (  153 => 38,  144 => 42,  139 => 39,  136 => 38,  127 => 34,  118 => 30,  114 => 29,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  94 => 23,  89 => 22,  74 => 9,  67 => 8,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Reservation index{% endblock %}




{% block content %}
    <h1>Reservation index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Checkin</th>
                <th>Checkout</th>
                <th>Nbguest</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td>{{ reservation.id }}</td>
                <td>{{ reservation.Checkin ? reservation.Checkin|date('Y-m-d') : '' }}</td>
                <td>{{ reservation.Checkout ? reservation.Checkout|date('Y-m-d') : '' }}</td>
                <td>{{ reservation.nbguest }}</td>
                <td>
                    <a href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\">show</a>
                    <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
         {% block page_contents %}{% endblock %}
        </tbody>
    </table>

    <a href=\"{{ path('app_reservation_new', {'HebergementId': un_identifiant}) }}\">Create new</a>
{% endblock %}
", "reservation/index.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\reservation\\index.html.twig");
    }
}
