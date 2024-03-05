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

/* guide/dashboard.html.twig */
class __TwigTemplate_dd9a0be0b2851d884a021b285519d919 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "guide/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ( !twig_test_empty((isset($context["guides"]) || array_key_exists("guides", $context) ? $context["guides"] : (function () { throw new RuntimeError('Variable "guides" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "        <div class=\"swiper-container\">
            <div class=\"swiper-wrapper\">
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["guides"]) || array_key_exists("guides", $context) ? $context["guides"] : (function () { throw new RuntimeError('Variable "guides" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
                // line 8
                echo "                    <div class=\"swiper-slide\">
                        <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_showFront", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 9)]), "html", null, true);
                echo "\">
                            <div class=\"card\">
                                <img class=\"card-img-top\" src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["guide"], "image", [], "any", false, false, false, 11))), "html", null, true);
                echo "\" alt=\"Card image cap\">
                                <div class=\"card-body\">
                                    <h3 class=\"card-title\"><strong>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "nom", [], "any", false, false, false, 13), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "prenom", [], "any", false, false, false, 13), "html", null, true);
                echo "</strong></h3>
                                    <h4 class=\"card-title\">Video Count: ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "videoCount", [], "any", false, false, false, 14), "html", null, true);
                echo "</h4>
                                    <h4 class=\"card-title\">Likes: <i class=\"glyphicon glyphicon-thumbs-up\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "Likes", [], "any", false, false, false, 15), "html", null, true);
                echo "</i></h4>
                                    <h4 class=\"card-title\">Dislikes: <i class=\"glyphicon glyphicon-thumbs-down\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "Dislikes", [], "any", false, false, false, 16), "html", null, true);
                echo "</i></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </div>
            <div class=\"swiper-pagination\"></div>
            <div class=\"swiper-button-next\"></div>
            <div class=\"swiper-button-prev\"></div>
        </div>
    ";
        } else {
            // line 28
            echo "        <p>No records found</p>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "guide/dashboard.html.twig";
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
        return array (  117 => 28,  109 => 22,  97 => 16,  93 => 15,  89 => 14,  83 => 13,  78 => 11,  73 => 9,  70 => 8,  66 => 7,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if guides is not empty %}
        <div class=\"swiper-container\">
            <div class=\"swiper-wrapper\">
                {% for guide in guides %}
                    <div class=\"swiper-slide\">
                        <a href=\"{{ path('app_guide_showFront', {'id': guide.id}) }}\">
                            <div class=\"card\">
                                <img class=\"card-img-top\" src=\"{{ asset('Images/' ~ guide.image ) }}\" alt=\"Card image cap\">
                                <div class=\"card-body\">
                                    <h3 class=\"card-title\"><strong>{{ guide.nom }} {{ guide.prenom }}</strong></h3>
                                    <h4 class=\"card-title\">Video Count: {{ guide.videoCount }}</h4>
                                    <h4 class=\"card-title\">Likes: <i class=\"glyphicon glyphicon-thumbs-up\">{{ guide.Likes }}</i></h4>
                                    <h4 class=\"card-title\">Dislikes: <i class=\"glyphicon glyphicon-thumbs-down\">{{ guide.Dislikes }}</i></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                {% endfor %}
            </div>
            <div class=\"swiper-pagination\"></div>
            <div class=\"swiper-button-next\"></div>
            <div class=\"swiper-button-prev\"></div>
        </div>
    {% else %}
        <p>No records found</p>
    {% endif %}
{% endblock %}
", "guide/dashboard.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\guide\\dashboard.html.twig");
    }
}
