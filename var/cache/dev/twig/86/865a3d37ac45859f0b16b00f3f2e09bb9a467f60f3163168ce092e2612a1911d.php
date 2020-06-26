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
class __TwigTemplate_b4bd48ce951ff0425b43131ba496ad1d96bc2677e1d71ef874ccb129b30cba21 extends \Twig\Template
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
        <section id=\"about\" class=\"container-fluid\" style=\"height:800px; background-color:#fff;\">
            <h2>À propos</h2>
        </section>


        <!-- Projects section -->
        <section id=\"projects\" class=\"container-fluid text-light py-5\">
            <div class=\"container py-5\">
                <h2 class=\"mb-5\">Projets</h2>
                <div class=\"row\">
                    <!-- using class card-deck to have horizontal space between cards -->
                    <div class=\"card-deck\">
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 75
            echo "                            <!-- project card -->
                            <div class=\"col-sm-10 col-md-4 mx-auto\">
                                <div class=\"card border-light text-center my-3\" data-toggle=\"modal\" data-target=\"#modal_";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nameID", [], "any", false, false, false, 77), "html", null, true);
            echo "\">
                                    <img class=\"card-img-top\" src=\"";
            // line 78
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/projects/") . twig_get_attribute($this->env, $this->source, $context["project"], "image", [], "any", false, false, false, 78)), "html", null, true);
            echo "\" alt=\"Capture d\\'écran du projet ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 78), "html", null, true);
            echo "\">
                                    <div class=\"card-body bg-dark\">
                                    <p class=\"card-text text-light\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "</p>
                                    </div>
                                </div>                               
                            </div> 

                            <!-- associated modal -->
                            <div class=\"modal fade text-dark\" id=\"modal_";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nameID", [], "any", false, false, false, 86), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nameID", [], "any", false, false, false, 86), "html", null, true);
            echo "_label\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"modal_";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nameID", [], "any", false, false, false, 90), "html", null, true);
            echo "_label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 90), "html", null, true);
            echo "</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <img class=\"card-img-top\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/projects/") . twig_get_attribute($this->env, $this->source, $context["project"], "image", [], "any", false, false, false, 96)), "html", null, true);
            echo "\" alt=\"Capture d\\'écran du projet ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 96), "html", null, true);
            echo "\">
                                            <p class=\"mt-3\"><b>Description :</b> ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 97), "html", null, true);
            echo "</p>
                                            ";
            // line 98
            if (twig_get_attribute($this->env, $this->source, $context["project"], "nota_bene", [], "any", true, true, false, 98)) {
                // line 99
                echo "                                            <p><b>N.B. :</b> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nota_bene", [], "any", false, false, false, 99), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 101
            echo "                                            <p><b>Techos utilisées :</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "technos", [], "any", false, false, false, 101), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            ";
            // line 104
            if ((twig_get_attribute($this->env, $this->source, $context["project"], "link", [], "any", false, false, false, 104) != "#")) {
                // line 105
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "link", [], "any", false, false, false, 105), "html", null, true);
                echo "\" target=\"_blank\" class=\"mr-3 text-primary\">Voir le site</a>
                                            ";
            }
            // line 107
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "gitLink", [], "any", false, false, false, 107), "html", null, true);
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
        // line 113
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
        // line 136
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_start');
        echo "
                            <div class=\"form-group\">
                                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "name", [], "any", false, false, false, 138), 'label');
        echo "
                                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "name", [], "any", false, false, false, 139), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "email", [], "any", false, false, false, 142), 'row');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "message", [], "any", false, false, false, 145), 'row');
        echo "
                            </div>
                        ";
        // line 147
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'form_end');
        echo "    
                    </div>
                </div>
            </div>            
        </section>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 156
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 157
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
        return array (  321 => 157,  314 => 156,  300 => 147,  295 => 145,  289 => 142,  283 => 139,  279 => 138,  274 => 136,  249 => 113,  236 => 107,  230 => 105,  228 => 104,  221 => 101,  215 => 99,  213 => 98,  209 => 97,  203 => 96,  192 => 90,  183 => 86,  174 => 80,  167 => 78,  163 => 77,  159 => 75,  155 => 74,  124 => 45,  108 => 29,  104 => 18,  99 => 15,  92 => 14,  83 => 10,  79 => 9,  74 => 8,  67 => 7,  55 => 3,  38 => 1,);
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
        <section id=\"about\" class=\"container-fluid\" style=\"height:800px; background-color:#fff;\">
            <h2>À propos</h2>
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
                            <div class=\"col-sm-10 col-md-4 mx-auto\">
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
