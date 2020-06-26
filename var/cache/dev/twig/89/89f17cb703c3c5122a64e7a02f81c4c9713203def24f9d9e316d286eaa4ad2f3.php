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

/* home.html.twig */
class __TwigTemplate_f6f7d8dc26c1074c2df9836cd838a867c7c9c8156130f1373d3d66f3b7b5fd7e extends \Twig\Template
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
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("connexionBtnCss");
        echo "
    ";
        // line 9
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("myBurgerHomeCss");
        echo "
    ";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("homeCss");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <!-- my connexion button -->   
<!--    <div id=\"my-connextion-btn\">  
        <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">   
            ";
        // line 29
        echo "            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"512px\"
\t height=\"512px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
<g id=\"Calque_1\">
\t<circle fill=\"none\" stroke=\"#000000\" stroke-width=\"30\" stroke-miterlimit=\"10\" cx=\"255.925\" cy=\"172.803\" r=\"80.636\"/>
</g>
<g id=\"Calque_2\">
\t<path fill=\"none\" stroke=\"#000000\" stroke-width=\"30\" stroke-miterlimit=\"10\" d=\"M256,270c-71.797,0-130,58-130,130h260
\t\tC386,328,327.797,270,256,270z\"/>
</g>
</svg>
        </a>
    </div>   
-->

";
        // line 45
        echo "    <main>

        <!-- kind of header section -->
        <section id=\"home\" class=\"container-fluid\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"d-flex flex-column justify-content-center mx-auto col-10\">
                        <!-- <div class=\"my-auto\"> -->
                        <h1 class=\"text-center\">Richard MEURET</h1>
                        <h2 class=\"text-center\">DEVELOPPEUR WEB</h2>
                        <!-- </div> -->
                </div>
            </div>
        </section>


        <!-- about section -->
        <section id=\"about\" class=\"container-fluid bg-light\">
            <div class=\"container py-5\">
                <h2 class=\"mb-3\">À propos</h2>
                <div class=\"row mb-5\">
                    <div class=\"d-flex text-dark mx-auto mt-5 col-10\">
                        Après 15 ans de peinture en bâtiment, j'ai décidé de vivre de ma passion pour le code.<br>
                        À présent développeur web, j'ai à cœur de créer des applications web fonctionnelles, responsives et sécurisées.
                    </div>
                </div>
            </div>
        </section>


        <!-- Projects section -->
        <section id=\"projects\" class=\"container-fluid text-light py-5\">
            <div class=\"container py-5\">
                <h2 class=\"mb-5\">Projets</h2>
                <div class=\"row\">
                    <!-- using class card-deck to have horizontal space between cards -->
                    <div class=\"card-deck\">
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 83
            echo "                            <!-- project card -->
                            <div class=\"col-sm-10 col-md-6 col-lg-5 mx-auto my-1\">
                                <div class=\"card border-light text-center my-3\" data-toggle=\"modal\" data-target=\"#modal_";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nameID", [], "any", false, false, false, 85), "html", null, true);
            echo "\">
                                    <img class=\"card-img-top\" src=\"";
            // line 86
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/projects/") . twig_get_attribute($this->env, $this->source, $context["project"], "image", [], "any", false, false, false, 86)), "html", null, true);
            echo "\" alt=\"Capture d\\'écran du projet ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 86), "html", null, true);
            echo "\">
                                    <div class=\"card-body bg-dark\">
                                        <p class=\"card-text text-light\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 88), "html", null, true);
            echo "</p>
                                    </div>
                                </div>                               
                            </div> 
                            <!-- associated modal -->
                            <div class=\"modal fade text-dark\" id=\"modal_";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nameID", [], "any", false, false, false, 93), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nameID", [], "any", false, false, false, 93), "html", null, true);
            echo "_label\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"modal_";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nameID", [], "any", false, false, false, 97), "html", null, true);
            echo "_label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 97), "html", null, true);
            echo "</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <img class=\"card-img-top\" src=\"";
            // line 103
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/projects/") . twig_get_attribute($this->env, $this->source, $context["project"], "image", [], "any", false, false, false, 103)), "html", null, true);
            echo "\" alt=\"Capture d\\'écran du projet ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo "\">
                                            <p class=\"mt-3\"><b>Description :</b> ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 104), "html", null, true);
            echo "</p>
                                            ";
            // line 105
            if (twig_get_attribute($this->env, $this->source, $context["project"], "nota_bene", [], "any", true, true, false, 105)) {
                // line 106
                echo "                                            <p><b>N.B. :</b> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nota_bene", [], "any", false, false, false, 106), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 108
            echo "                                            <p><b>Techos utilisées :</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "technos", [], "any", false, false, false, 108), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            ";
            // line 111
            if ((twig_get_attribute($this->env, $this->source, $context["project"], "link", [], "any", false, false, false, 111) != "#")) {
                // line 112
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "link", [], "any", false, false, false, 112), "html", null, true);
                echo "\" target=\"_blank\" class=\"mr-3 text-primary\">Voir le site</a>
                                            ";
            }
            // line 114
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "gitLink", [], "any", false, false, false, 114), "html", null, true);
            echo "\" target=\"_blank\" class=\"text-primary\">Voir sur GitHub</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                    </div>
                </div>
            </div>
        </section>


        <!-- Contact section -->
        <section id=\"contact\" class=\"container-fluid bg-light\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- <div class=\"d-flex justify-content-center col-12\"> -->
                        <div class=\"col-12\">
                        <h2 class=\"my-5 text-dark\">Contact</h2>
                        </div>
                    <!-- </div> -->
                </div>
                <div class=\"row\">
                    <div class=\"d-flex justify-content-center col-12\">
                        <p id=\"email-sent\" class=\"mb-2 text-light\">this is a false text</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-10 mx-auto mb-5\">
                        ";
        // line 143
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_start');
        echo "
                            <div class=\"form-group\">
                                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "name", [], "any", false, false, false, 145), 'label');
        echo "
                                ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "name", [], "any", false, false, false, 146), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "email", [], "any", false, false, false, 149), 'row');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "message", [], "any", false, false, false, 152), 'row');
        echo "
                            </div>
                        ";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), 'form_end');
        echo "    
                    </div>
                </div>
            </div>            
        </section>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 163
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 164
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("contactJs");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 164,  321 => 163,  307 => 154,  302 => 152,  296 => 149,  290 => 146,  286 => 145,  281 => 143,  256 => 120,  243 => 114,  237 => 112,  235 => 111,  228 => 108,  222 => 106,  220 => 105,  216 => 104,  210 => 103,  199 => 97,  190 => 93,  182 => 88,  175 => 86,  171 => 85,  167 => 83,  163 => 82,  124 => 45,  108 => 29,  104 => 18,  99 => 15,  92 => 14,  83 => 10,  79 => 9,  74 => 8,  67 => 7,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
{% endblock %}


{% block css %}
    {{ encore_entry_link_tags('connexionBtnCss') }}
    {{ encore_entry_link_tags('myBurgerHomeCss')}}
    {{ encore_entry_link_tags('homeCss') }}
{% endblock %}


{% block body %}

    <!-- my connexion button -->   
<!--    <div id=\"my-connextion-btn\">  
        <a href=\"{{ path('app_login')}}\">   
            {# <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"512px\"
            height=\"512px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
                <g id=\"Calque_1\">
                    <circle fill=\"none\" stroke=\"#FFFFFF\" stroke-width=\"30\" stroke-miterlimit=\"10\" cx=\"255.925\" cy=\"172.803\" r=\"80.636\"/>
                </g>
                <g id=\"Calque_2\">
                    <path fill=\"none\" stroke=\"#FFFFFF\" stroke-width=\"30\" stroke-miterlimit=\"10\" d=\"M255.5,257.5c-71.797,0-130,58.203-130,130h260
                        C385.5,315.703,327.297,257.5,255.5,257.5z\"/>
                </g>
            </svg> #}
            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"512px\"
\t height=\"512px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
<g id=\"Calque_1\">
\t<circle fill=\"none\" stroke=\"#000000\" stroke-width=\"30\" stroke-miterlimit=\"10\" cx=\"255.925\" cy=\"172.803\" r=\"80.636\"/>
</g>
<g id=\"Calque_2\">
\t<path fill=\"none\" stroke=\"#000000\" stroke-width=\"30\" stroke-miterlimit=\"10\" d=\"M256,270c-71.797,0-130,58-130,130h260
\t\tC386,328,327.797,270,256,270z\"/>
</g>
</svg>
        </a>
    </div>   
-->

{# <div><p class=\"text-primary\">kfgjkfgjgfkj,gj;</p></div>
    <a href=\"{{ path('connect') }}\">Se connecter</a> #}
    <main>

        <!-- kind of header section -->
        <section id=\"home\" class=\"container-fluid\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"d-flex flex-column justify-content-center mx-auto col-10\">
                        <!-- <div class=\"my-auto\"> -->
                        <h1 class=\"text-center\">Richard MEURET</h1>
                        <h2 class=\"text-center\">DEVELOPPEUR WEB</h2>
                        <!-- </div> -->
                </div>
            </div>
        </section>


        <!-- about section -->
        <section id=\"about\" class=\"container-fluid bg-light\">
            <div class=\"container py-5\">
                <h2 class=\"mb-3\">À propos</h2>
                <div class=\"row mb-5\">
                    <div class=\"d-flex text-dark mx-auto mt-5 col-10\">
                        Après 15 ans de peinture en bâtiment, j'ai décidé de vivre de ma passion pour le code.<br>
                        À présent développeur web, j'ai à cœur de créer des applications web fonctionnelles, responsives et sécurisées.
                    </div>
                </div>
            </div>
        </section>


        <!-- Projects section -->
        <section id=\"projects\" class=\"container-fluid text-light py-5\">
            <div class=\"container py-5\">
                <h2 class=\"mb-5\">Projets</h2>
                <div class=\"row\">
                    <!-- using class card-deck to have horizontal space between cards -->
                    <div class=\"card-deck\">
                        {% for project in projects %}
                            <!-- project card -->
                            <div class=\"col-sm-10 col-md-6 col-lg-5 mx-auto my-1\">
                                <div class=\"card border-light text-center my-3\" data-toggle=\"modal\" data-target=\"#modal_{{ project.nameID }}\">
                                    <img class=\"card-img-top\" src=\"{{ asset('build/img/projects/') ~ project.image }}\" alt=\"Capture d\\'écran du projet {{ project.name }}\">
                                    <div class=\"card-body bg-dark\">
                                        <p class=\"card-text text-light\">{{ project.name }}</p>
                                    </div>
                                </div>                               
                            </div> 
                            <!-- associated modal -->
                            <div class=\"modal fade text-dark\" id=\"modal_{{ project.nameID }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_{{ project.nameID }}_label\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"modal_{{ project.nameID }}_label\">{{ project.name }}</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <img class=\"card-img-top\" src=\"{{ asset('build/img/projects/') ~ project.image }}\" alt=\"Capture d\\'écran du projet {{ project.name }}\">
                                            <p class=\"mt-3\"><b>Description :</b> {{ project.description }}</p>
                                            {% if project.nota_bene is defined %}
                                            <p><b>N.B. :</b> {{ project.nota_bene }}</p>
                                            {% endif %}
                                            <p><b>Techos utilisées :</b> {{ project.technos }}</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            {% if project.link != '#' %}
                                                <a href=\"{{ project.link }}\" target=\"_blank\" class=\"mr-3 text-primary\">Voir le site</a>
                                            {% endif %}
                                            <a href=\"{{ project.gitLink }}\" target=\"_blank\" class=\"text-primary\">Voir sur GitHub</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact section -->
        <section id=\"contact\" class=\"container-fluid bg-light\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- <div class=\"d-flex justify-content-center col-12\"> -->
                        <div class=\"col-12\">
                        <h2 class=\"my-5 text-dark\">Contact</h2>
                        </div>
                    <!-- </div> -->
                </div>
                <div class=\"row\">
                    <div class=\"d-flex justify-content-center col-12\">
                        <p id=\"email-sent\" class=\"mb-2 text-light\">this is a false text</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-10 mx-auto mb-5\">
                        {{ form_start(form) }}
                            <div class=\"form-group\">
                                {{ form_label(form.name) }}
                                {{ form_widget(form.name) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.email) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.message) }}
                            </div>
                        {{ form_end(form) }}    
                    </div>
                </div>
            </div>            
        </section>
    </main>
{% endblock %}


{% block script %}
    {{ encore_entry_script_tags('contactJs') }}
{% endblock %}", "home.html.twig", "/var/www/html/templates/home.html.twig");
    }
}
