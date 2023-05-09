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

/* base_c/eleve.html.twig */
class __TwigTemplate_493d09cadcc5fbecb954a4ea904a8e5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_c/eleve.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_c/eleve.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base_c/eleve.html.twig", 1);
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

        echo "Eleve";
        
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
        echo "
<section class=\"our-courses\" id=\"courses\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          <div class=\"section-heading\">
            <h6>Bienvenue aux anciens élèves</h6>
            <h4>Nous avons toujours besoin de <em>vous !</em></h4>
            <p>Envie d'aider ? ça tombe bien on ne dis pas non pour les stages</p>
          </div>
        </div>
        <div class=\"col-lg-12\">
          <div class=\"naccs\">
            <div class=\"tabs\">
              <div class=\"row\">
                <div class=\"col-lg-3\">
                  <div class=\"menu\">
                    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 23), "userIdentifier", [], "any", true, true, false, 23)) {
            // line 24
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "ancien", [], "any", false, false, false, 24)) {
                // line 25
                echo "                    <div class=\"active gradient-border\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stage");
                echo "\">Je veux aider pour les stages</a></div>
                    <div class=\"active gradient-border\"><a href=\"";
                // line 26
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ancien");
                echo "\">Liste des anciens élève</a></div>
                    ";
            }
            // line 28
            echo "                    ";
        }
        // line 29
        echo "                    <div class=\"active gradient-border\"><span>Forum d'aide</span></div>
                    <div class=\"active gradient-border\"><span>Info sur les stages</span></div>
                  </div>
                </div>
                <div class=\"col-lg-9\">
                  <ul class=\"nacc\">
                    <li class=\"active\">
                      <div>
                        <div class=\"left-image\">
                          <img src=\"assets/images/courses-01.jpg\" alt=\"\">
                          <div class=\"price\"><h6>2023</h6></div>
                        </div>
                        <div class=\"right-content\">
                          <h4>Qui suis-je ?</h4>
                          <p>Je suis un ancien élève de Beaupeyrat et j'aimerais participer au développement de l'institut et de l'aide à la recherche de stage
                          <br><br>Je suis rentré dans le monde professionnel ou je possède des contacts intéressés par des stagiaires</p>
                          <span>stage de 6 semaines</span>
                          <span class=\"last-span\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " stages restants</span>
                        </div>
                      </div>
                    </li>
                    </ul>
                </div>
              </div>
            </div>
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
        return "base_c/eleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 46,  125 => 29,  122 => 28,  117 => 26,  112 => 25,  109 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eleve{% endblock %}

{% block body %}

<section class=\"our-courses\" id=\"courses\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          <div class=\"section-heading\">
            <h6>Bienvenue aux anciens élèves</h6>
            <h4>Nous avons toujours besoin de <em>vous !</em></h4>
            <p>Envie d'aider ? ça tombe bien on ne dis pas non pour les stages</p>
          </div>
        </div>
        <div class=\"col-lg-12\">
          <div class=\"naccs\">
            <div class=\"tabs\">
              <div class=\"row\">
                <div class=\"col-lg-3\">
                  <div class=\"menu\">
                    {% if app.user.userIdentifier is defined %}
                    {% if app.user.ancien %}
                    <div class=\"active gradient-border\"><a href=\"{{ path('app_stage') }}\">Je veux aider pour les stages</a></div>
                    <div class=\"active gradient-border\"><a href=\"{{ path('app_ancien') }}\">Liste des anciens élève</a></div>
                    {% endif %}
                    {% endif %}
                    <div class=\"active gradient-border\"><span>Forum d'aide</span></div>
                    <div class=\"active gradient-border\"><span>Info sur les stages</span></div>
                  </div>
                </div>
                <div class=\"col-lg-9\">
                  <ul class=\"nacc\">
                    <li class=\"active\">
                      <div>
                        <div class=\"left-image\">
                          <img src=\"assets/images/courses-01.jpg\" alt=\"\">
                          <div class=\"price\"><h6>2023</h6></div>
                        </div>
                        <div class=\"right-content\">
                          <h4>Qui suis-je ?</h4>
                          <p>Je suis un ancien élève de Beaupeyrat et j'aimerais participer au développement de l'institut et de l'aide à la recherche de stage
                          <br><br>Je suis rentré dans le monde professionnel ou je possède des contacts intéressés par des stagiaires</p>
                          <span>stage de 6 semaines</span>
                          <span class=\"last-span\">{{ result }} stages restants</span>
                        </div>
                      </div>
                    </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{% endblock %}", "base_c/eleve.html.twig", "/home/symfo/templates/base_c/eleve.html.twig");
    }
}
