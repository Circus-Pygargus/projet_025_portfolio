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
class __TwigTemplate_5d1f0f2f82e2d8a3716c639e988255f62fa5711e3a8c76d60029104374598b9c extends \Twig\Template
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
            'content' => [$this, 'block_content'],
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
        <!-- for other particular css -->
        ";
        // line 39
        $this->displayBlock('css', $context, $blocks);
        // line 40
        echo "        

        <!-- font was in ttf, we can find it in public/build/fonts -->
        <!-- <link crossorigin=\"anonymous\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" rel=\"stylesheet\"> 
        -->

        <!-- FAVICON -->
        
        <!-- <link href=\"\" rel=\"icon\" type=\"image/png\"/> -->
        <title>
            ";
        // line 50
        $this->displayBlock('title', $context, $blocks);
        // line 52
        echo "        </title>
    </head>
    <body>
        <!-- <div id=\"my-burger\"> -->
            <div id=\"my-burger-btn-div\">
                <div id=\"my-burger-btn\">
                    <div id=\"my-burger-bar\"></div>
                </div> 
            </div>
            <div id=\"my-burger-navbar\">
                ";
        // line 62
        $this->displayBlock('navbarContent', $context, $blocks);
        // line 79
        echo "            </div>
        <!-- </div> -->
            <!-- burger from web
                <svg class=\"ham hamRotate ham1\" viewBox=\"0 0 100 100\" width=\"80\" onclick=\"this.classList.toggle('active')\">
                    <path
                          class=\"line top\"
                          d=\"m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40\" />
                    <path
                          class=\"line middle\"
                          d=\"m 30,50 h 40\" />
                    <path
                          class=\"line bottom\"
                          d=\"m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40\" />
                </svg>
            -->
        ";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "        
        
        <!-- Scripts -->
        ";
        // line 99
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("mainJs");
        echo "
        ";
        // line 100
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("myBurgerJs");
        echo "

        ";
        // line 102
        $this->displayBlock('script', $context, $blocks);
        // line 104
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 40
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 51
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbarContent"));

        // line 63
        echo "                <div class=\"my-burger-navbar-item\">
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
                <div class=\"my-burger-navbar-item\">
                    <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect");
        echo "\">Connexion<span class=\"my-underline\"></span></a>
                </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 95
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 103
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
        return array (  243 => 103,  236 => 102,  229 => 95,  222 => 94,  212 => 76,  197 => 63,  190 => 62,  183 => 51,  176 => 50,  169 => 40,  162 => 39,  153 => 104,  151 => 102,  146 => 100,  142 => 99,  137 => 96,  135 => 94,  118 => 79,  116 => 62,  104 => 52,  102 => 50,  90 => 40,  88 => 39,  83 => 37,  45 => 1,);
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
        <!-- <div id=\"my-burger\"> -->
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
                <div class=\"my-burger-navbar-item\">
                    <a href=\"{{ path('connect')}}\">Connexion<span class=\"my-underline\"></span></a>
                </div>
                {% endblock %}
            </div>
        <!-- </div> -->
            <!-- burger from web
                <svg class=\"ham hamRotate ham1\" viewBox=\"0 0 100 100\" width=\"80\" onclick=\"this.classList.toggle('active')\">
                    <path
                          class=\"line top\"
                          d=\"m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40\" />
                    <path
                          class=\"line middle\"
                          d=\"m 30,50 h 40\" />
                    <path
                          class=\"line bottom\"
                          d=\"m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40\" />
                </svg>
            -->
        {% block content %}
        {% endblock %}
        
        
        <!-- Scripts -->
        {{ encore_entry_script_tags('mainJs') }}
        {{ encore_entry_script_tags('myBurgerJs')}}

        {% block script %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
