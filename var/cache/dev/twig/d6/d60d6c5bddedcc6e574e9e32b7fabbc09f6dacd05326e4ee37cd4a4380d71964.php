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

/* stock/_form.html.twig */
class __TwigTemplate_a3599e087a5af35ef44d1692f4f68b346ed065b9dc571391577a58a1007a6a94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/_form.html.twig"));

        // line 1
        echo "
<div class=\"modal-header\">
  ";
        // line 3
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 3, $this->source); })())) {
            echo " 
    <h5 class=\"modal-title\" id=\"staticBackdropLiveLabel\">Information Medicament</h5>
  ";
        } else {
            // line 5
            echo " 
    <h5 class=\"modal-title\" id=\"staticBackdropLiveLabel2\">Nouveau Medicament</h5>
   ";
        }
        // line 7
        echo " 
  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
";
        // line 12
        if ((isset($context["RemovalMode"]) || array_key_exists("RemovalMode", $context) ? $context["RemovalMode"] : (function () { throw new RuntimeError('Variable "RemovalMode" does not exist.', 12, $this->source); })())) {
            echo " 
   ";
            // line 13
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Removalform"]) || array_key_exists("Removalform", $context) ? $context["Removalform"] : (function () { throw new RuntimeError('Variable "Removalform" does not exist.', 13, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_removal", ["id" => 2]), "method" => "POST"]);
            echo "
  ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["Removalform"]) || array_key_exists("Removalform", $context) ? $context["Removalform"] : (function () { throw new RuntimeError('Variable "Removalform" does not exist.', 14, $this->source); })()), 'row');
            echo "
  ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Removalform"]) || array_key_exists("Removalform", $context) ? $context["Removalform"] : (function () { throw new RuntimeError('Variable "Removalform" does not exist.', 15, $this->source); })()), 'form_end');
            echo "
";
        } else {
            // line 16
            echo "  
  ";
            // line 17
            if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 17, $this->source); })())) {
                echo "  
    ";
                // line 18
                $context["style"] = "d-none";
                echo "  
    <div class=\"form-controls\">
      ";
                // line 20
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 20, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["medic"]) || array_key_exists("medic", $context) ? $context["medic"] : (function () { throw new RuntimeError('Variable "medic" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "method" => "POST"]);
                echo "
  ";
            } else {
                // line 21
                echo "  
    ";
                // line 22
                $context["style"] = "";
                echo "  
    <div class=\"form-controls\">
      ";
                // line 24
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 24, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_add"), "method" => "POST"]);
                echo "
  ";
            }
            // line 26
            echo "      <div class=\"modal-body\">
        <div class=\"form-error\">
          ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 28, $this->source); })()), 'errors');
            echo "
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 33, $this->source); })()), "dci", [], "any", false, false, false, 33), 'label');
            echo "    
              ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 34, $this->source); })()), "dci", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
            <div class=\"col-lg-6\">
             <div class=\"form-group\">
              ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 39, $this->source); })()), "code", [], "any", false, false, false, 39), 'label');
            echo "    
              ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 40, $this->source); })()), "code", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 47, $this->source); })()), "forme", [], "any", false, false, false, 47), 'label');
            echo "    
              ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 48, $this->source); })()), "forme", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
          
           <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 54, $this->source); })()), "categorie", [], "any", false, false, false, 54), 'label');
            echo "    
              ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 55, $this->source); })()), "categorie", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 62, $this->source); })()), "min", [], "any", false, false, false, 62), 'label');
            echo "    
              ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 63, $this->source); })()), "min", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 68, $this->source); })()), "max", [], "any", false, false, false, 68), 'label');
            echo "    
              ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 69, $this->source); })()), "max", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
         
        </div>
        <div class=\"row ";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 74, $this->source); })()), "html", null, true);
            echo "\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 77, $this->source); })()), "stock", [], "any", false, false, false, 77), 'label');
            echo "    
              ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 78, $this->source); })()), "stock", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 83, $this->source); })()), "avoir", [], "any", false, false, false, 83), 'label');
            echo "    
              ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 84, $this->source); })()), "avoir", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
              <div class=\"form-group\">
                ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 91, $this->source); })()), "pa", [], "any", false, false, false, 91), 'label');
            echo "    
                ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 92, $this->source); })()), "pa", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
              </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 97, $this->source); })()), "pv", [], "any", false, false, false, 97), 'label');
            echo "    
              ";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 98, $this->source); })()), "pv", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 105, $this->source); })()), "dosage", [], "any", false, false, false, 105), 'label');
            echo "    
              ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 106, $this->source); })()), "dosage", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 111, $this->source); })()), "peremption", [], "any", false, false, false, 111), 'label');
            echo "    
              ";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 112, $this->source); })()), "peremption", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
        </div>
        <div class=\"row d-none\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 119
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 119, $this->source); })()), "etat", [], "any", false, false, false, 119), 'label');
            echo "    
              ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 120, $this->source); })()), "etat", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
        </div>
        
      </div>
      <div class=\"modal-footer\">
        ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 127, $this->source); })()), "_token", [], "any", false, false, false, 127), 'widget');
            echo " 
        ";
            // line 128
            if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 128, $this->source); })())) {
                // line 129
                echo "          <button type=\"submit\" class=\" btn btn-primary\">Enregistrer </button>
        ";
            } else {
                // line 130
                echo "  
          <button  class=\"btn btn-primary float-left\" type=\"submit\">Ajouter</button>
        ";
            }
            // line 133
            echo "        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
      </div>
    </div>  
";
            // line 136
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 136, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
";
        }
        // line 138
        echo "


       ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "stock/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 138,  319 => 136,  314 => 133,  309 => 130,  305 => 129,  303 => 128,  299 => 127,  289 => 120,  285 => 119,  275 => 112,  271 => 111,  263 => 106,  259 => 105,  249 => 98,  245 => 97,  237 => 92,  233 => 91,  223 => 84,  219 => 83,  211 => 78,  207 => 77,  201 => 74,  193 => 69,  189 => 68,  181 => 63,  177 => 62,  167 => 55,  163 => 54,  154 => 48,  150 => 47,  140 => 40,  136 => 39,  128 => 34,  124 => 33,  116 => 28,  112 => 26,  107 => 24,  102 => 22,  99 => 21,  94 => 20,  89 => 18,  85 => 17,  82 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  58 => 7,  53 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"modal-header\">
  {% if editMode %} 
    <h5 class=\"modal-title\" id=\"staticBackdropLiveLabel\">Information Medicament</h5>
  {% else %} 
    <h5 class=\"modal-title\" id=\"staticBackdropLiveLabel2\">Nouveau Medicament</h5>
   {% endif %} 
  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
{% if RemovalMode %} 
   {{ form_start(Removalform, {'action': path('stock_removal',{id: 2}), 'method': 'POST'}) }}
  {{form_row(Removalform)}}
  {{form_end(Removalform)}}
{%  else %}  
  {% if editMode %}  
    {% set style='d-none' %}  
    <div class=\"form-controls\">
      {{ form_start(Medicform, {'action': path('stock_edit',{id : medic.id}), 'method': 'POST'}) }}
  {% else %}  
    {% set style='' %}  
    <div class=\"form-controls\">
      {{ form_start(Medicform, {'action': path('stock_add'), 'method': 'POST'}) }}
  {% endif %}
      <div class=\"modal-body\">
        <div class=\"form-error\">
          {{ form_errors(Medicform) }}
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.dci) }}    
              {{ form_widget(Medicform.dci,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
            <div class=\"col-lg-6\">
             <div class=\"form-group\">
              {{ form_label(Medicform.code) }}    
              {{ form_widget(Medicform.code,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.forme) }}    
              {{ form_widget(Medicform.forme,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
          
           <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.categorie) }}    
              {{ form_widget(Medicform.categorie,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.min) }}    
              {{ form_widget(Medicform.min,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.max) }}    
              {{ form_widget(Medicform.max,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
         
        </div>
        <div class=\"row {{ style }}\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.stock) }}    
              {{ form_widget(Medicform.stock,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.avoir) }}    
              {{ form_widget(Medicform.avoir,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
              <div class=\"form-group\">
                {{ form_label(Medicform.pa) }}    
                {{ form_widget(Medicform.pa,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
              </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.pv) }}    
              {{ form_widget(Medicform.pv,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.dosage) }}    
              {{ form_widget(Medicform.dosage,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.peremption) }}    
              {{ form_widget(Medicform.peremption,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
        </div>
        <div class=\"row d-none\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.etat) }}    
              {{ form_widget(Medicform.etat,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
        </div>
        
      </div>
      <div class=\"modal-footer\">
        {{ form_widget(Medicform._token) }} 
        {% if editMode %}
          <button type=\"submit\" class=\" btn btn-primary\">Enregistrer </button>
        {% else %}  
          <button  class=\"btn btn-primary float-left\" type=\"submit\">Ajouter</button>
        {% endif %}
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
      </div>
    </div>  
{{ form_end(Medicform,{'render_rest' :false}) }}
{% endif %}



       ", "stock/_form.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\stock\\_form.html.twig");
    }
}
