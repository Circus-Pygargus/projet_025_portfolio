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

/* base.html.twig */
class __TwigTemplate_8e3c253d101fb0ef2fc5a05dda5b9d85b32a312ce17869877294f297bc883180 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
            'navbarContent' => [$this, 'block_navbarContent'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

    <head>
        <meta charset=\"UTF-8\">
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"ie=edge\" http-equiv=\"X-UA-Compatible\">

        <!-- Meta description -->
        <meta content=\"Portfolio\" name=\"description\">
        <meta content=\"Richard Meuret\" name=\"author\">
        <meta content=\"portofolio Richard Meuret\" name=\"keywords\">

        <!-- META Twitter -->
        <meta content=\"Twitter\" name=\"twitter:title\">
        <meta content=\"compte twitter\" name=\"twitter:description\">
        <meta content=\"https://twitter.com/\" name=\"twitter:url\">
        <meta content=\"\" name=\"twitter:image:src\">

        <!-- META FACEBOOK -->
        <meta content=\"Facebook\" property=\"og:Facebook\">
        <meta content=\"page Facebook\" property=\"og:type\">
        <meta content=\"https://www.facebook.com/\" property=\"og:url\">
        <meta content=\"\" property=\"og:image\">

        <!-- META INSTAGRAM -->
        <meta content=\"Instagram\" property=\"og:Instagram\">
        <meta content=\"compte Instagram\" property=\"og:type\">
        <meta content=\"https://www.instagram.com/\" property=\"og:url\">
        <meta content=\"\" property=\"og:image\">

        <!--LIEN VERS CSS et FONTAWESOME-->
        <!-- add boostrap css -->
        <!--  not needed because included in scss -->
        <!--<link rel=\"stylesheet\" href=\"build/scss/bootstrap.min.css\"> -->
        <!-- custom css -->
        ";
        // line 37
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("mainCss");
        echo "
        ";
        // line 38
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("backToTopButtonCss");
        echo "
        <!-- for other particular css -->
        ";
        // line 40
        $this->displayBlock('css', $context, $blocks);
        // line 41
        echo "        


        <!-- font was in ttf, we can find it in public/build/fonts -->
        <!-- <link crossorigin=\"anonymous\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" rel=\"stylesheet\"> 
        -->

        <!-- FAVICON -->
        
        <!-- <link href=\"\" rel=\"icon\" type=\"image/png\"/> -->
        <title>
            ";
        // line 52
        $this->displayBlock('title', $context, $blocks);
        // line 54
        echo "        </title>
    </head>
    <body>

        <!-- my burger  -->
        <div id=\"my-burger-btn-div\">
            <div id=\"my-burger-btn\">
                <div id=\"my-burger-bar\"></div>
            </div> 
        </div>
        <div id=\"my-burger-navbar\">
            ";
        // line 65
        $this->displayBlock('navbarContent', $context, $blocks);
        // line 93
        echo "        </div>
        

        <!-- scroll to top button -->
        <button id=\"backToTopButton\" title=\"Haut de page\"><span>^</span></button>




        ";
        // line 102
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "        
        
        <!-- Scripts -->
        ";
        // line 107
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("mainJs");
        echo "
        ";
        // line 108
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("myBurgerJs");
        echo "
        ";
        // line 109
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("backToTopButtonJS");
        echo "

        ";
        // line 111
        $this->displayBlock('script', $context, $blocks);
        // line 113
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 41
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 53
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarContent"));

        // line 66
        echo "            <div class=\"my-burger-navbar-item\">
                <a href=\"#home\">Accueil<span class=\"my-underline\"></span></a>
            </div>
            <div class=\"my-burger-navbar-item\">
                <a href=\"#about\">À propos<span class=\"my-underline\"></span></a>
            </div>
            <div class=\"my-burger-navbar-item\">
                <a href=\"#projects\">Projets<span class=\"my-underline\"></span></a>
            </div>
            <div class=\"my-burger-navbar-item\">
                <a href=\"#contact\">Contact<span class=\"my-underline\"></span></a>
            </div>

            <!--  <hr>  -->
            <!-- customizable options buttons -->
            <!-- main color -->
<!--             <div>
                   <input type=\"color\" name=\"mainColorPicker\" id=\"main-color-picker_input\">
                    <label for=\"mainColorPicker\">  <input type=\"color\" name=\"mainColorPicker\" id=\"main-color-picker_input\" >Modif le couleur</label>
            </div> 
-->
<!--            <hr>
            <div class=\"my-burger-navbar-item\">
                <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion<span class=\"my-underline\"></span></a>
            </div>
-->
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 103
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 112
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 112,  251 => 111,  244 => 103,  237 => 102,  226 => 89,  201 => 66,  194 => 65,  187 => 53,  180 => 52,  173 => 41,  166 => 40,  157 => 113,  155 => 111,  150 => 109,  146 => 108,  142 => 107,  137 => 104,  135 => 102,  124 => 93,  122 => 65,  109 => 54,  107 => 52,  94 => 41,  92 => 40,  87 => 38,  83 => 37,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

    <head>
        <meta charset=\"UTF-8\">
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"ie=edge\" http-equiv=\"X-UA-Compatible\">

        <!-- Meta description -->
        <meta content=\"Portfolio\" name=\"description\">
        <meta content=\"Richard Meuret\" name=\"author\">
        <meta content=\"portofolio Richard Meuret\" name=\"keywords\">

        <!-- META Twitter -->
        <meta content=\"Twitter\" name=\"twitter:title\">
        <meta content=\"compte twitter\" name=\"twitter:description\">
        <meta content=\"https://twitter.com/\" name=\"twitter:url\">
        <meta content=\"\" name=\"twitter:image:src\">

        <!-- META FACEBOOK -->
        <meta content=\"Facebook\" property=\"og:Facebook\">
        <meta content=\"page Facebook\" property=\"og:type\">
        <meta content=\"https://www.facebook.com/\" property=\"og:url\">
        <meta content=\"\" property=\"og:image\">

        <!-- META INSTAGRAM -->
        <meta content=\"Instagram\" property=\"og:Instagram\">
        <meta content=\"compte Instagram\" property=\"og:type\">
        <meta content=\"https://www.instagram.com/\" property=\"og:url\">
        <meta content=\"\" property=\"og:image\">

        <!--LIEN VERS CSS et FONTAWESOME-->
        <!-- add boostrap css -->
        <!--  not needed because included in scss -->
        <!--<link rel=\"stylesheet\" href=\"build/scss/bootstrap.min.css\"> -->
        <!-- custom css -->
        {{ encore_entry_link_tags('mainCss') }}
        {{ encore_entry_link_tags('backToTopButtonCss') }}
        <!-- for other particular css -->
        {% block css %}
        {% endblock %}        


        <!-- font was in ttf, we can find it in public/build/fonts -->
        <!-- <link crossorigin=\"anonymous\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" rel=\"stylesheet\"> 
        -->

        <!-- FAVICON -->
        
        <!-- <link href=\"\" rel=\"icon\" type=\"image/png\"/> -->
        <title>
            {% block title %}
            {% endblock %}
        </title>
    </head>
    <body>

        <!-- my burger  -->
        <div id=\"my-burger-btn-div\">
            <div id=\"my-burger-btn\">
                <div id=\"my-burger-bar\"></div>
            </div> 
        </div>
        <div id=\"my-burger-navbar\">
            {% block navbarContent %}
            <div class=\"my-burger-navbar-item\">
                <a href=\"#home\">Accueil<span class=\"my-underline\"></span></a>
            </div>
            <div class=\"my-burger-navbar-item\">
                <a href=\"#about\">À propos<span class=\"my-underline\"></span></a>
            </div>
            <div class=\"my-burger-navbar-item\">
                <a href=\"#projects\">Projets<span class=\"my-underline\"></span></a>
            </div>
            <div class=\"my-burger-navbar-item\">
                <a href=\"#contact\">Contact<span class=\"my-underline\"></span></a>
            </div>

            <!--  <hr>  -->
            <!-- customizable options buttons -->
            <!-- main color -->
<!--             <div>
                   <input type=\"color\" name=\"mainColorPicker\" id=\"main-color-picker_input\">
                    <label for=\"mainColorPicker\">  <input type=\"color\" name=\"mainColorPicker\" id=\"main-color-picker_input\" >Modif le couleur</label>
            </div> 
-->
<!--            <hr>
            <div class=\"my-burger-navbar-item\">
                <a href=\"{{ path('app_login')}}\">Connexion<span class=\"my-underline\"></span></a>
            </div>
-->
            {% endblock %}
        </div>
        

        <!-- scroll to top button -->
        <button id=\"backToTopButton\" title=\"Haut de page\"><span>^</span></button>




        {% block body %}
        {% endblock %}
        
        
        <!-- Scripts -->
        {{ encore_entry_script_tags('mainJs') }}
        {{ encore_entry_script_tags('myBurgerJs') }}
        {{ encore_entry_script_tags('backToTopButtonJS') }}

        {% block script %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
