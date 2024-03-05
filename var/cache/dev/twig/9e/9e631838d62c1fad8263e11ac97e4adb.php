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

/* chat/index.html.twig */
class __TwigTemplate_122f34edc5facc1d3ccacb0e6ab85d99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chat/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AutisMonkey";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
     .container
     {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 0px;

        position: relative;
        width: 874px;
        height: 428px;
        left: 20%;
        top: 48px;

        /* Neutrals/Gray 80 */

        background: #343541;

        transform:scale(0.8);
     }

     .header
     {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 24px 48px;
        gap: 24px;

        width: 874px;
        height: 78px;


        /* Inside auto layout */

        flex: none;
        order: 0;
        align-self: stretch;
        flex-grow: 0;
     }

     .title
     {
      width: 656px;
      height: 28px;

      font-family: 'Segoe UI';
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 28px;
      /* identical to box height, or 175% */

      display: flex;
      align-items: center;

      /* Neutrals/Gray 20 */

      color: #D1D5DB;


      /* Inside auto layout */

      flex: none;
      order: 1;
      flex-grow: 1;

      position: absolute;
      top: -11px;
      left: 313px;
      font-size: xx-large;
      font-weight: 600;
     }

     .avatar
     {
        width: 30px;
        height: 30px;

        /* Accents/Avatar */

        
        border-radius: 2px;

        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        position: absolute;
        top: 64px;
     }

     .question
     {
        width: 656px;
        height: 28px;

        font-family: 'Segoe UI';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 28px;
        /* identical to box height, or 175% */

        display: flex;
        align-items: center;

        /* Neutrals/Gray 20 */

        color: #D1D5DB;


        /* Inside auto layout */

        flex: none;
        order: 1;
        flex-grow: 1;
        position: absolute;
        top: 64px;
        left: 100px;
     }

     .gpt-response
     {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 24px 48px;
        gap: 24px;

      
        height: 216px;

        /* Neutrals/Gray 60 */

        background: #444654;

        /* Inside auto layout */

        flex: none;
        order: 1;
        align-self: stretch;
        flex-grow: 0;
     }

     .gpt-logo
     {
        width: 30px;
        height: 30px;

        /* Accents/ChatGPT */

        
        border-radius: 2px;

        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
     }

     .gpt
     {
        width: 656px;
        height: 168px;

        font-family: 'Segoe UI';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 28px;
        /* or 175% */

        display: flex;
        align-items: center;

        /* Neutrals/Gray 20 */

        color: #D1D5DB;


        /* Inside auto layout */

        flex: none;
        order: 1;
        flex-grow: 1;
     }

     .stream
     {
      color:white; 
      font-size:larger;
     }

     .type
     {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 24px 0px;
        gap: 4px;
        width: 874px;
        height: 134px;
        flex: none;
        order: 2;
        align-self: stretch;
        flex-grow: 0;
        background: #343541;
      }

      .input-div
      {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 0px 48px;
        gap: 8px;

        width: 874px;
        height: 50px;


        /* Inside auto layout */

        flex: none;
        order: 0;
        align-self: stretch;
        flex-grow: 0;
      }
     .text-input
     {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        width: 778px;
        height: 50px;

        /* Neutrals/Gray 60 */

        background: #444654;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        border-radius: 6px;

        /* Inside auto layout */

        flex: none;
        order: 0;
        align-self: stretch;
        flex-grow: 0;
     }

     .text
     {
        position: absolute;
        left: 98px;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        width: 653px;
        height: 38px;
        background: #444654;
        box-shadow: 0px 0px 15px rgb(0 0 0 / 10%);
        /* border-radius: 6px; */
        flex: none;
        order: 0;
        align-self: stretch;
        flex-grow: 0;
        border: none;
        top: 419px;
        color: white;
        text-decoration: none;
        outline: none;
        }

     .send
     {
      width: 26px;
      height: 30px;
      flex: none;
      order: 0;
      flex-grow: 0;
      position: absolute;
      left: 728px;
      top: -38px;
      cursor: pointer;
    }
    .btn
    {
      position: absolute;
      border: none;
      background: none;
    }

</style>

<div class=\"container\">


            <div class=\"header\">
   
               <h1 class=\"title\">Chat Bot</h1>

                <img src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/avatar.png"), "html", null, true);
        echo "\" alt=\"avatar\" class=\"avatar\">

                <span class=\"question\" id=\"question\">";
        // line 314
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 314, $this->source); })()), "html", null, true);
        echo "</span>
            </div>

            <div class=\"gpt-response\">

                <img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/gpt.png"), "html", null, true);
        echo "\" alt=\"gpt\" class=\"gpt-logo\">
              
                   <span ";
        // line 321
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("symfony/ux-typed", ["strings" => [        // line 322
(isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 322, $this->source); })())], "smartBackspace" => true, "startDelay" => 100, "backSpeed" => 20, "backDelay" => 100, "loop" => false, "showCursor" => true, "cursorChar" => "✨"]);
        // line 330
        echo " class=\"stream\"></span>
            </div>  

        <div class=\"type\">
            
            <div class=\"input-div\">

                <form action=\"";
        // line 337
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_chat");
        echo "\" method=\"post\">
                    <div class=\"text-input\">

                    <input type=\"text\" name=\"text\"  id=\"text\"  placeholder=\"\" class=\"text\">

                    </div>
                     
                     <button type=\"submit\" class=\"btn\">

                       <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/send.png"), "html", null, true);
        echo "\" alt=\"send\" class=\"send\">

                      </button>

                </form>
               
                
                
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
        return "chat/index.html.twig";
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
        return array (  423 => 346,  411 => 337,  402 => 330,  400 => 322,  399 => 321,  394 => 319,  386 => 314,  381 => 312,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AutisMonkey{% endblock %}

{% block body %}
<style>
     .container
     {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 0px;

        position: relative;
        width: 874px;
        height: 428px;
        left: 20%;
        top: 48px;

        /* Neutrals/Gray 80 */

        background: #343541;

        transform:scale(0.8);
     }

     .header
     {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 24px 48px;
        gap: 24px;

        width: 874px;
        height: 78px;


        /* Inside auto layout */

        flex: none;
        order: 0;
        align-self: stretch;
        flex-grow: 0;
     }

     .title
     {
      width: 656px;
      height: 28px;

      font-family: 'Segoe UI';
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 28px;
      /* identical to box height, or 175% */

      display: flex;
      align-items: center;

      /* Neutrals/Gray 20 */

      color: #D1D5DB;


      /* Inside auto layout */

      flex: none;
      order: 1;
      flex-grow: 1;

      position: absolute;
      top: -11px;
      left: 313px;
      font-size: xx-large;
      font-weight: 600;
     }

     .avatar
     {
        width: 30px;
        height: 30px;

        /* Accents/Avatar */

        
        border-radius: 2px;

        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        position: absolute;
        top: 64px;
     }

     .question
     {
        width: 656px;
        height: 28px;

        font-family: 'Segoe UI';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 28px;
        /* identical to box height, or 175% */

        display: flex;
        align-items: center;

        /* Neutrals/Gray 20 */

        color: #D1D5DB;


        /* Inside auto layout */

        flex: none;
        order: 1;
        flex-grow: 1;
        position: absolute;
        top: 64px;
        left: 100px;
     }

     .gpt-response
     {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 24px 48px;
        gap: 24px;

      
        height: 216px;

        /* Neutrals/Gray 60 */

        background: #444654;

        /* Inside auto layout */

        flex: none;
        order: 1;
        align-self: stretch;
        flex-grow: 0;
     }

     .gpt-logo
     {
        width: 30px;
        height: 30px;

        /* Accents/ChatGPT */

        
        border-radius: 2px;

        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
     }

     .gpt
     {
        width: 656px;
        height: 168px;

        font-family: 'Segoe UI';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 28px;
        /* or 175% */

        display: flex;
        align-items: center;

        /* Neutrals/Gray 20 */

        color: #D1D5DB;


        /* Inside auto layout */

        flex: none;
        order: 1;
        flex-grow: 1;
     }

     .stream
     {
      color:white; 
      font-size:larger;
     }

     .type
     {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 24px 0px;
        gap: 4px;
        width: 874px;
        height: 134px;
        flex: none;
        order: 2;
        align-self: stretch;
        flex-grow: 0;
        background: #343541;
      }

      .input-div
      {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 0px 48px;
        gap: 8px;

        width: 874px;
        height: 50px;


        /* Inside auto layout */

        flex: none;
        order: 0;
        align-self: stretch;
        flex-grow: 0;
      }
     .text-input
     {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        width: 778px;
        height: 50px;

        /* Neutrals/Gray 60 */

        background: #444654;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        border-radius: 6px;

        /* Inside auto layout */

        flex: none;
        order: 0;
        align-self: stretch;
        flex-grow: 0;
     }

     .text
     {
        position: absolute;
        left: 98px;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        width: 653px;
        height: 38px;
        background: #444654;
        box-shadow: 0px 0px 15px rgb(0 0 0 / 10%);
        /* border-radius: 6px; */
        flex: none;
        order: 0;
        align-self: stretch;
        flex-grow: 0;
        border: none;
        top: 419px;
        color: white;
        text-decoration: none;
        outline: none;
        }

     .send
     {
      width: 26px;
      height: 30px;
      flex: none;
      order: 0;
      flex-grow: 0;
      position: absolute;
      left: 728px;
      top: -38px;
      cursor: pointer;
    }
    .btn
    {
      position: absolute;
      border: none;
      background: none;
    }

</style>

<div class=\"container\">


            <div class=\"header\">
   
               <h1 class=\"title\">Chat Bot</h1>

                <img src=\"{{asset('/image/avatar.png')}}\" alt=\"avatar\" class=\"avatar\">

                <span class=\"question\" id=\"question\">{{question}}</span>
            </div>

            <div class=\"gpt-response\">

                <img src=\"{{asset('/image/gpt.png')}}\" alt=\"gpt\" class=\"gpt-logo\">
              
                   <span {{ stimulus_controller('symfony/ux-typed', {
                    strings: [response],
                    smartBackspace: true,
                    startDelay: 100,
                    backSpeed: 20,
                    backDelay: 100,
                    loop: false,
                    showCursor: true,
                    cursorChar: '✨'
                }) }} class=\"stream\"></span>
            </div>  

        <div class=\"type\">
            
            <div class=\"input-div\">

                <form action=\"{{path('send_chat')}}\" method=\"post\">
                    <div class=\"text-input\">

                    <input type=\"text\" name=\"text\"  id=\"text\"  placeholder=\"\" class=\"text\">

                    </div>
                     
                     <button type=\"submit\" class=\"btn\">

                       <img src=\"{{asset('/image/send.png')}}\" alt=\"send\" class=\"send\">

                      </button>

                </form>
               
                
                
            </div>

            
                
            
            
        </div>
   

    

</div>

{% endblock %}", "chat/index.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\templates\\chat\\index.html.twig");
    }
}
