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

/* emails/Verif.html.twig */
class __TwigTemplate_b15c22c2d6976910969cd633a95a2395 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/Verif.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "emails/Verif.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reset Password";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["VerifFrom"]) || array_key_exists("VerifFrom", $context) ? $context["VerifFrom"] : (function () { throw new RuntimeError('Variable "VerifFrom" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
    ";
        // line 7
        if (((isset($context["Label"]) || array_key_exists("Label", $context) ? $context["Label"] : (function () { throw new RuntimeError('Variable "Label" does not exist.', 7, $this->source); })()) == "password")) {
            // line 8
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["VerifFrom"]) || array_key_exists("VerifFrom", $context) ? $context["VerifFrom"] : (function () { throw new RuntimeError('Variable "VerifFrom" does not exist.', 8, $this->source); })()), "Code", [], "any", false, false, false, 8), 'row', ["label" =>             // line 9
(isset($context["Label"]) || array_key_exists("Label", $context) ? $context["Label"] : (function () { throw new RuntimeError('Variable "Label" does not exist.', 9, $this->source); })()), "constraints" => [["NotBlank" => ["message" => "Please enter a password"]], ["Length" => ["min" => 6, "minMessage" => "Your password should be at least {{ limit }} characters", "max" => 4096]]]]);
            // line 20
            echo "
    ";
        } else {
            // line 22
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["VerifFrom"]) || array_key_exists("VerifFrom", $context) ? $context["VerifFrom"] : (function () { throw new RuntimeError('Variable "VerifFrom" does not exist.', 22, $this->source); })()), "Code", [], "any", false, false, false, 22), 'row', ["label" => (isset($context["Label"]) || array_key_exists("Label", $context) ? $context["Label"] : (function () { throw new RuntimeError('Variable "Label" does not exist.', 22, $this->source); })())]);
            echo "
    ";
        }
        // line 24
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["VerifFrom"]) || array_key_exists("VerifFrom", $context) ? $context["VerifFrom"] : (function () { throw new RuntimeError('Variable "VerifFrom" does not exist.', 24, $this->source); })()), "submit", [], "any", false, false, false, 24), 'row');
        echo "
";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["VerifFrom"]) || array_key_exists("VerifFrom", $context) ? $context["VerifFrom"] : (function () { throw new RuntimeError('Variable "VerifFrom" does not exist.', 25, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/Verif.html.twig";
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
        return array (  98 => 25,  93 => 24,  87 => 22,  83 => 20,  81 => 9,  79 => 8,  77 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Reset Password{% endblock %}

{% block content %}
{{ form_start(VerifFrom) }}
    {% if Label == 'password' %}
        {{ form_row(VerifFrom.Code, {
            'label': Label,
            'constraints': [
                {'NotBlank': {
                    'message': 'Please enter a password'
                }},
                {'Length': {
                    'min': 6,
                    'minMessage': 'Your password should be at least {{ limit }} characters',
                    'max': 4096
                }}
            ]
        }) }}
    {% else %}
        {{ form_row(VerifFrom.Code, {'label': Label}) }}
    {% endif %}
    {{ form_row(VerifFrom.submit) }}
{{ form_end(VerifFrom) }}
{% endblock %}
", "emails/Verif.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\templates\\emails\\Verif.html.twig");
    }
}
