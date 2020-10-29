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

/* registration/register.html.twig */
class __TwigTemplate_d69fcf05cc158a8406b0a54ba61860198a18c27a1007b54b79fb4738e75ff008 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Inscription";
        
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 7
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    <div class=\"container py-3\">
        <div class=\"form\">
            <div class=\"row\">
            <div class=\"col-2\">
                <div class=\"photo\">
                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                    <p>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "img", [], "any", false, false, false, 16), 'row');
        echo "</p>
                </div>
            </div>
            <div class=\"col-5\">
                <h4 class=\"text-right pt-3 pr-5\">Inscription</h4>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'label', ["label" => "Nom *"]);
        echo "
                        </div>
                        <div class=\"col-md-9\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'label', ["label" => "Prenom *"]);
        echo "
                        </div>
                        
                        <div class=\"col-md-9\">
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'label', ["label" => "Mail *"]);
        echo "
                        </div>
                        
                        <div class=\"col-md-9\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "societe", [], "any", false, false, false, 49), 'label', ["label" => "Société *"]);
        echo "
                        </div>
                        
                        <div class=\"col-md-9\">
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "societe", [], "any", false, false, false, 53), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "fonction", [], "any", false, false, false, 58), 'label');
        echo "
                        </div>
                        
                        <div class=\"col-md-9\">
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "fonction", [], "any", false, false, false, 62), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "adresseSociete", [], "any", false, false, false, 67), 'label');
        echo "
                        </div>
                        
                        <div class=\"col-md-9\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "adresseSociete", [], "any", false, false, false, 71), 'widget');
        echo "
                        </div>
                    </div>
                </div>

            <div class=\"col-5 pt-5\">
               

                <div class=\"form-group row\">
                        <div class=\"col-4\">
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "plainPassword", [], "any", false, false, false, 81), "first", [], "any", false, false, false, 81), 'label', ["label" => "Mot de passe *"]);
        echo "
                        </div>
                        
                        <div class=\"col-md-7\">
                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "plainPassword", [], "any", false, false, false, 85), "first", [], "any", false, false, false, 85), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-4\">
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "plainPassword", [], "any", false, false, false, 90), "second", [], "any", false, false, false, 90), 'label', ["label" => "Confirmation de mot de passe *"]);
        echo "
                        </div>
                        
                        <div class=\"col-md-7\">
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "plainPassword", [], "any", false, false, false, 94), "second", [], "any", false, false, false, 94), 'widget');
        echo "
                        </div>
                    </div>

                ";
        // line 107
        echo "                <div class=\"container\">
                    <div class=\"row text-center\">
                       <div class=\"col-12\">abonnement</div>
                       <div class=\"col-5 offset-4\">";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "abonnement", [], "any", false, false, false, 110), 'widget');
        echo "</div> 
                    </div>
                </div>
                   

                        ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 115, $this->source); })()), 'form_end');
        echo "

            </div>
        </div>
        
        </div>
        
        
    </div>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 115,  252 => 110,  247 => 107,  240 => 94,  233 => 90,  225 => 85,  218 => 81,  205 => 71,  198 => 67,  190 => 62,  183 => 58,  175 => 53,  168 => 49,  160 => 44,  153 => 40,  145 => 35,  138 => 31,  130 => 26,  124 => 23,  114 => 16,  110 => 15,  102 => 9,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}

    <div class=\"container py-3\">
        <div class=\"form\">
            <div class=\"row\">
            <div class=\"col-2\">
                <div class=\"photo\">
                    {{ form_start(registrationForm) }}
                    <p>{{ form_row(registrationForm.img) }}</p>
                </div>
            </div>
            <div class=\"col-5\">
                <h4 class=\"text-right pt-3 pr-5\">Inscription</h4>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            {{ form_label(registrationForm.nom, 'Nom *') }}
                        </div>
                        <div class=\"col-md-9\">
                            {{ form_widget(registrationForm.nom) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            {{ form_label(registrationForm.prenom, 'Prenom *') }}
                        </div>
                        
                        <div class=\"col-md-9\">
                            {{ form_widget(registrationForm.prenom) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            {{ form_label(registrationForm.email, 'Mail *') }}
                        </div>
                        
                        <div class=\"col-md-9\">
                            {{ form_widget(registrationForm.email) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            {{ form_label(registrationForm.societe, 'Société *') }}
                        </div>
                        
                        <div class=\"col-md-9\">
                            {{ form_widget(registrationForm.societe) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            {{ form_label(registrationForm.fonction) }}
                        </div>
                        
                        <div class=\"col-md-9\">
                            {{ form_widget(registrationForm.fonction) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            {{ form_label(registrationForm.adresseSociete) }}
                        </div>
                        
                        <div class=\"col-md-9\">
                            {{ form_widget(registrationForm.adresseSociete) }}
                        </div>
                    </div>
                </div>

            <div class=\"col-5 pt-5\">
               

                <div class=\"form-group row\">
                        <div class=\"col-4\">
                            {{ form_label(registrationForm.plainPassword.first, 'Mot de passe *') }}
                        </div>
                        
                        <div class=\"col-md-7\">
                            {{ form_widget(registrationForm.plainPassword.first) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-4\">
                            {{ form_label(registrationForm.plainPassword.second, 'Confirmation de mot de passe *') }}
                        </div>
                        
                        <div class=\"col-md-7\">
                            {{ form_widget(registrationForm.plainPassword.second) }}
                        </div>
                    </div>

                {# <div class=\"form-group row\">
                        <div class=\"col-4\">
                            {{ form_label(registrationForm.abonnement, 'Abonnement') }}
                        </div>
                        
                        <div class=\"col-md-7\">
                            {{ form_widget(registrationForm.abonnement) }}
                        </div>
                    </div> #}
                <div class=\"container\">
                    <div class=\"row text-center\">
                       <div class=\"col-12\">abonnement</div>
                       <div class=\"col-5 offset-4\">{{ form_widget(registrationForm.abonnement) }}</div> 
                    </div>
                </div>
                   

                        {{ form_end(registrationForm) }}

            </div>
        </div>
        
        </div>
        
        
    </div>

    
{% endblock %}
", "registration/register.html.twig", "/Applications/MAMP/htdocs/talentis-bis/templates/registration/register.html.twig");
    }
}
