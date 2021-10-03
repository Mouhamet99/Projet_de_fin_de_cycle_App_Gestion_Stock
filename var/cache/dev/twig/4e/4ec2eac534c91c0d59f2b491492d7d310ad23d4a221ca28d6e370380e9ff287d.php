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

/* fournisseur/providerForm.html.twig */
class __TwigTemplate_f731fc7947066a5c771f9ff8a222543e03a5c86b0f8f956120b60a47bf52d600 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/providerForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/providerForm.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/providerForm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<hr>
<div class=\"row\">
  <div class=\"col-5 offset-3\">
  <hr>
    <div class=\"card   card-outline px-3\">
    <hr>
      <div class=\"form-controls\">
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
          <div class=\"form-error\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 24, $this->source); })()), 'errors');
        echo "
          </div>
          <div class=\"form-group px-3 \">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 27, $this->source); })()), "codeFourn", [], "any", false, false, false, 27), 'label');
        echo "    
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 28, $this->source); })()), "codeFourn", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
        echo "
          </div>
          <div class=\"form-group px-3 \">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 31, $this->source); })()), "nomFourn", [], "any", false, false, false, 31), 'label');
        echo "    
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 32, $this->source); })()), "nomFourn", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
        echo "
          </div>
          <div class=\"form-group px-3\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 35, $this->source); })()), "company", [], "any", false, false, false, 35), 'label');
        echo "    
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 36, $this->source); })()), "company", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
        echo "
          </div>
          <div class=\"form-group px-3\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 39, $this->source); })()), "telFourn", [], "any", false, false, false, 39), 'label');
        echo "    
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 40, $this->source); })()), "telFourn", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
        echo "
          </div>
          <div class=\"form-group px-3\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 43, $this->source); })()), "mailFourn", [], "any", false, false, false, 43), 'label');
        echo "    
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 44, $this->source); })()), "mailFourn", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
        echo "
          </div>
          <div class=\"form-group px-3\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 47, $this->source); })()), "adresseFourn", [], "any", false, false, false, 47), 'label');
        echo "    
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 48, $this->source); })()), "adresseFourn", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
        echo "
          </div>
          <div class=\"form-group px-3\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 51, $this->source); })()), "_token", [], "any", false, false, false, 51), 'widget');
        echo " 
           
            ";
        // line 53
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "            <button type=\"submit\" class=\"btn btn-success\">
            Enregistrer les modifications
            </button>
            ";
        } else {
            // line 58
            echo "            <button type=\"submit\" class=\"btn btn-warning\">
            Ajouter fournisseur
            </button>
            ";
        }
        // line 62
        echo "          </div>
        
           
          ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["providerForm"]) || array_key_exists("providerForm", $context) ? $context["providerForm"] : (function () { throw new RuntimeError('Variable "providerForm" does not exist.', 65, $this->source); })()), 'form_end', ["render_rest" => false]);
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
        return "fournisseur/providerForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 65,  167 => 62,  161 => 58,  155 => 54,  153 => 53,  148 => 51,  142 => 48,  138 => 47,  132 => 44,  128 => 43,  122 => 40,  118 => 39,  112 => 36,  108 => 35,  102 => 32,  98 => 31,  92 => 28,  88 => 27,  82 => 24,  77 => 22,  68 => 15,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{# {{ form_start(providerForm) }}
{{ form_row(providerForm) }}
{% if editMode %}
<button type=\"submit\" class=\"btn btn-success\">
Enregistrer les modifications
</button>
{% else %}
<button type=\"submit\" class=\"btn btn-warning\">
Ajouter fournisseur
</button>
{% endif %}
{{ form_end(providerForm) }} #}
<hr>
<div class=\"row\">
  <div class=\"col-5 offset-3\">
  <hr>
    <div class=\"card   card-outline px-3\">
    <hr>
      <div class=\"form-controls\">
        {{ form_start(providerForm) }}
          <div class=\"form-error\">
            {{ form_errors(providerForm) }}
          </div>
          <div class=\"form-group px-3 \">
            {{ form_label(providerForm.codeFourn) }}    
            {{ form_widget(providerForm.codeFourn,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3 \">
            {{ form_label(providerForm.nomFourn) }}    
            {{ form_widget(providerForm.nomFourn,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3\">
            {{ form_label(providerForm.company) }}    
            {{ form_widget(providerForm.company,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3\">
            {{ form_label(providerForm.telFourn) }}    
            {{ form_widget(providerForm.telFourn,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3\">
            {{ form_label(providerForm.mailFourn) }}    
            {{ form_widget(providerForm.mailFourn,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3\">
            {{ form_label(providerForm.adresseFourn) }}    
            {{ form_widget(providerForm.adresseFourn,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3\">
            {{ form_widget(providerForm._token) }} 
           
            {% if editMode %}
            <button type=\"submit\" class=\"btn btn-success\">
            Enregistrer les modifications
            </button>
            {% else %}
            <button type=\"submit\" class=\"btn btn-warning\">
            Ajouter fournisseur
            </button>
            {% endif %}
          </div>
        
           
          {{ form_end(providerForm,{'render_rest' :false}) }}
     
      </div>  
    </div>
  </div>
</div>
{% endblock  %} 
", "fournisseur/providerForm.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\fournisseur\\providerForm.html.twig");
    }
}
