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
class __TwigTemplate_29e83b98b3892349a68580f3d2206d148cae490df982519b28e5979d553ff6cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>

    ";
        // line 15
        echo "   
    <nav class=\"navbar navbar-expand-md navbar-light\" id=\"mainNav\">
        <div class=\"container-fluid\">
            <a id=\"home\" class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo-Talentis.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
            <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menu\" aria-controls=\"menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class=\"navbar-collapse collapse justify-content-end\" id=\"menu\">
                <ul class=\"navbar-nav\">
                    ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link nav1\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
                        </li>
                    ";
        } else {
            // line 31
            echo "                        <li class=\"nav-item\">
                            <p> Bienvenue ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "prenom", [], "any", false, false, false, 32), "html", null, true);
            echo "
                        </li>
                    ";
        }
        // line 35
        echo "
                    ";
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link nav1\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                        </li>
                    ";
        } else {
            // line 41
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link nav1\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">déconnexion</a>
                        </li>
                    ";
        }
        // line 45
        echo "                </ul>
            </div>
        </div>
    </nav>

    ";
        // line 51
        echo "
    <header class=\"header sticky-top\">
        <div class=\"menu\">
            <div class=\"container\">
                <nav id=\"navbar-example2\" class=\"nav nav-pills flex-column flex-sm-row\">
                    <a class=\"flex-sm-fill text-sm-center nav-link active\" href=\"#home\">Accueil</a>
                    <a class=\"flex-sm-fill text-sm-center nav-link\" href=\"#metier\">Nos métiers SI</a>
                    <a class=\"flex-sm-fill text-sm-center nav-link\" href=\"#partenaire\">Nos partenaires</a>
                    <a class=\"flex-sm-fill text-sm-center nav-link\" href=\"#contact\">Contact</a>
                </nav>
            </div> 
        </div>
    </header>

    <body data-spy=\"scroll\" data-target=\"#navbar-example2\" data-offset=\"60\">

        ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "    </body>
    <footer>
        <div class=\"container pb-2 text-center\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <a href=\"#\" class=\"text-dark text-decoration-none\">t@lentis - </a>
                    <a href=\"#\" class=\"text-dark text-decoration-none\"> Mentions légales -</a>
                    <a href=\"#\" class=\"text-dark text-decoration-none\"> CGU</a>
                    
                    <a href=\"#home\">
                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-caret-up-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z\"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src=\"https://code.jquery.com/jquery-3.5.1.js\" integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "base";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 68
        echo "

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  258 => 72,  246 => 68,  236 => 67,  218 => 11,  199 => 5,  167 => 73,  165 => 72,  162 => 71,  160 => 67,  142 => 51,  135 => 45,  129 => 42,  126 => 41,  120 => 38,  117 => 37,  115 => 36,  112 => 35,  106 => 32,  103 => 31,  97 => 28,  94 => 27,  92 => 26,  79 => 18,  74 => 15,  70 => 12,  68 => 11,  64 => 10,  60 => 9,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}base{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <script src=\"{{ asset('js/app.js') }}\"></script>
        {% block stylesheets %}{% endblock %}
    </head>

    {# 1 NAVBAR #}
   
    <nav class=\"navbar navbar-expand-md navbar-light\" id=\"mainNav\">
        <div class=\"container-fluid\">
            <a id=\"home\" class=\"navbar-brand\" href=\"{{ path('home') }}\"><img src=\"{{ asset('img/Logo-Talentis.png') }}\" alt=\"logo\"></a>
            <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menu\" aria-controls=\"menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class=\"navbar-collapse collapse justify-content-end\" id=\"menu\">
                <ul class=\"navbar-nav\">
                    {% if not app.user %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link nav1\" href=\"{{ path('app_register') }}\">Inscription</a>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <p> Bienvenue {{app.user.prenom}}
                        </li>
                    {% endif %}

                    {% if not app.user %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link nav1\" href=\"{{ path('app_login') }}\">Connexion</a>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link nav1\" href=\"{{ path('app_logout') }}\">déconnexion</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>

    {# 2 NAVBAR #}

    <header class=\"header sticky-top\">
        <div class=\"menu\">
            <div class=\"container\">
                <nav id=\"navbar-example2\" class=\"nav nav-pills flex-column flex-sm-row\">
                    <a class=\"flex-sm-fill text-sm-center nav-link active\" href=\"#home\">Accueil</a>
                    <a class=\"flex-sm-fill text-sm-center nav-link\" href=\"#metier\">Nos métiers SI</a>
                    <a class=\"flex-sm-fill text-sm-center nav-link\" href=\"#partenaire\">Nos partenaires</a>
                    <a class=\"flex-sm-fill text-sm-center nav-link\" href=\"#contact\">Contact</a>
                </nav>
            </div> 
        </div>
    </header>

    <body data-spy=\"scroll\" data-target=\"#navbar-example2\" data-offset=\"60\">

        {% block body %}


        {% endblock %}

        {% block javascripts %}{% endblock %}
    </body>
    <footer>
        <div class=\"container pb-2 text-center\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <a href=\"#\" class=\"text-dark text-decoration-none\">t@lentis - </a>
                    <a href=\"#\" class=\"text-dark text-decoration-none\"> Mentions légales -</a>
                    <a href=\"#\" class=\"text-dark text-decoration-none\"> CGU</a>
                    
                    <a href=\"#home\">
                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-caret-up-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z\"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src=\"https://code.jquery.com/jquery-3.5.1.js\" integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/talentis-bis/templates/base.html.twig");
    }
}
