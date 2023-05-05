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

/* base_c/ancien.html.twig */
class __TwigTemplate_3211c4a5dfef1c80ebebe5d6fcf839af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_c/ancien.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_c/ancien.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base_c/ancien.html.twig", 1);
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

        echo "Anciens élèves";
        
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
          <h2>Liste des anciens élèves</h2>
          <ul>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "ancien", [], "any", false, false, false, 14)) {
                // line 15
                echo "                <li>
                  <strong>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</strong><br>
                  Email : ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 17), "html", null, true);
                echo "<br>
                  Adresse : ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 18), "html", null, true);
                echo "<br>
                  Promo nom : ";
                // line 19
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["user"], "promo", [], "any", false, false, false, 19))) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "promo", [], "any", false, false, false, 19), "nomp", [], "any", false, false, false, 19), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo "aucune donnée";
                    echo " ";
                }
                echo "<br>
                  Promo date : ";
                // line 20
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["user"], "promo", [], "any", false, false, false, 20))) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "promo", [], "any", false, false, false, 20), "datep", [], "any", false, false, false, 20), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo "aucune donnée";
                    echo " ";
                }
                echo "<br>
                </li>
                <ul>
                  <li>";
                // line 23
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["user"], "promo", [], "any", false, false, false, 23))) {
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_by_promo", ["promoId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "promo", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\">Voir tout les utilisateurs de cette promotion</a> ";
                } else {
                    echo " ";
                    echo "";
                    echo " ";
                }
                echo "</li><br>
                </ul>
              ";
            }
            // line 26
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "          </ul>
        </div>
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
        return "base_c/ancien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 27,  159 => 26,  145 => 23,  131 => 20,  119 => 19,  115 => 18,  111 => 17,  107 => 16,  104 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Anciens élèves{% endblock %}

{% block body %}
<section class=\"main-banner\" id=\"top\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 align-self-center\">
        <div class=\"header-text\">
          <h2>Liste des anciens élèves</h2>
          <ul>
            {% for user in users %}
              {% if user.ancien %}
                <li>
                  <strong>{{ user.name }}</strong><br>
                  Email : {{ user.email }}<br>
                  Adresse : {{ user.adresse }}<br>
                  Promo nom : {% if user.promo is not null %} {{ user.promo.nomp }} {% else %} {{ 'aucune donnée' }} {% endif %}<br>
                  Promo date : {% if user.promo is not null %} {{ user.promo.datep }} {% else %} {{ 'aucune donnée' }} {% endif %}<br>
                </li>
                <ul>
                  <li>{% if user.promo is not null %} <a href=\"{{ path('users_by_promo', {'promoId': user.promo.id}) }}\">Voir tout les utilisateurs de cette promotion</a> {% else %} {{ '' }} {% endif %}</li><br>
                </ul>
              {% endif %}
            {% endfor %}
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}", "base_c/ancien.html.twig", "/home/symfo/templates/base_c/ancien.html.twig");
    }
}
