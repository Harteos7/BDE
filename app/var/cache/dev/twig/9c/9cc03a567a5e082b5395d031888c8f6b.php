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

/* Nav-bar.html.twig */
class __TwigTemplate_9fc7afcaa4ebb86f9b6161977968a42e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Nav-bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Nav-bar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <header class=\"header-area header-sticky\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <nav class=\"main-nav\">
                                        <a href=\"/\" class=\"logo\">
                                            <img src=\"/assets/images/Beaupeyrat.png\" alt=\"nom\" width=\"90px\" height=\"90px\">
                                        </a>
                                        <!-- ***** Logo End ***** -->
                                        <ul class=\"nav\">
                                            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 20), "userIdentifier", [], "any", true, true, false, 20)) {
            // line 21
            echo "                                            <li><a class=\"user\">Bonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "User", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></li>
                                            ";
        }
        // line 23
        echo "                                            <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_base_c");
        echo "\" class=\"active\">Accueil</a></li>
                                            <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stage");
        echo "\">Stage</a></li>                                                                      
                                            <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve");
        echo "\">Ancien élève</a></li>
                                            <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dons");
        echo "\">Taxe d'apprentissage</a></li>
                                            <li class=\"has-sub\">
                                                <a href=\"javascript:void(0)\">Pages</a>
                                                <ul class=\"sub-menu\">
                                                    <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_base_c");
        echo "\">About Us</a></li>
                                                    <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_base_c");
        echo "\">Our Services</a></li>
                                                    <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_base_c");
        echo "\">Contact Us</a></li>
                                                </ul>
                                            </li>
                                            ";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 35), "userIdentifier", [], "any", true, true, false, 35)) {
            // line 36
            echo "                                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li> 
                                            <li><a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Enregistrement</a></li>
                                            ";
        }
        // line 39
        echo "                                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 39), "userIdentifier", [], "any", true, true, false, 39)) {
            // line 40
            echo "                                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                                            ";
        }
        // line 42
        echo "                                            ";
        // line 43
        echo "                                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 43), "roles", [], "any", true, true, false, 43)) {
            // line 44
            echo "                                            ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "roles", [], "any", false, false, false, 44))) {
                // line 45
                echo "                                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Administrateur</a></li>
                                            ";
            }
            // line 47
            echo "                                            ";
        }
        // line 48
        echo "                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- ***** Menu End ***** -->
                    
                </nav>
            </div>
        </div>
    </div>
</header>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Nav-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  141 => 47,  135 => 45,  132 => 44,  129 => 43,  127 => 42,  121 => 40,  118 => 39,  113 => 37,  108 => 36,  106 => 35,  100 => 32,  96 => 31,  92 => 30,  85 => 26,  81 => 25,  77 => 24,  72 => 23,  66 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <header class=\"header-area header-sticky\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <nav class=\"main-nav\">
                                        <a href=\"/\" class=\"logo\">
                                            <img src=\"/assets/images/Beaupeyrat.png\" alt=\"nom\" width=\"90px\" height=\"90px\">
                                        </a>
                                        <!-- ***** Logo End ***** -->
                                        <ul class=\"nav\">
                                            {% if app.user.userIdentifier is defined %}
                                            <li><a class=\"user\">Bonjour {{ app.User.name }}</a></li>
                                            {% endif %}
                                            <li><a href=\"{{ path('app_base_c') }}\" class=\"active\">Accueil</a></li>
                                            <li><a href=\"{{ path('app_stage') }}\">Stage</a></li>                                                                      
                                            <li><a href=\"{{ path('app_eleve') }}\">Ancien élève</a></li>
                                            <li><a href=\"{{ path('app_dons') }}\">Taxe d'apprentissage</a></li>
                                            <li class=\"has-sub\">
                                                <a href=\"javascript:void(0)\">Pages</a>
                                                <ul class=\"sub-menu\">
                                                    <li><a href=\"{{ path('app_base_c') }}\">About Us</a></li>
                                                    <li><a href=\"{{ path('app_base_c') }}\">Our Services</a></li>
                                                    <li><a href=\"{{ path('app_base_c') }}\">Contact Us</a></li>
                                                </ul>
                                            </li>
                                            {% if not app.user.userIdentifier is defined %}
                                            <li><a href=\"{{ path('app_login') }}\">Connexion</a></li> 
                                            <li><a href=\"{{ path('app_register') }}\">Enregistrement</a></li>
                                            {% endif %}
                                            {% if app.user.userIdentifier is defined %}
                                            <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                                            {% endif %}
                                            {# {{ app.user.roles|join(', ') }} #}
                                            {% if app.user.roles is defined %}
                                            {% if 'ROLE_ADMIN' in app.user.roles %}
                                            <li><a href=\"{{ path('admin') }}\">Administrateur</a></li>
                                            {% endif %}
                                            {% endif %}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- ***** Menu End ***** -->
                    
                </nav>
            </div>
        </div>
    </div>
</header>

</html>
", "Nav-bar.html.twig", "/home/symfo/templates/Nav-bar.html.twig");
    }
}
