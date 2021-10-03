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

/* bon/newBon.html.twig */
class __TwigTemplate_aeff07db446d62eadfa226a7deb8f4a52a084386ee4831e4cf2b3b2a3f7b0103 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bon/newBon.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bon/newBon.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bon/newBon.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Bon de commande";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 6, $this->source); })()), 'form_start');
        echo "     
<div class=\"container-fluid\">
    <div class=\"\">
        <div class=\"col-9 col-push-2 offset-2\">
            <h4 class=\"text-centered\">
            Etablissement de bon de commande
            </h4>
            <div class=\"card card-primary card-outline\"> 
                <form class=\"form-horizontal\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                        <label for=\"bon_fournisseurBdc\" class=\"required\">Fournisseur</label>
                                    </div>
                                    <div class=\"col-sm-7\">
                                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 23, $this->source); })()), "fournisseurBdc", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => " form-control"]]);
        echo "
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class=\"col-6 push-col-1\">
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 33, $this->source); })()), "numero", [], "any", false, false, false, 33), 'label');
        echo "
                                    </div>
                                    <div class=\"col-sm-7\">
                                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 36, $this->source); })()), "numero", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "mr-auto form-control"]]);
        echo "
                                    </div>
                                </div>                                
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 41, $this->source); })()), "note", [], "any", false, false, false, 41), 'label');
        echo "
                                    </div>
                                    <div class=\"col-sm-7\">
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 44, $this->source); })()), "note", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "mr-auto form-control"]]);
        echo "
                                    </div>
                                </div>
                    
                    
                            </div>
                                                
                        </div>
                    </div>
                </form>  
                <div class=\"card-tools text-right border-bottom\">
                    <a href=\"#\" id=\"add-new-item\" class=\"btn btn-sm rounded-0 rounded-top btn-outline-dark mx-2\">Nouvelle ligne</a>         
                </div>
                <div class=\"card-body table-responsive \">
                    <table id=\"facture\" class=\" table bg-secondary table-sm centered text-nowrap \"
                        data-prototype-dci=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 59, $this->source); })()), "medicItems", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "prototype", [], "any", false, false, false, 59), "ItemMedicament", [], "any", false, false, false, 59), 'widget'));
        echo "\"
                        data-prototype-qtt=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 60, $this->source); })()), "medicItems", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "prototype", [], "any", false, false, false, 60), "quantite", [], "any", false, false, false, 60), 'widget'));
        echo "\"
                        data-prototype-pu=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 61, $this->source); })()), "medicItems", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "prototype", [], "any", false, false, false, 61), "prixUnitaire", [], "any", false, false, false, 61), 'widget'));
        echo "\"
                        data-prototype-totalBdc=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 62, $this->source); })()), "medicItems", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "prototype", [], "any", false, false, false, 62), "totalBdc", [], "any", false, false, false, 62), 'widget'));
        echo "\"
                      
                       data-index=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 64, $this->source); })()), "medicItems", [], "any", false, false, false, 64)), "html", null, true);
        echo "\">
                        <thead class=\"thead-dark\">
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Designation</th>
                                <th scope=\"col\">Quantité</th>
                                <th scope=\"col\">Prix unitaire</th>
                                <th scope=\"col\">Sous-total</th>
                                <th scope=\"col\">actions</th>
                        </thead>
                        <tbody>  
                            <tr class=\"td_cache\" style=\"display:none;\">
                                <td class=\"d-flex align-middle justify-content-around \">
                          ";
        // line 77
        echo "                                    <a href=\"#\" id=\"remove-item\" class=\" btn btn-sm btn-outline-dark\" title=\"Supprimer element\"><span class=\"fa fa-trash\"></span></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
                <div class=\"card-footer\">
                     <div class=\" col-3 offset-9\">
                        <p class=\"font-weight-bold text-right\" id=\"ttc\">Total TTC: <span>00.000</span></p>
                     </div>
                   ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 88, $this->source); })()), "_token", [], "any", false, false, false, 88), 'widget');
        echo "
                    <button type=\"submit\" id=\"save-bdc\" class=\"btn btn-success\">Valider</button>
                    <button type=\"reset\" class=\"btn btn-default float-right\">Cancel</button>
                </div>                
            </div>
        </div>
    </div>
   
</div>
";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_bon"]) || array_key_exists("form_bon", $context) ? $context["form_bon"] : (function () { throw new RuntimeError('Variable "form_bon" does not exist.', 97, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bon/newBon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 97,  207 => 88,  194 => 77,  179 => 64,  174 => 62,  170 => 61,  166 => 60,  162 => 59,  144 => 44,  138 => 41,  130 => 36,  124 => 33,  111 => 23,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Bon de commande{% endblock %}

{% block body %}

{{ form_start(form_bon) }}     
<div class=\"container-fluid\">
    <div class=\"\">
        <div class=\"col-9 col-push-2 offset-2\">
            <h4 class=\"text-centered\">
            Etablissement de bon de commande
            </h4>
            <div class=\"card card-primary card-outline\"> 
                <form class=\"form-horizontal\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                        <label for=\"bon_fournisseurBdc\" class=\"required\">Fournisseur</label>
                                    </div>
                                    <div class=\"col-sm-7\">
                                        {{ form_widget(form_bon.fournisseurBdc,{'attr' : {'class':' form-control'}})  }}
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class=\"col-6 push-col-1\">
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                        {{ form_label(form_bon.numero) }}
                                    </div>
                                    <div class=\"col-sm-7\">
                                        {{ form_widget(form_bon.numero,{'attr' : {'class':'mr-auto form-control'}})  }}
                                    </div>
                                </div>                                
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                        {{ form_label(form_bon.note) }}
                                    </div>
                                    <div class=\"col-sm-7\">
                                    {{ form_widget(form_bon.note,{'attr' : {'class':'mr-auto form-control'}})  }}
                                    </div>
                                </div>
                    
                    
                            </div>
                                                
                        </div>
                    </div>
                </form>  
                <div class=\"card-tools text-right border-bottom\">
                    <a href=\"#\" id=\"add-new-item\" class=\"btn btn-sm rounded-0 rounded-top btn-outline-dark mx-2\">Nouvelle ligne</a>         
                </div>
                <div class=\"card-body table-responsive \">
                    <table id=\"facture\" class=\" table bg-secondary table-sm centered text-nowrap \"
                        data-prototype-dci=\"{{  form_widget(form_bon.medicItems.vars.prototype.ItemMedicament)|e }}\"
                        data-prototype-qtt=\"{{  form_widget(form_bon.medicItems.vars.prototype.quantite)|e }}\"
                        data-prototype-pu=\"{{  form_widget(form_bon.medicItems.vars.prototype.prixUnitaire)|e }}\"
                        data-prototype-totalBdc=\"{{  form_widget(form_bon.medicItems.vars.prototype.totalBdc)|e }}\"
                      
                       data-index=\"{{ form_bon.medicItems|length }}\">
                        <thead class=\"thead-dark\">
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Designation</th>
                                <th scope=\"col\">Quantité</th>
                                <th scope=\"col\">Prix unitaire</th>
                                <th scope=\"col\">Sous-total</th>
                                <th scope=\"col\">actions</th>
                        </thead>
                        <tbody>  
                            <tr class=\"td_cache\" style=\"display:none;\">
                                <td class=\"d-flex align-middle justify-content-around \">
                          {#           <a href=\"#\" id=\"add-new-item\" class=\" btn btn-sm btn-outline-dark\" title=\"Duplicate element\"><span class=\"fa fa-plus\"></span></a> #}
                                    <a href=\"#\" id=\"remove-item\" class=\" btn btn-sm btn-outline-dark\" title=\"Supprimer element\"><span class=\"fa fa-trash\"></span></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
                <div class=\"card-footer\">
                     <div class=\" col-3 offset-9\">
                        <p class=\"font-weight-bold text-right\" id=\"ttc\">Total TTC: <span>00.000</span></p>
                     </div>
                   {{ form_widget(form_bon._token) }}
                    <button type=\"submit\" id=\"save-bdc\" class=\"btn btn-success\">Valider</button>
                    <button type=\"reset\" class=\"btn btn-default float-right\">Cancel</button>
                </div>                
            </div>
        </div>
    </div>
   
</div>
{{ form_end(form_bon,{'render_rest': false}) }}
{% endblock  %}

", "bon/newBon.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\bon\\newBon.html.twig");
    }
}
