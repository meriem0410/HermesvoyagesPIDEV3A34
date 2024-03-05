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

/* login/login.html.twig */
class __TwigTemplate_da8d68e18db531729096b44c934ba1fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "login/login.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    
        <br>
        <br>
        <div class=\"cont\">
            <div class=\"form sign-in\">
                <h2>Welcome</h2>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'row');
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "password", [], "any", false, false, false, 18), 'row');
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "submit", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "submit"]]);
        echo "
                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
                <button type=\"button\" class=\"submit\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_claimEmail");
        echo "\">Forget Password</a></button>
            </div>
            <div class=\"sub-cont\">
                <div class=\"img\">
                    <div class=\"img__text m--up\">
                        <h3>Don't have an account? Please Sign up!<h3>
                    </div>
                    <div class=\"img__text m--in\">
                        <h3>If you already have an account, just sign in.<h3>
                    </div>
                    <div class=\"img__btn\">
                        <span class=\"m--up\">Sign Up</span>
                        <span class=\"m--in\">Sign In</span>
                    </div>
                </div>
                <div class=\"form sign-up\">
                    <h2>Create your Account</h2>
                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 39, $this->source); })()), "username", [], "any", false, false, false, 39), 'row');
        echo "
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'row');
        echo "
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), 'row');
        echo "
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 42, $this->source); })()), "submit", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "submit"]]);
        echo "
                    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>

        <script>
            document.querySelector('.img__btn').addEventListener('click', function() {
                document.querySelector('.cont').classList.toggle('s--signup');
            });
        </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/login.html.twig";
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
        return array (  145 => 43,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  105 => 21,  101 => 20,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  77 => 10,  70 => 9,  60 => 6,  53 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/login.html.twig #}

{% extends 'base_front.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('Login.css') }}\" />
{% endblock %}

{% block body %}
    
        <br>
        <br>
        <div class=\"cont\">
            <div class=\"form sign-in\">
                <h2>Welcome</h2>
                {{ form_start(form) }}
                    {{ form_row(form.email) }}
                    {{ form_row(form.password) }}
                    {{ form_widget(form.submit, {'attr': {'class': 'submit'}}) }}
                {{ form_end(form) }}
                <button type=\"button\" class=\"submit\"><a href=\"{{ path('app_claimEmail') }}\">Forget Password</a></button>
            </div>
            <div class=\"sub-cont\">
                <div class=\"img\">
                    <div class=\"img__text m--up\">
                        <h3>Don't have an account? Please Sign up!<h3>
                    </div>
                    <div class=\"img__text m--in\">
                        <h3>If you already have an account, just sign in.<h3>
                    </div>
                    <div class=\"img__btn\">
                        <span class=\"m--up\">Sign Up</span>
                        <span class=\"m--in\">Sign In</span>
                    </div>
                </div>
                <div class=\"form sign-up\">
                    <h2>Create your Account</h2>
                    {{ form_start(formSignup) }}
                        {{ form_row(formSignup.username) }}
                        {{ form_row(formSignup.email) }}
                        {{ form_row(formSignup.password) }}
                        {{ form_widget(formSignup.submit, {'attr': {'class': 'submit'}}) }}
                    {{ form_end(formSignup) }}
                </div>
            </div>
        </div>

        <script>
            document.querySelector('.img__btn').addEventListener('click', function() {
                document.querySelector('.cont').classList.toggle('s--signup');
            });
        </script>
{% endblock %}
", "login/login.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\templates\\login\\login.html.twig");
    }
}
