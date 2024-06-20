<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_27e597ba91a99046505586327f821c17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
    .form-signin {
        background-color: rgba(0, 0, 0, 0.8); /* Zatamnjena pozadina za bolji kontrast */
        padding: 40px; /* Veći padding za bolji izgled */
        border-radius: 8px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Jača senka oko forme */
        max-width: 400px; /* Ograničava širinu forme */
        margin: 60px auto; /* Veći margin za bolje centriranje */
        color: #ffffff; /* Beli tekst za bolju vidljivost */
    }

    .form-control {
        margin-bottom: 20px; /* Veći razmak između polja */
        background: rgba(255, 255, 255, 0.9); /* Delimično providna kontrola */
        color: #333; /* Tamni tekst unutar kontrola */
    }

    .checkbox {
        margin-top: 20px; /* Razmak iznad checkbox-a */
    }

    h1 {
        text-align: center; /* Centriraj naslov */
    }

    .btn-primary {
        width: 100%; /* Dugme zauzima celu širinu */
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        yield "<br>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 form-signin\">
            <form method=\"post\">
                ";
        // line 43
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 43, $this->source); })())) {
            // line 44
            yield "                    <div class=\"alert alert-danger\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageKey", [], "any", false, false, false, 44), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageData", [], "any", false, false, false, 44), "security"), "html", null, true);
            yield "</div>
                ";
        }
        // line 46
        yield "                
                ";
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            // line 48
            yield "                    <div class=\"alert alert-info\">
                        You are logged in as ";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "userIdentifier", [], "any", false, false, false, 49), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                    </div>
                    
                ";
        } else {
            // line 53
            yield "                    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                    <label for=\"inputEmail\">Email</label>
                    <input type=\"email\" value=\"";
            // line 55
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                    <label for=\"inputPassword\">Password</label>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 59
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            yield "\">

                    <div class=\"checkbox mb-3\">
                        <label>
                            <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                        </label>
                    </div>

                    <button class=\"btn btn-lg btn-primary\" type=\"submit\">Sign in</button>
                ";
        }
        // line 69
        yield "            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  176 => 69,  163 => 59,  156 => 55,  152 => 53,  143 => 49,  140 => 48,  138 => 47,  135 => 46,  129 => 44,  127 => 43,  120 => 38,  113 => 37,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block stylesheets %}
<style>
    .form-signin {
        background-color: rgba(0, 0, 0, 0.8); /* Zatamnjena pozadina za bolji kontrast */
        padding: 40px; /* Veći padding za bolji izgled */
        border-radius: 8px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Jača senka oko forme */
        max-width: 400px; /* Ograničava širinu forme */
        margin: 60px auto; /* Veći margin za bolje centriranje */
        color: #ffffff; /* Beli tekst za bolju vidljivost */
    }

    .form-control {
        margin-bottom: 20px; /* Veći razmak između polja */
        background: rgba(255, 255, 255, 0.9); /* Delimično providna kontrola */
        color: #333; /* Tamni tekst unutar kontrola */
    }

    .checkbox {
        margin-top: 20px; /* Razmak iznad checkbox-a */
    }

    h1 {
        text-align: center; /* Centriraj naslov */
    }

    .btn-primary {
        width: 100%; /* Dugme zauzima celu širinu */
    }
</style>
{% endblock %}

{% block body %}
<br>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 form-signin\">
            <form method=\"post\">
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                
                {% if app.user %}
                    <div class=\"alert alert-info\">
                        You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                    
                {% else %}
                    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                    <label for=\"inputEmail\">Email</label>
                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                    <label for=\"inputPassword\">Password</label>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                    <div class=\"checkbox mb-3\">
                        <label>
                            <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                        </label>
                    </div>

                    <button class=\"btn btn-lg btn-primary\" type=\"submit\">Sign in</button>
                {% endif %}
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "/home/ambro/CRUD/templates/security/login.html.twig");
    }
}
