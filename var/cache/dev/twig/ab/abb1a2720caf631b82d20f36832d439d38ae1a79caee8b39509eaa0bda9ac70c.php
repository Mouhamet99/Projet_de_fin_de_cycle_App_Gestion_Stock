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

/* bon/bdl.html.twig */
class __TwigTemplate_e1d5842d7fa7a503b1378c635542d0e7a4d3fc7b0abad33005984c2616dbaece extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bon/bdl.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bon/bdl.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bon/bdl.html.twig", 1);
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

        echo "Facture";
        
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
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
      <br>
      <br>
       
<div class=\"container-fluid\">
    <div class=\"\">
        <div class=\"col-9 col-push-2 offset-2\">
            <div class=\"card card-primary card-outline\"> 
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                         ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 18, $this->source); })()), "facture", [], "any", false, false, false, 18), 'label');
        echo "
                                    </div>
                                    <div class=\"col-sm-7\">
                                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 21, $this->source); })()), "facture", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => " form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                         ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 26, $this->source); })()), "modeDePayement", [], "any", false, false, false, 26), 'label');
        echo "
                                    </div>
                                    <div class=\"col-sm-7\">
                                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 29, $this->source); })()), "modeDePayement", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => " form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                         ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34), 'label', ["label" => "Date"]);
        echo "
                                    </div>
                                    <div class=\"col-sm-7\">
                                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => " form-control"]]);
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
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 48, $this->source); })()), "remise", [], "any", false, false, false, 48), 'label');
        echo "
                                    </div>
                                    <div class=\"col-sm-\">
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 51, $this->source); })()), "remise", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "mr-auto form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                      ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 56, $this->source); })()), "netAPayer", [], "any", false, false, false, 56), 'label');
        echo "
                                    </div>
                                    <div class=\"col-sm-7 td-net-a-payer\">
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 59, $this->source); })()), "netAPayer", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "mr-auto form-control"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                                                
                        </div>
                    </div>
                <div class=\"card-tools text-right border-bottom\">
                    <a href=\"#\" id=\"add-new-item\" class=\"btn btn-sm rounded-0 rounded-top btn-outline-dark mx-2\">Nouvelle ligne</a>    
                    <a href=\"#\" id=\"add-new-item-to-facture\" class=\"btn  btn-success text-white float-right\">Ajouter</a>            
                </div>
                <div class=\"card-body table-responsive \">
                    <table id=\"facture\" class=\" table table-sm  table-hover table-centered table-stripped text-nowrap \" style=\"background-color: #c7c7c7!imortant;\">
                        <thead class=\"thead-dark\">
                                <th scope=\"col\">Designation</th>
                                <th scope=\"col\">Qté</th>
                                <th scope=\"col\">Recu</th>
                                <th scope=\"col\">PU prévu</th>
                                <th scope=\"col\">Prix Achat</th>
                                <th scope=\"col\">Sous-total</th>
                                <th scope=\"col\">Supp</th>
                        </thead>
                        <tbody >  
                            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 82, $this->source); })()), "bdlMedicItems", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["key"] => $context["list"]) {
            // line 83
            echo "                            <tr class=\"tr-item\" id =\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                                <td>";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "ItemMedicament", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "w-auto h-100 align-self-center"]]);
            echo "</td>
                                <td>";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "prixUnitaire", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "h-100 align-self-center"]]);
            echo "</td>
                                <td class=\"td-qtt\">";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "recu", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => " h-100 align-self-center"]]);
            echo "</td>
                                <td>";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "quantite", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "h-100 align-self-center"]]);
            echo "</td>
                                <td class=\"td-price\">";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "prixAchat", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "h-100 align-self-center"]]);
            echo "</td>
                                <td class=\"td-total\">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "total", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "h-100"]]);
            echo "</td>
                                <td class=\"d-flex align-middle justify-content-around \">
                                    <a href=\"#\" id=\"remove-item\" class=\" btn \" title='supprimer une ligne'><i class=\"fa fa-trash\"></i></a>
                                </td>
                                <td style=\"display: none;\">
                                    ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "medicItemBdc", [], "any", false, false, false, 94), 'widget');
            echo "
                                    ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "medicItemBdl", [], "any", false, false, false, 95), 'widget');
            echo "
                                    ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "totalBdc", [], "any", false, false, false, 96), 'widget');
            echo "
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                            <tr class=\"td_cache\" style=\"display:none;\">
                                <td class=\"d-flex align-middle justify-content-around \">
                                    <a href=\"#\" id=\"remove-item\" class=\" btn btn-default\" title=\"Delete element\"><span class=\"fa fa-trash\"></span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
                   
                <div class=\"card-footer\">
                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 110, $this->source); })()), "_token", [], "any", false, false, false, 110), 'widget');
        echo "
                    <button type=\"submit\" id=\"save-bdc\" class=\"btn btn-primary\">Valider</button>
                    <button type=\"reset\" class=\"btn btn-default float-right\">Cancel</button>
                </div>              
            </div>
        </div>
    </div>
   
</div>


    ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_facture"]) || array_key_exists("form_facture", $context) ? $context["form_facture"] : (function () { throw new RuntimeError('Variable "form_facture" does not exist.', 121, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bon/bdl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 121,  266 => 110,  254 => 100,  244 => 96,  240 => 95,  236 => 94,  228 => 89,  224 => 88,  220 => 87,  216 => 86,  212 => 85,  208 => 84,  203 => 83,  199 => 82,  173 => 59,  167 => 56,  159 => 51,  153 => 48,  139 => 37,  133 => 34,  125 => 29,  119 => 26,  111 => 21,  105 => 18,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Facture{% endblock %}

{%  block body %}
    {{ form_start(form_facture) }}
      <br>
      <br>
       
<div class=\"container-fluid\">
    <div class=\"\">
        <div class=\"col-9 col-push-2 offset-2\">
            <div class=\"card card-primary card-outline\"> 
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                         {{ form_label(form_facture.facture) }}
                                    </div>
                                    <div class=\"col-sm-7\">
                                        {{ form_widget(form_facture.facture,{'attr' : {'class':' form-control'}})  }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                         {{ form_label(form_facture.modeDePayement) }}
                                    </div>
                                    <div class=\"col-sm-7\">
                                        {{ form_widget(form_facture.modeDePayement,{'attr' : {'class':' form-control'}})  }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                         {{ form_label(form_facture.createdAt, 'Date') }}
                                    </div>
                                    <div class=\"col-sm-7\">
                                        {{ form_widget(form_facture.createdAt,{'attr' : {'class':' form-control'}})  }}
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class=\"col-6 push-col-1\">
                            <div class=\"card-body\">
                           
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                      {{ form_label(form_facture.remise) }}
                                    </div>
                                    <div class=\"col-sm-\">
                                        {{ form_widget(form_facture.remise,{'attr' : {'class':'mr-auto form-control'}})  }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-5\">
                                      {{ form_label(form_facture.netAPayer) }}
                                    </div>
                                    <div class=\"col-sm-7 td-net-a-payer\">
                                        {{ form_widget(form_facture.netAPayer,{'attr' : {'class':'mr-auto form-control'}})  }}
                                    </div>
                                </div>
                            </div>
                                                
                        </div>
                    </div>
                <div class=\"card-tools text-right border-bottom\">
                    <a href=\"#\" id=\"add-new-item\" class=\"btn btn-sm rounded-0 rounded-top btn-outline-dark mx-2\">Nouvelle ligne</a>    
                    <a href=\"#\" id=\"add-new-item-to-facture\" class=\"btn  btn-success text-white float-right\">Ajouter</a>            
                </div>
                <div class=\"card-body table-responsive \">
                    <table id=\"facture\" class=\" table table-sm  table-hover table-centered table-stripped text-nowrap \" style=\"background-color: #c7c7c7!imortant;\">
                        <thead class=\"thead-dark\">
                                <th scope=\"col\">Designation</th>
                                <th scope=\"col\">Qté</th>
                                <th scope=\"col\">Recu</th>
                                <th scope=\"col\">PU prévu</th>
                                <th scope=\"col\">Prix Achat</th>
                                <th scope=\"col\">Sous-total</th>
                                <th scope=\"col\">Supp</th>
                        </thead>
                        <tbody >  
                            {% for key, list in form_facture.bdlMedicItems %}
                            <tr class=\"tr-item\" id =\"{{ key }}\">
                                <td>{{ form_widget(list.ItemMedicament,{'attr': {'class': 'w-auto h-100 align-self-center'}}) }}</td>
                                <td>{{ form_widget(list.prixUnitaire,{'attr': {'class': 'h-100 align-self-center'}} ) }}</td>
                                <td class=\"td-qtt\">{{ form_widget(list.recu,{'attr': {'class': ' h-100 align-self-center'}} ) }}</td>
                                <td>{{ form_widget(list.quantite,{'attr': {'class': 'h-100 align-self-center'}}) }}</td>
                                <td class=\"td-price\">{{ form_widget(list.prixAchat,{'attr': {'class': 'h-100 align-self-center'}} ) }}</td>
                                <td class=\"td-total\">{{ form_widget(list.total,{'attr': {'class': 'h-100'}} ) }}</td>
                                <td class=\"d-flex align-middle justify-content-around \">
                                    <a href=\"#\" id=\"remove-item\" class=\" btn \" title='supprimer une ligne'><i class=\"fa fa-trash\"></i></a>
                                </td>
                                <td style=\"display: none;\">
                                    {{ form_widget(list.medicItemBdc)}}
                                    {{ form_widget(list.medicItemBdl) }}
                                    {{ form_widget(list.totalBdc) }}
                                </td>
                            </tr>
                            {% endfor %}
                            <tr class=\"td_cache\" style=\"display:none;\">
                                <td class=\"d-flex align-middle justify-content-around \">
                                    <a href=\"#\" id=\"remove-item\" class=\" btn btn-default\" title=\"Delete element\"><span class=\"fa fa-trash\"></span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
                   
                <div class=\"card-footer\">
                    {{ form_widget(form_facture._token) }}
                    <button type=\"submit\" id=\"save-bdc\" class=\"btn btn-primary\">Valider</button>
                    <button type=\"reset\" class=\"btn btn-default float-right\">Cancel</button>
                </div>              
            </div>
        </div>
    </div>
   
</div>


    {{ form_end(form_facture,{'render_rest': false}) }}
{% endblock %}", "bon/bdl.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\bon\\bdl.html.twig");
    }
}
