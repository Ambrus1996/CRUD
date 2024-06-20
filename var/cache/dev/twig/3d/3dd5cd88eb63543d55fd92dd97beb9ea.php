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

/* index.html.twig */
class __TwigTemplate_71241b88385cf44c9461d7f8fe46e876 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Home Page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "<style>
/* Stil za tekst */


/* Stil za animaciju dugmeta */
#growButton {
    transition: transform 0.3s ease;
    cursor: pointer;
    width: 100%; /* Širina dugmeta */
    font-size: 20px; /* Veća veličina fonta */
    padding: 15px 0; /* Veći padding za bolji vizuelni izgled */
    display: block; /* Omogućava centriranje */
    margin: 40px auto 0; /* Automatsko centriranje i margin na vrhu */
}
/* STILOVI ZA NEULOGOVANOG KORISNIKA */
.welcome-guest {
    text-align: center; /* Centriranje sadržaja */
    margin-top: 20vh; /* Postavljanje margine sa vrha */
    color: #fff; /* Bela boja teksta */
    background: rgba(0, 0, 0, 0.7); /* Poluprovidna crna pozadina za bolju čitljivost */
    padding: 20px;
    border-radius: 10px; /* Zaobljeni uglovi */
}

.welcome-guest h1 {
    margin-bottom: 20px; /* Razmak između naslova i teksta */
    font-size: 2rem; /* Veliki naslov */
}

.welcome-guest p {
    margin-bottom: 20px; /* Razmak između paragrafa i dugmadi */
    font-size: 1.2rem; /* Veličina teksta */
}

.welcome-guest a {
    display: inline-block;
    background: #007bff; /* Plava boja pozadine */
    color: #fff; /* Bela boja teksta */
    padding: 10px 20px; /* Padding za dugmad */
    margin: 5px;
    border-radius: 5px; /* Zaobljeni uglovi za dugmad */
    text-decoration: none; /* Nema podcrtanog teksta */
}

.welcome-guest a:hover {
    background: #0056b3; /* Tamnija nijansa plave na hover */
}
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 59
        yield "
";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
            // line 61
            yield "<div class=\"welcome-guest\">
    <h1 class=\"welcome-text\">Welcome, ";
            // line 62
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "email", [], "any", false, false, false, 62), "html", null, true);
            yield "!</h1>
    <p>This is your starting point to explore and interact with the application.</p>
</div>
";
        } else {
            // line 66
            yield "<div class=\"welcome-guest\">
    <h1>Welcome to the Home Page!</h1>
    <p>This is your starting point to explore and interact with the application.</p>
    <a href=\"";
            // line 69
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a> or <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Register</a> to start managing your reservations.
</div>
";
        }
        // line 72
        yield "
<div class=\"container\">
    <div id=\"gymCarousel\" class=\"carousel slide my-4\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"";
        // line 77
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gym1.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"Gym image 1\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 80
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gym2.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"Gym image 2\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 83
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gym3.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"Gym image 3\">
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#gymCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#gymCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
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
        return "index.html.twig";
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
        return array (  187 => 83,  181 => 80,  175 => 77,  168 => 72,  160 => 69,  155 => 66,  148 => 62,  145 => 61,  143 => 60,  140 => 59,  133 => 58,  76 => 7,  69 => 6,  55 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Home Page{% endblock %}

{% block stylesheets %}
<style>
/* Stil za tekst */


/* Stil za animaciju dugmeta */
#growButton {
    transition: transform 0.3s ease;
    cursor: pointer;
    width: 100%; /* Širina dugmeta */
    font-size: 20px; /* Veća veličina fonta */
    padding: 15px 0; /* Veći padding za bolji vizuelni izgled */
    display: block; /* Omogućava centriranje */
    margin: 40px auto 0; /* Automatsko centriranje i margin na vrhu */
}
/* STILOVI ZA NEULOGOVANOG KORISNIKA */
.welcome-guest {
    text-align: center; /* Centriranje sadržaja */
    margin-top: 20vh; /* Postavljanje margine sa vrha */
    color: #fff; /* Bela boja teksta */
    background: rgba(0, 0, 0, 0.7); /* Poluprovidna crna pozadina za bolju čitljivost */
    padding: 20px;
    border-radius: 10px; /* Zaobljeni uglovi */
}

.welcome-guest h1 {
    margin-bottom: 20px; /* Razmak između naslova i teksta */
    font-size: 2rem; /* Veliki naslov */
}

.welcome-guest p {
    margin-bottom: 20px; /* Razmak između paragrafa i dugmadi */
    font-size: 1.2rem; /* Veličina teksta */
}

.welcome-guest a {
    display: inline-block;
    background: #007bff; /* Plava boja pozadine */
    color: #fff; /* Bela boja teksta */
    padding: 10px 20px; /* Padding za dugmad */
    margin: 5px;
    border-radius: 5px; /* Zaobljeni uglovi za dugmad */
    text-decoration: none; /* Nema podcrtanog teksta */
}

.welcome-guest a:hover {
    background: #0056b3; /* Tamnija nijansa plave na hover */
}
</style>

{% endblock %}

{% block body %}

{% if app.user %}
<div class=\"welcome-guest\">
    <h1 class=\"welcome-text\">Welcome, {{ app.user.email }}!</h1>
    <p>This is your starting point to explore and interact with the application.</p>
</div>
{% else %}
<div class=\"welcome-guest\">
    <h1>Welcome to the Home Page!</h1>
    <p>This is your starting point to explore and interact with the application.</p>
    <a href=\"{{ path('app_login') }}\">Login</a> or <a href=\"{{ path('app_register') }}\">Register</a> to start managing your reservations.
</div>
{% endif %}

<div class=\"container\">
    <div id=\"gymCarousel\" class=\"carousel slide my-4\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"{{ asset('images/gym1.jpg') }}\" class=\"d-block w-100\" alt=\"Gym image 1\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/gym2.jpg') }}\" class=\"d-block w-100\" alt=\"Gym image 2\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{ asset('images/gym3.jpg') }}\" class=\"d-block w-100\" alt=\"Gym image 3\">
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#gymCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#gymCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    
   
</div>
{% endblock %}
", "index.html.twig", "/home/ambro/CRUD/templates/index.html.twig");
    }
}
