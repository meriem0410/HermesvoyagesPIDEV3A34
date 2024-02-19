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

/* evenement/_form.html.twig */
class __TwigTemplate_f93a548094c3c191bae6974e2549a120 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        // line 1
        echo "<style>
    .form-error {
        color:red;
    }
    Cod

</style>

";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "





        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), 'label');
        echo "
            </label>
            <input type=\"text\" class=\"form-control\" ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), 'errors');
        echo "
            </div>
        </div>




      <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'label');
        echo "
            </label>
            <textarea type=\"text\" class=\"form-control\" ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'widget');
        echo "</textarea>
            <div class=\"form-error\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'errors');
        echo "
            </div>
        </div>



     <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lieu", [], "any", false, false, false, 39), 'label');
        echo "
            </label>
            <input type=\"text\" class=\"form-control\" ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "lieu", [], "any", false, false, false, 41), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "lieu", [], "any", false, false, false, 43), 'errors');
        echo "
            </div>
        </div>



        
     <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "image", [], "any", false, false, false, 51), 'label');
        echo "
            </label>
            <input type=\"file\" class=\"form-control\" ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "image", [], "any", false, false, false, 53), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "image", [], "any", false, false, false, 55), 'errors');
        echo "
            </div>
        </div>


    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'widget');
        echo "
    <button class=\"btn btn-primary\">";
        // line 61
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 61, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "evenement/_form.html.twig";
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
        return array (  148 => 62,  144 => 61,  140 => 60,  132 => 55,  127 => 53,  122 => 51,  111 => 43,  106 => 41,  101 => 39,  91 => 32,  86 => 30,  81 => 28,  70 => 20,  65 => 18,  60 => 16,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .form-error {
        color:red;
    }
    Cod

</style>

{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}





        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.titre) }}
            </label>
            <input type=\"text\" class=\"form-control\" {{ form_widget(form.titre) }}
            <div class=\"form-error\">
                {{ form_errors(form.titre) }}
            </div>
        </div>




      <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.description) }}
            </label>
            <textarea type=\"text\" class=\"form-control\" {{ form_widget(form.description) }}</textarea>
            <div class=\"form-error\">
                {{ form_errors(form.description) }}
            </div>
        </div>



     <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.lieu) }}
            </label>
            <input type=\"text\" class=\"form-control\" {{ form_widget(form.lieu) }}
            <div class=\"form-error\">
                {{ form_errors(form.lieu) }}
            </div>
        </div>



        
     <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.image) }}
            </label>
            <input type=\"file\" class=\"form-control\" {{ form_widget(form.image) }}
            <div class=\"form-error\">
                {{ form_errors(form.image) }}
            </div>
        </div>


    {{ form_widget(form) }}
    <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "evenement/_form.html.twig", "C:\\Users\\User\\Downloads\\HermesvoyagesPIDEV3A34-main\\templates\\evenement\\_form.html.twig");
    }
}
