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
                <a href=\"/\" class=\"logo\">
                    <img src=\"/assets/images/Beaupeyrat.png\" alt=\"nom\" width=\"90px\" height=\"90px\">
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class=\"nav\">
                ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 16), "userIdentifier", [], "any", true, true, false, 16)) {
            // line 17
            echo "                    <li><a class=\"user\">Bonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "User", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 19
        echo "                <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_base_c");
        echo "\" class=\"active\">Home</a></li>
                <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stage");
        echo "\">stage</a></li>                                                                      
                <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve");
        echo "\">Ancien élève</a></li>
                <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dons");
        echo "\">Taxe d'apprentissage</a></li>
                <li class=\"has-sub\">
                    <a href=\"javascript:void(0)\">Pages</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_base_c");
        echo "\">About Us</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_base_c");
        echo "\">Our Services</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_base_c");
        echo "\">Contact Us</a></li>
                    </ul>
                </li>
                ";
        // line 31
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 31), "userIdentifier", [], "any", true, true, false, 31)) {
            // line 32
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a></li> 
                <li><a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a></li>
                ";
        }
        // line 35
        echo "
                ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 36), "userIdentifier", [], "any", true, true, false, 36)) {
            // line 37
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
                ";
        }
        // line 39
        echo "            
                </ul>     
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
            </nav>
            </div>
        </div>
    </div>
</header>

</html>";
        
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
        return array (  125 => 39,  119 => 37,  117 => 36,  114 => 35,  109 => 33,  104 => 32,  102 => 31,  96 => 28,  92 => 27,  88 => 26,  81 => 22,  77 => 21,  73 => 20,  68 => 19,  62 => 17,  60 => 16,  43 => 1,);
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
                <a href=\"/\" class=\"logo\">
                    <img src=\"/assets/images/Beaupeyrat.png\" alt=\"nom\" width=\"90px\" height=\"90px\">
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class=\"nav\">
                {% if app.user.userIdentifier is defined %}
                    <li><a class=\"user\">Bonjour {{ app.User.name }}</a></li>
                {% endif %}
                <li><a href=\"{{ path('app_base_c') }}\" class=\"active\">Home</a></li>
                <li><a href=\"{{ path('app_stage') }}\">stage</a></li>                                                                      
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
                <li><a href=\"{{ path('app_login') }}\">Login</a></li> 
                <li><a href=\"{{ path('app_register') }}\">Register</a></li>
                {% endif %}

                {% if app.user.userIdentifier is defined %}
                <li><a href=\"{{ path('app_logout') }}\">Logout</a></li>
                {% endif %}
            
                </ul>     
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
            </nav>
            </div>
        </div>
    </div>
</header>

</html>", "Nav-bar.html.twig", "/home/symfo/templates/Nav-bar.html.twig");
    }
}
