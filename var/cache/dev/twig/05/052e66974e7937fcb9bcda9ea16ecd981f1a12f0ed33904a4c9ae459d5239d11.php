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

/* home/index.html.twig */
class __TwigTemplate_a6dbb4e7b68cae7d1c9021531c733afa00ae37791241a9c42e1992bc4d6b3c4a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "
    <section id=\"accueil\">
        <div class=\"container\">
            <div class=\"row py-5\">
                <div class=\"color col-5\">
                    <div class=\"row py-3 text-center\">
                        <h5>Qui sommes-nous?</h5>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-3 pt-4\">
                            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/qui-sommes-nous.png"), "html", null, true);
        echo "\" class=\"img-fluid \${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}\" alt=\"\">
                        </div>
                        <div class=\"col-9\">
                            <div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dignissimos esse eius consectetur officiis, quam nemo aliquam ipsa, tenetur tempore possimus
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dignissimos esse eius consectetur officiis, quam nemo aliquam ipsa, tenetur tempore possimus
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-2 text-center arrow\">
                    <div>
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/right-arrow-direction-color.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"arrow\">
                    </div>
                </div>
                <div class=\"color col-5\">
                    <div class=\"row py-3 text-center\">
                        <h5>Ce que nous vous apportons</h5>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-3 pt-4\">
                            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ce-que-nous-vous-apportons.png"), "html", null, true);
        echo "\" class=\"img-fluid \${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}\" alt=\"\">
                        </div>
                        <div class=\"col-9\">
                            <div>
                                <p class=\"\">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dignissimos esse eius consectetur officiis, quam nemo aliquam ipsa, tenetur tempore possimus distinctio sunt tempora nihil dicta et, maiores fuga est?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    ";
        // line 59
        echo "
    <section id=\"metier\">
        <div class=\"container pb-5\">
            <div class=\"row py-5\">
                <h2>Nos métiers</h2>
            </div>
            <div class=\"row\">   
                <div class=\"circle colorBack col-2 text-center py-5\">
                    <h5>Gestion de Projet</h5>
                    <p>MOA/MOE/PMO/PROXY/AGILE</p>
                </div>
                <div class=\"col-2 offset-3 circle colorBack text-center py-5\">
                    <h5>Dev</h5>
                    <p>Python / Java / Javascript / HTML / CSS</p>
                </div>
                <div class=\"col-2 offset-3 circle colorBack text-center py-5\">
                    <h5>Cybersécurité</h5>
                    <p>Architecture / Développement</p>
                </div>
            </div>
            <div class=\"row\">   
                <div class=\"circle col-2 offset-2 colorBack text-center py-5\">
                    <h5>Etudes</h5>
                    <h5>&amp;</h5>
                    <h5>recettes</h5>
                </div>
                <div class=\"col-2 offset-4 circle colorBack text-center py-5\">
                    <h5>Infrastructure</h5>
                    <h5>&amp;</h5>
                    <h5>Exploitation</h5>    
                </div>
            </div>
        </div>
    </section>

    ";
        // line 95
        echo "
    <section id=\"partenaire\">
        <div class=\"container colorBack\">
            <div class=\"container\">
                <div class=\"row py-5 text-center\">
                    <h2>Ils nous font confiance</h2>
                </div>
            </div>
            <div class=\"container\">
                 <div class=\"row pb-5\">
                    <div class=\"col-3\">
                        <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/philiance.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/philiance.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/philiance.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/philiance.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                </div>
                <div class=\"row py-5\">
                    <div class=\"col-3 offset-1\">
                        <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/philiance.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/philiance.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/philiance.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                </div>
            </div>
        </div>   
    </section>

    ";
        // line 134
        echo "
    <section id=\"contact\" class=\"py-5 section-4\">
        <div class=\"container py-5 text-center\">
            <div class=\"row\">
                <div class=\"colorContact col-lg-5 mx-auto pr-4\">
                    <h3 class=\"pb-5 pt-4 font-weight-bold\">Nous contacter</h3>
                    <form>
                        <div class=\"form-group row\">
                            <label for=\"inputText\" class=\"col-sm-2 col-form-label font-weight-bold\">Nom</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"inputText\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputEmail\" class=\"col-sm-2 col-form-label font-weight-bold\">Mail</label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" class=\"form-control\" id=\"inputEmail\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputText1\" class=\"col-sm-2 col-form-label font-weight-bold\">Sujet</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"inputText1\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputTextarea\" class=\"col-sm-2 col-form-label font-weight-bold\">Message</label>
                            <div class=\"col-sm-10\">
                                <textarea class=\"form-control\" id=\"inputTextarea\"></textarea>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"col-sm-12\">
                                <button type=\"submit\" class=\"btn pb-3 text-dark\">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 134,  240 => 126,  234 => 123,  228 => 120,  220 => 115,  214 => 112,  208 => 109,  202 => 106,  189 => 95,  152 => 59,  134 => 43,  122 => 34,  103 => 18,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

    {# ACCUEIL #}

    <section id=\"accueil\">
        <div class=\"container\">
            <div class=\"row py-5\">
                <div class=\"color col-5\">
                    <div class=\"row py-3 text-center\">
                        <h5>Qui sommes-nous?</h5>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-3 pt-4\">
                            <img src=\"{{ asset('img/qui-sommes-nous.png') }}\" class=\"img-fluid \${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}\" alt=\"\">
                        </div>
                        <div class=\"col-9\">
                            <div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dignissimos esse eius consectetur officiis, quam nemo aliquam ipsa, tenetur tempore possimus
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dignissimos esse eius consectetur officiis, quam nemo aliquam ipsa, tenetur tempore possimus
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-2 text-center arrow\">
                    <div>
                    <img src=\"{{ asset('img/right-arrow-direction-color.png') }}\" class=\"img-fluid\" alt=\"arrow\">
                    </div>
                </div>
                <div class=\"color col-5\">
                    <div class=\"row py-3 text-center\">
                        <h5>Ce que nous vous apportons</h5>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-3 pt-4\">
                            <img src=\"{{ asset('img/ce-que-nous-vous-apportons.png') }}\" class=\"img-fluid \${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}\" alt=\"\">
                        </div>
                        <div class=\"col-9\">
                            <div>
                                <p class=\"\">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dignissimos esse eius consectetur officiis, quam nemo aliquam ipsa, tenetur tempore possimus distinctio sunt tempora nihil dicta et, maiores fuga est?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {# NOS METIERS#}

    <section id=\"metier\">
        <div class=\"container pb-5\">
            <div class=\"row py-5\">
                <h2>Nos métiers</h2>
            </div>
            <div class=\"row\">   
                <div class=\"circle colorBack col-2 text-center py-5\">
                    <h5>Gestion de Projet</h5>
                    <p>MOA/MOE/PMO/PROXY/AGILE</p>
                </div>
                <div class=\"col-2 offset-3 circle colorBack text-center py-5\">
                    <h5>Dev</h5>
                    <p>Python / Java / Javascript / HTML / CSS</p>
                </div>
                <div class=\"col-2 offset-3 circle colorBack text-center py-5\">
                    <h5>Cybersécurité</h5>
                    <p>Architecture / Développement</p>
                </div>
            </div>
            <div class=\"row\">   
                <div class=\"circle col-2 offset-2 colorBack text-center py-5\">
                    <h5>Etudes</h5>
                    <h5>&amp;</h5>
                    <h5>recettes</h5>
                </div>
                <div class=\"col-2 offset-4 circle colorBack text-center py-5\">
                    <h5>Infrastructure</h5>
                    <h5>&amp;</h5>
                    <h5>Exploitation</h5>    
                </div>
            </div>
        </div>
    </section>

    {# NOS METIERS#}

    <section id=\"partenaire\">
        <div class=\"container colorBack\">
            <div class=\"container\">
                <div class=\"row py-5 text-center\">
                    <h2>Ils nous font confiance</h2>
                </div>
            </div>
            <div class=\"container\">
                 <div class=\"row pb-5\">
                    <div class=\"col-3\">
                        <img src=\"{{ asset('img/philiance.png') }}\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"{{ asset('img/philiance.png') }}\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"{{ asset('img/philiance.png') }}\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"{{ asset('img/philiance.png') }}\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                </div>
                <div class=\"row py-5\">
                    <div class=\"col-3 offset-1\">
                        <img src=\"{{ asset('img/philiance.png') }}\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"{{ asset('img/philiance.png') }}\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"{{ asset('img/philiance.png') }}\" class=\"img-fluid\" alt=\"logo philiance\">
                    </div>
                </div>
            </div>
        </div>   
    </section>

    {# CONTACT #}

    <section id=\"contact\" class=\"py-5 section-4\">
        <div class=\"container py-5 text-center\">
            <div class=\"row\">
                <div class=\"colorContact col-lg-5 mx-auto pr-4\">
                    <h3 class=\"pb-5 pt-4 font-weight-bold\">Nous contacter</h3>
                    <form>
                        <div class=\"form-group row\">
                            <label for=\"inputText\" class=\"col-sm-2 col-form-label font-weight-bold\">Nom</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"inputText\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputEmail\" class=\"col-sm-2 col-form-label font-weight-bold\">Mail</label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" class=\"form-control\" id=\"inputEmail\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputText1\" class=\"col-sm-2 col-form-label font-weight-bold\">Sujet</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"inputText1\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputTextarea\" class=\"col-sm-2 col-form-label font-weight-bold\">Message</label>
                            <div class=\"col-sm-10\">
                                <textarea class=\"form-control\" id=\"inputTextarea\"></textarea>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"col-sm-12\">
                                <button type=\"submit\" class=\"btn pb-3 text-dark\">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    </section>

{% endblock %}
", "home/index.html.twig", "/Applications/MAMP/htdocs/talentis-bis/templates/home/index.html.twig");
    }
}
