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
class __TwigTemplate_8738ea1df534588a2cd84bfdf32c6931f7b032c4b41f64a4968a3258066bc0e4 extends Template
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
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'label', ["label" => "Mail *"]);
        echo "
                        </div>
                        <div class=\"col-md-9\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "societe", [], "any", false, false, false, 47), 'label', ["label" => "Société *"]);
        echo "
                        </div>
                        <div class=\"col-md-9\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "societe", [], "any", false, false, false, 50), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "fonction", [], "any", false, false, false, 55), 'label');
        echo "
                        </div>
                        <div class=\"col-md-9\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "fonction", [], "any", false, false, false, 58), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-3\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "adresseSociete", [], "any", false, false, false, 63), 'label');
        echo "
                        </div>
                        <div class=\"col-md-9\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "adresseSociete", [], "any", false, false, false, 66), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-5 pt-5\">
                    <div class=\"form-group row\">
                        <div class=\"col-4\">
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "plainPassword", [], "any", false, false, false, 73), "first", [], "any", false, false, false, 73), 'label', ["label" => "Mot de passe *"]);
        echo "
                        </div>
                        <div class=\"col-md-7\">
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "plainPassword", [], "any", false, false, false, 76), "first", [], "any", false, false, false, 76), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-4\">
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "plainPassword", [], "any", false, false, false, 81), "second", [], "any", false, false, false, 81), 'label', ["label" => "Confirmation de mot de passe *"]);
        echo "
                        </div>
                        <div class=\"col-md-7\">
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "plainPassword", [], "any", false, false, false, 84), "second", [], "any", false, false, false, 84), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"container\">
                        <div class=\"row text-center\">
                            <div class=\"col-12 py-2 font-weight-bold\">Abonnement</div>
                            <div class=\"col-5 offset-4 pb-3\">";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "abonnement", [], "any", false, false, false, 90), 'widget');
        echo "</div> 
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <P class=\"titleAbo font-weight-bold\">* Mensuel : 8€</P>
                                <ul class=\"listAbo\">
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                </ul>
                            </div>
                            <div class=\"col-6\">
                                <P class=\"titleAbo font-weight-bold\">Annuel : 80€</P>
                                <ul>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"validAbo\">";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), 'form_end');
        echo "</div>
                        </div>
                        
                        
                    </div>
                    
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
        return array (  265 => 113,  239 => 90,  230 => 84,  224 => 81,  216 => 76,  210 => 73,  200 => 66,  194 => 63,  186 => 58,  180 => 55,  172 => 50,  166 => 47,  158 => 42,  152 => 39,  144 => 34,  138 => 31,  130 => 26,  124 => 23,  114 => 16,  110 => 15,  102 => 9,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    <div class=\"container\">
                        <div class=\"row text-center\">
                            <div class=\"col-12 py-2 font-weight-bold\">Abonnement</div>
                            <div class=\"col-5 offset-4 pb-3\">{{ form_widget(registrationForm.abonnement) }}</div> 
                        </div>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <P class=\"titleAbo font-weight-bold\">* Mensuel : 8€</P>
                                <ul class=\"listAbo\">
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                </ul>
                            </div>
                            <div class=\"col-6\">
                                <P class=\"titleAbo font-weight-bold\">Annuel : 80€</P>
                                <ul>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"validAbo\">{{ form_end(registrationForm) }}</div>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
        </div> 
    </div>  
{% endblock %}
", "registration/register.html.twig", "/Applications/MAMP/htdocs/talentis-bis/templates/registration/register.html.twig");
    }
}
