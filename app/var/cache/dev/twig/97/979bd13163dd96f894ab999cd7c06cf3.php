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

/* base_c/dons.html.twig */
class __TwigTemplate_0bbe8471fb6381b7115ad1439e7e60e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_c/dons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_c/dons.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base_c/dons.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Taxe d'apprentissage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"main-banner\" id=\"top\">
<div class=\"container\">
    <div class=\"row\">
    <div class=\"col-lg-6 align-self-center\">
        <div class=\"header-text\">
            <h3>Taxe d'apprentissage</h3>
        </div>
        <br>
        <p>Chaque jour, notre établissement accompagne l’épanouissement personnel et la professionnalisation de nos étudiants. Depuis une vingtaine d’année, nous avons ouvert une partie de nos formations à l’alternance, conscients que votre place est indispensable à nos côtés pour apprendre et faire aimer vos différents métiers.</p>
        <br>
        <p>Nous poursuivons nos efforts d’équipement et de renouvellement de notre parc informatique.</p>
        <br>
        <p>Cet investissement important pour notre école, de plusieurs dizaines de milliers d’euros, est un défi permanent à relever ensemble. Aussi, nous faisons appel à votre confiance pour nous réserver le versement de votre Taxe d’Apprentissage.</p>
        <br>
        <p>Merci dès à présent pour toutes les formes d’encouragement et de soutien apportées à notre établissement et à nos étudiants !</p>
    </div>
    <div class=\"col-lg-6\">
        <a href=\"https://beaupeyrat.fr/wp-content/uploads/2023/03/Taxe-apprentissage-2023.pdf\">Taxe apprentissage 2023</a>
        <p><em>Emmanuel RABATEL, Chef d’Etablissement</em></p>
    </div>
    </div>
</div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base_c/dons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Taxe d'apprentissage{% endblock %}

{% block body %}
<section class=\"main-banner\" id=\"top\">
<div class=\"container\">
    <div class=\"row\">
    <div class=\"col-lg-6 align-self-center\">
        <div class=\"header-text\">
            <h3>Taxe d'apprentissage</h3>
        </div>
        <br>
        <p>Chaque jour, notre établissement accompagne l’épanouissement personnel et la professionnalisation de nos étudiants. Depuis une vingtaine d’année, nous avons ouvert une partie de nos formations à l’alternance, conscients que votre place est indispensable à nos côtés pour apprendre et faire aimer vos différents métiers.</p>
        <br>
        <p>Nous poursuivons nos efforts d’équipement et de renouvellement de notre parc informatique.</p>
        <br>
        <p>Cet investissement important pour notre école, de plusieurs dizaines de milliers d’euros, est un défi permanent à relever ensemble. Aussi, nous faisons appel à votre confiance pour nous réserver le versement de votre Taxe d’Apprentissage.</p>
        <br>
        <p>Merci dès à présent pour toutes les formes d’encouragement et de soutien apportées à notre établissement et à nos étudiants !</p>
    </div>
    <div class=\"col-lg-6\">
        <a href=\"https://beaupeyrat.fr/wp-content/uploads/2023/03/Taxe-apprentissage-2023.pdf\">Taxe apprentissage 2023</a>
        <p><em>Emmanuel RABATEL, Chef d’Etablissement</em></p>
    </div>
    </div>
</div>
</section>
{% endblock %}", "base_c/dons.html.twig", "/home/symfo/templates/base_c/dons.html.twig");
    }
}
