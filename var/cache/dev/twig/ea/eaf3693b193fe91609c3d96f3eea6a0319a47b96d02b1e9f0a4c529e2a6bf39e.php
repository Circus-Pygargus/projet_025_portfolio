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

/* security/login.html.twig */
class __TwigTemplate_e820d441bb973270f49d75906bc51898ffe94a7d5247a2c1d52177b51134c4e8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'navbarContent' => [$this, 'block_navbarContent'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 9
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("myBurgerConnectCss");
        echo "
    ";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("myLoginCss");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarContent"));

        // line 16
        echo "<div class=\"my-burger-navbar-item\">
    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil<span class=\"my-underline\"></span></a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
<main class=\"container-fluid\">
    <div class=\"conatiner\">
        <div class=\"row\">
            <div class=\"d-flex justify-content-center col-12\">
                <h1 class=\"h1 my-5 font-weight-normal\">Se connecter</h1>
            </div>
        </div>
        <div class=\"row d-flex justify-content-sm-center\">            
            <div class=\"col-xs-10 col-sm-10 col-md-8 col-lg-6 col-xl-4 border border-secondary rounded rounded-lg p-4\">
                <form method=\"post\">
                    ";
        // line 35
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageKey", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageData", [], "any", false, false, false, 36), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 38
        echo "                
                    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "                        <div class=\"checkbox mb-3\">Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "username", [], "any", false, false, false, 40), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                    ";
        }
        // line 42
        echo "                    <div class=\"form-group\">
                        <input type=\"text\" name=\"username\" id=\"inputUsername\" required>
                        <span class=\"highlight\"></span>
                        <span class=\"bar\"></span>
                        <label for=\"inputUsername\">Pseudo</label>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" required>
                        <span class=\"highlight\"></span>
                        <span class=\"bar\"></span>
                        <label for=\"inputPassword\">Mot de passe</label>
                    </div>
                    ";
        // line 54
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate")) {
            // line 55
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
                    <!-- <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\" /> -->
                    ";
        }
        // line 58
        echo "                
                    ";
        // line 69
        echo "                
                    <button class=\"btn btn-lg btn-primary\" type=\"submit\" aria-pressed=\"true\">
                        Envoyer
                    </button>
                </form>
            </div> 
        </div>
    </div>
</main>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 69,  176 => 58,  171 => 56,  166 => 55,  164 => 54,  150 => 42,  142 => 40,  140 => 39,  137 => 38,  131 => 36,  129 => 35,  116 => 24,  109 => 23,  99 => 17,  96 => 16,  89 => 15,  80 => 10,  75 => 9,  68 => 8,  55 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Log in!{% endblock %}



{% block css %}
    {{ encore_entry_link_tags('myBurgerConnectCss')}}
    {{ encore_entry_link_tags('myLoginCss') }}
{% endblock %}



{% block navbarContent %}
<div class=\"my-burger-navbar-item\">
    <a href=\"{{ path('app_home')}}\">Accueil<span class=\"my-underline\"></span></a>
</div>
{% endblock %}



{% block body %}

<main class=\"container-fluid\">
    <div class=\"conatiner\">
        <div class=\"row\">
            <div class=\"d-flex justify-content-center col-12\">
                <h1 class=\"h1 my-5 font-weight-normal\">Se connecter</h1>
            </div>
        </div>
        <div class=\"row d-flex justify-content-sm-center\">            
            <div class=\"col-xs-10 col-sm-10 col-md-8 col-lg-6 col-xl-4 border border-secondary rounded rounded-lg p-4\">
                <form method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                
                    {% if app.user %}
                        <div class=\"checkbox mb-3\">Bienvenue {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
                    {% endif %}
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"username\" id=\"inputUsername\" required>
                        <span class=\"highlight\"></span>
                        <span class=\"bar\"></span>
                        <label for=\"inputUsername\">Pseudo</label>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" required>
                        <span class=\"highlight\"></span>
                        <span class=\"bar\"></span>
                        <label for=\"inputPassword\">Mot de passe</label>
                    </div>
                    {% if csrf_token('authenticate') %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                    <!-- <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" /> -->
                    {% endif %}
                
                    {#
                        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                        See https://symfony.com/doc/current/security/remember_me.html
                
                        <div class=\"checkbox mb-3\">
                            <label>
                                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                            </label>
                        </div>
                    #}
                
                    <button class=\"btn btn-lg btn-primary\" type=\"submit\" aria-pressed=\"true\">
                        Envoyer
                    </button>
                </form>
            </div> 
        </div>
    </div>
</main>



{% endblock %}
", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
