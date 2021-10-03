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

/* stock/_addForm.html.twig */
class __TwigTemplate_9a6fd054209cd19f90642dad14e8d79abd3701f74eb31e3b3666d4fc9e0f5614 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/_addForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/_addForm.html.twig"));

        // line 1
        echo "
<div class=\"modal-header\">
 
    <h5 class=\"modal-title\" id=\"staticBackdropLiveLabel2\">Nouveau Medicament</h5>
  
  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
";
        // line 10
        if ((isset($context["RemovalMode"]) || array_key_exists("RemovalMode", $context) ? $context["RemovalMode"] : (function () { throw new RuntimeError('Variable "RemovalMode" does not exist.', 10, $this->source); })())) {
            echo " 
   ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Removalform"]) || array_key_exists("Removalform", $context) ? $context["Removalform"] : (function () { throw new RuntimeError('Variable "Removalform" does not exist.', 11, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_removal", ["id" => 2]), "method" => "POST"]);
            echo "
  ";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["Removalform"]) || array_key_exists("Removalform", $context) ? $context["Removalform"] : (function () { throw new RuntimeError('Variable "Removalform" does not exist.', 12, $this->source); })()), 'row');
            echo "
  ";
            // line 13
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Removalform"]) || array_key_exists("Removalform", $context) ? $context["Removalform"] : (function () { throw new RuntimeError('Variable "Removalform" does not exist.', 13, $this->source); })()), 'form_end');
            echo " 
";
        } else {
            // line 14
            echo "  
    <div class=\"form-controls\">
     
      ";
            // line 17
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 17, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_add"), "method" => "POST"]);
            echo "

      <div class=\"modal-body\">
        <div class=\"form-error\">
          ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 21, $this->source); })()), 'errors');
            echo "
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 26, $this->source); })()), "dci", [], "any", false, false, false, 26), 'label');
            echo "    
              ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 27, $this->source); })()), "dci", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
            <div class=\"col-lg-6\">
             <div class=\"form-group\">
              ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 32, $this->source); })()), "code", [], "any", false, false, false, 32), 'label');
            echo "    
              ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 33, $this->source); })()), "code", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 40, $this->source); })()), "forme", [], "any", false, false, false, 40), 'label');
            echo "    
              ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 41, $this->source); })()), "forme", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 46, $this->source); })()), "dosage", [], "any", false, false, false, 46), 'label');
            echo "    
              ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 47, $this->source); })()), "dosage", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control border-width-2 is warning"]]);
            echo "
            </div>
          </div> 
        </div>
        <div class=\"row\">
          <div class=\"col-lg-4\">
            <div class=\"form-group\">
              ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 54, $this->source); })()), "min", [], "any", false, false, false, 54), 'label');
            echo "    
              ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 55, $this->source); })()), "min", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control border-width-2 is warning"]]);
            echo "
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"form-group\">
              ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 60, $this->source); })()), "max", [], "any", false, false, false, 60), 'label');
            echo "    
              ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 61, $this->source); })()), "max", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control border-width-2 is warning"]]);
            echo "
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"form-group\">
              ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 66, $this->source); })()), "seuil", [], "any", false, false, false, 66), 'label');
            echo "    
              ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 67, $this->source); })()), "seuil", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control border-width-2 is warning"]]);
            echo "
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
              <div class=\"form-group\">
                ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 74, $this->source); })()), "pa", [], "any", false, false, false, 74), 'label');
            echo "    
                ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 75, $this->source); })()), "pa", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control border-width-2 is warning"]]);
            echo "
              </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 80, $this->source); })()), "pv", [], "any", false, false, false, 80), 'label');
            echo "    
              ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 81, $this->source); })()), "pv", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control border-width-2 is warning"]]);
            echo "
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 88, $this->source); })()), "categorie", [], "any", false, false, false, 88), 'label');
            echo "    
              ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 89, $this->source); })()), "categorie", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
          <div class=\"form-group\">
            ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 93, $this->source); })()), "peremption", [], "any", false, false, false, 93), 'label');
            echo "    
            ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 94, $this->source); })()), "peremption", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control border-width-2 is warning"]]);
            echo "
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              ";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 100, $this->source); })()), "stock", [], "any", false, false, false, 100), 'label');
            echo "    
              ";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 101, $this->source); })()), "stock", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control border-width-2 is-warning"]]);
            echo "
            </div>
          </div>
          <div class=\"form-group\">
            ";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 105, $this->source); })()), "avoir", [], "any", false, false, false, 105), 'label');
            echo "    
            ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 106, $this->source); })()), "avoir", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control border-width-2 is warning"]]);
            echo "
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 111, $this->source); })()), "_token", [], "any", false, false, false, 111), 'widget');
            echo " 
       
          <button  class=\"btn btn-primary float-left\" type=\"submit\">Ajouter</button>
      
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
      </div>
    </div>  
";
            // line 118
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Medicform"]) || array_key_exists("Medicform", $context) ? $context["Medicform"] : (function () { throw new RuntimeError('Variable "Medicform" does not exist.', 118, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
";
        }
        // line 120
        echo "


       ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "stock/_addForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 120,  264 => 118,  254 => 111,  246 => 106,  242 => 105,  235 => 101,  231 => 100,  222 => 94,  218 => 93,  211 => 89,  207 => 88,  197 => 81,  193 => 80,  185 => 75,  181 => 74,  171 => 67,  167 => 66,  159 => 61,  155 => 60,  147 => 55,  143 => 54,  133 => 47,  129 => 46,  121 => 41,  117 => 40,  107 => 33,  103 => 32,  95 => 27,  91 => 26,  83 => 21,  76 => 17,  71 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"modal-header\">
 
    <h5 class=\"modal-title\" id=\"staticBackdropLiveLabel2\">Nouveau Medicament</h5>
  
  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
{% if RemovalMode %} 
   {{ form_start(Removalform, {'action': path('stock_removal',{id: 2}), 'method': 'POST'}) }}
  {{form_row(Removalform)}}
  {{form_end(Removalform)}} 
{%  else %}  
    <div class=\"form-controls\">
     
      {{ form_start(Medicform, {'action': path('stock_add'), 'method': 'POST'}) }}

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
              {{ form_label(Medicform.dosage) }}    
              {{ form_widget(Medicform.dosage,{'attr' : { 'class' :'form-control border-width-2 is warning'}}) }}
            </div>
          </div> 
        </div>
        <div class=\"row\">
          <div class=\"col-lg-4\">
            <div class=\"form-group\">
              {{ form_label(Medicform.min) }}    
              {{ form_widget(Medicform.min,{'attr' : { 'class' :'form-control border-width-2 is warning'}}) }}
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"form-group\">
              {{ form_label(Medicform.max) }}    
              {{ form_widget(Medicform.max,{'attr' : { 'class' :'form-control border-width-2 is warning'}}) }}
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"form-group\">
              {{ form_label(Medicform.seuil) }}    
              {{ form_widget(Medicform.seuil,{'attr' : { 'class' :'form-control border-width-2 is warning'}}) }}
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
              <div class=\"form-group\">
                {{ form_label(Medicform.pa) }}    
                {{ form_widget(Medicform.pa,{'attr' : { 'class' :'form-control border-width-2 is warning'}}) }}
              </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.pv) }}    
              {{ form_widget(Medicform.pv,{'attr' : { 'class' :'form-control border-width-2 is warning'}}) }}
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.categorie) }}    
              {{ form_widget(Medicform.categorie,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
          <div class=\"form-group\">
            {{ form_label(Medicform.peremption) }}    
            {{ form_widget(Medicform.peremption,{'attr' : { 'class' :'form-control border-width-2 is warning'}}) }}
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"form-group\">
              {{ form_label(Medicform.stock) }}    
              {{ form_widget(Medicform.stock,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
            </div>
          </div>
          <div class=\"form-group\">
            {{ form_label(Medicform.avoir) }}    
            {{ form_widget(Medicform.avoir,{'attr' : { 'class' :'form-control border-width-2 is warning'}}) }}
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        {{ form_widget(Medicform._token) }} 
       
          <button  class=\"btn btn-primary float-left\" type=\"submit\">Ajouter</button>
      
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
      </div>
    </div>  
{{ form_end(Medicform,{'render_rest' :false}) }}
{% endif %}



       ", "stock/_addForm.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\stock\\_addForm.html.twig");
    }
}
