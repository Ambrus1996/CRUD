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

/* reservation/new.html.twig */
class __TwigTemplate_7d8112198994eff447e67b95ff23d6d3 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/new.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", ["success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 7
            yield "<div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"5000\" style=\"position: absolute; top: 0; right: 0;\">
  <div class=\"toast-header\">
    <strong class=\"mr-auto text-primary\">Success</strong>
    <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
      <span aria-hidden=\"true\">&times;</span>
    </button>
  </div>
  <div class=\"toast-body\">
    ";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flash_message"], "html", null, true);
            yield "
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "  <div class=\"container mt-4\">
    <h1 class=\"text-center mb-4\">Make a Reservation</h1>

    ";
        // line 23
        yield "    ";
        $context["dateValue"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "query", [], "any", false, false, false, 23), "get", ["date"], "method", false, false, false, 23);
        // line 24
        yield "
    ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "form-reservation"]]);
        yield "

    <div class=\"form-group\">
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28), 'label');
        yield "
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "date", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group\">
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "time", [], "any", false, false, false, 33), 'label');
        yield "
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "time", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group\">
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "customerName", [], "any", false, false, false, 38), 'label');
        yield "
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "customerName", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group\">
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "serviceType", [], "any", false, false, false, 43), 'label');
        yield "
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "serviceType", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Submit Reservation</button>

    ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        yield "
  </div>
  <style>
    /* Stilovi za naslov i formu */
    .container h1 {
        color: white; /* Promeni boju teksta u belu */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Dodaj senku tekstu da se bolje ističe */
    }

    .form-reservation {
        background-color: rgba(255, 255, 255, 0.8); /* Delimično providna bela pozadina za formu */
        padding: 20px;
        border-radius: 8px; /* Zaobljeni uglovi */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Blaga senka oko forme */
    }

    .form-reservation .form-group {
        margin-bottom: 20px; /* Povećaj razmak između grupa u formi */
    }

    .form-reservation button {
        width: 100%; /* Dugme da zauzima celu širinu */
        padding: 10px 0; /* Veći padding za dugme */
    }
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservation/new.html.twig";
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
        return array (  146 => 49,  138 => 44,  134 => 43,  127 => 39,  123 => 38,  116 => 34,  112 => 33,  105 => 29,  101 => 28,  95 => 25,  92 => 24,  89 => 23,  84 => 19,  74 => 15,  64 => 7,  60 => 6,  53 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/reservation/new.html.twig #}

{% extends 'base.html.twig' %}

{% block body %}
{% for flash_message in app.flashes('success') %}
<div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"5000\" style=\"position: absolute; top: 0; right: 0;\">
  <div class=\"toast-header\">
    <strong class=\"mr-auto text-primary\">Success</strong>
    <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
      <span aria-hidden=\"true\">&times;</span>
    </button>
  </div>
  <div class=\"toast-body\">
    {{ flash_message }}
  </div>
</div>
{% endfor %}
  <div class=\"container mt-4\">
    <h1 class=\"text-center mb-4\">Make a Reservation</h1>

    {# Uzmi datum iz URL-a ako postoji i postavi ga kao vrednost za datum #}
    {% set dateValue = app.request.query.get('date') %}

    {{ form_start(form, {'attr': {'class': 'form-reservation'}}) }}

    <div class=\"form-group\">
        {{ form_label(form.date) }}
        {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.time) }}
        {{ form_widget(form.time, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.customerName) }}
        {{ form_widget(form.customerName, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.serviceType) }}
        {{ form_widget(form.serviceType, {'attr': {'class': 'form-control'}}) }}
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">Submit Reservation</button>

    {{ form_end(form) }}
  </div>
  <style>
    /* Stilovi za naslov i formu */
    .container h1 {
        color: white; /* Promeni boju teksta u belu */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Dodaj senku tekstu da se bolje ističe */
    }

    .form-reservation {
        background-color: rgba(255, 255, 255, 0.8); /* Delimično providna bela pozadina za formu */
        padding: 20px;
        border-radius: 8px; /* Zaobljeni uglovi */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Blaga senka oko forme */
    }

    .form-reservation .form-group {
        margin-bottom: 20px; /* Povećaj razmak između grupa u formi */
    }

    .form-reservation button {
        width: 100%; /* Dugme da zauzima celu širinu */
        padding: 10px 0; /* Veći padding za dugme */
    }
</style>

{% endblock %}

", "reservation/new.html.twig", "/home/ambro/CRUD/templates/reservation/new.html.twig");
    }
}
