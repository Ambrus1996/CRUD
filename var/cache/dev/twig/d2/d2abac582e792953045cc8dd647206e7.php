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

/* reservation/my_reservations.html.twig */
class __TwigTemplate_b4a2b5a507c1e3074c825589a1ff111d extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/my_reservations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/my_reservations.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "My Reservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\" style=\"font-weight: bold; color:white; font-size: 40px;\">My Reservations</h1>
    <div class=\"row\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 12
            yield "        <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" style=\"font-weight: bold;\">";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true);
            yield " at ";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "time", [], "any", false, false, false, 15), "H:i"), "html", null, true);
            yield "</h5>
                    <p class=\"card-text\">";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "serviceType", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                    <p class=\"card-text\">Reserved by: ";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "customerName", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "    </div>
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
        return "reservation/my_reservations.html.twig";
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
        return array (  110 => 22,  99 => 17,  95 => 16,  89 => 15,  84 => 12,  80 => 11,  75 => 8,  68 => 7,  54 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/reservation/my_reservations.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}My Reservations{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\" style=\"font-weight: bold; color:white; font-size: 40px;\">My Reservations</h1>
    <div class=\"row\">
        {% for reservation in reservations %}
        <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" style=\"font-weight: bold;\">{{ reservation.date|date('Y-m-d') }} at {{ reservation.time|date('H:i') }}</h5>
                    <p class=\"card-text\">{{ reservation.serviceType }}</p>
                    <p class=\"card-text\">Reserved by: {{ reservation.customerName }}</p>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>

{% endblock %}
", "reservation/my_reservations.html.twig", "/home/ambro/CRUD/templates/reservation/my_reservations.html.twig");
    }
}
