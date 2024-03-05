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

/* emails/signup.html.twig */
class __TwigTemplate_2d66b540e704834980aff7b28dc2ef4d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/signup.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Email Verification</title>
</head>
<body>
    <h1>Hello ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ",</h1>
    <p>Welcome to HermesVoyages!</p>
    <p>To complete your registration, please use the verification code below:</p>
    <p>Verification Code: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["verificationCode"]) || array_key_exists("verificationCode", $context) ? $context["verificationCode"] : (function () { throw new RuntimeError('Variable "verificationCode" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Please enter this code in the application to verify your email address.</p>
    <p>If you did not sign up for our application, please ignore this email.</p>
    <p>Thank you for choosing our service!</p>
    <p>Best regards,</p>
    <p>HermesVoyages</p>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/signup.html.twig";
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
        return array (  56 => 13,  50 => 10,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/email/verification.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Email Verification</title>
</head>
<body>
    <h1>Hello {{ username }},</h1>
    <p>Welcome to HermesVoyages!</p>
    <p>To complete your registration, please use the verification code below:</p>
    <p>Verification Code: {{ verificationCode }}</p>
    <p>Please enter this code in the application to verify your email address.</p>
    <p>If you did not sign up for our application, please ignore this email.</p>
    <p>Thank you for choosing our service!</p>
    <p>Best regards,</p>
    <p>HermesVoyages</p>
</body>
</html>
", "emails/signup.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\templates\\emails\\signup.html.twig");
    }
}
