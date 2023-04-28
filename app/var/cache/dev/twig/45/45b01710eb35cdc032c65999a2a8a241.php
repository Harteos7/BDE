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

/* base_c/stage.html.twig */
class __TwigTemplate_5395e009fb626865722d03364ad56c2c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_c/stage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_c/stage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base_c/stage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
  <link rel=\"stylesheet\" href=\"assets/css/templatemo-eduwell-style.css\">
  <link rel=\"stylesheet\" href=\"assets/css/owl.css\">
  <link rel=\"stylesheet\" href=\"assets/css/lightbox.css\">

  <link rel=\"stylesheet\" href=\"assets/core/main.css\">
  <link rel=\"stylesheet\" href=\"assets/daygrid/main.css\"> 

  <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/core/main.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/daygrid/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "stage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "<section class=\"our-courses\" id=\"courses\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          <div class=\"section-heading\">
            <h6>Calendrier des stages</h6>
            <div id=\"calendar\"></div>
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  var calendarEl = document.getElementById('calendar');

                  var calendar = new FullCalendar.Calendar(calendarEl, {
                      plugins: [ 'dayGrid' ],
                      defaultView: 'dayGridMonth',
                      events: [
                      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stages"]) || array_key_exists("stages", $context) ? $context["stages"] : (function () { throw new RuntimeError('Variable "stages" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 36
            echo "                        {
                          title: '";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "info", [], "any", false, false, false, 37), "html", null, true);
            echo "',
                          start: '";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "datesstart", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true);
            echo "',
                          end: '";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "datesend", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true);
            echo "',
                          backgroundColor: '#ff8989'
                        },
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                      ],
                      eventRender: function(info) {
                        if (info.event.rendering === 'background') {
                          info.el.style.backgroundColor = info.event.backgroundColor;
                          return false;
                        }
                      }
                    });

                  calendar.render();
                });
              </script>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stages"]) || array_key_exists("stages", $context) ? $context["stages"] : (function () { throw new RuntimeError('Variable "stages" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 56
            echo "            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "datesstart", [], "any", false, false, false, 56), "d-m-Y"), "html", null, true);
            echo "
            ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "datesend", [], "any", false, false, false, 57), "d-m-Y"), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "          </div>
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
        return "base_c/stage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 59,  191 => 57,  186 => 56,  182 => 55,  168 => 43,  158 => 39,  154 => 38,  150 => 37,  147 => 36,  143 => 35,  126 => 20,  116 => 19,  97 => 17,  85 => 14,  81 => 13,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
  <link rel=\"stylesheet\" href=\"assets/css/templatemo-eduwell-style.css\">
  <link rel=\"stylesheet\" href=\"assets/css/owl.css\">
  <link rel=\"stylesheet\" href=\"assets/css/lightbox.css\">

  <link rel=\"stylesheet\" href=\"assets/core/main.css\">
  <link rel=\"stylesheet\" href=\"assets/daygrid/main.css\"> 

  <script src=\"{{ asset('assets/core/main.js') }}\"></script>
  <script src=\"{{ asset('assets/daygrid/main.js') }}\"></script>
{% endblock %}

{% block title %}stage{% endblock %}

{% block body %}
<section class=\"our-courses\" id=\"courses\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          <div class=\"section-heading\">
            <h6>Calendrier des stages</h6>
            <div id=\"calendar\"></div>
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  var calendarEl = document.getElementById('calendar');

                  var calendar = new FullCalendar.Calendar(calendarEl, {
                      plugins: [ 'dayGrid' ],
                      defaultView: 'dayGridMonth',
                      events: [
                      {% for stage in stages %}
                        {
                          title: '{{ stage.info }}',
                          start: '{{ stage.datesstart|date('Y-m-d') }}',
                          end: '{{ stage.datesend|date('Y-m-d') }}',
                          backgroundColor: '#ff8989'
                        },
                      {% endfor %}
                      ],
                      eventRender: function(info) {
                        if (info.event.rendering === 'background') {
                          info.el.style.backgroundColor = info.event.backgroundColor;
                          return false;
                        }
                      }
                    });

                  calendar.render();
                });
              </script>
            {% for stage in stages %}
            {{ stage.datesstart|date('d-m-Y') }}
            {{ stage.datesend|date('d-m-Y') }}
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
</section>
{% endblock %}", "base_c/stage.html.twig", "/home/symfo/templates/base_c/stage.html.twig");
    }
}
