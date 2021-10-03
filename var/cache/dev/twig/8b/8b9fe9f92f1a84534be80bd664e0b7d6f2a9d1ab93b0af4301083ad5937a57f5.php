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

/* mouvement_stock/sorties/removalForm.html.twig */
class __TwigTemplate_3a84e3718d4b632e02793d031de18928ab26c10707e32a3f88cbfba30f9e7a32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_stock/sorties/removalForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_stock/sorties/removalForm.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mouvement_stock/sorties/removalForm.html.twig", 1);
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

        echo "Sortie de medicaments";
        
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
\t<h1>Sortie de medicaments</h1>
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"card card-primary card-outline\"> 
             
                <div class=\"card-header text-right \">
\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 11, $this->source); })()), "reference", [], "any", false, false, false, 11), 'row');
        echo "
                \t
                </div>
                <div class=\"card-tools text-right border-bottom\">
                    <button id=\"add-new-item-to-sortie\" class=\"btn btn-sm rounded-0 rounded-top btn-outline-dark mx-2\">Nouvelle Sortie</button>         
                </div>
                <div class=\"card-body table-responsive \">
                    <table id=\"sorties\" class=\" table bg-light-edit table-sm centered text-nowrap \"
                        data-prototype-dci=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 19, $this->source); })()), "sortieItems", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "prototype", [], "any", false, false, false, 19), "medicament", [], "any", false, false, false, 19), 'widget'));
        echo "\"
                        data-prototype-qtt=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 20, $this->source); })()), "sortieItems", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "prototype", [], "any", false, false, false, 20), "quantite", [], "any", false, false, false, 20), 'widget'));
        echo "\"
                        data-prototype-service=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 21, $this->source); })()), "sortieItems", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "prototype", [], "any", false, false, false, 21), "service", [], "any", false, false, false, 21), 'widget'));
        echo "\"
                       data-prototype-demandeur=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 22, $this->source); })()), "sortieItems", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "prototype", [], "any", false, false, false, 22), "demandeur", [], "any", false, false, false, 22), 'widget'));
        echo "\"
                        
                      
                       data-index=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 25, $this->source); })()), "sortieItems", [], "any", false, false, false, 25)), "html", null, true);
        echo "\">
                        <thead class=\"thead-dark\">
                        ";
        // line 27
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 27, $this->source); })()), "sortieItems", [], "any", false, false, false, 27)), 0))) {
            // line 28
            echo "                                <th scope=\"col\" ></th>
                        ";
        }
        // line 30
        echo "                                <th scope=\"col\" >#</th>
                                <th scope=\"col\">Designation</th>
                                <th scope=\"col\">Quantité</th>
                                <th scope=\"col\">Service</th>
                                <th scope=\"col\">Demandeur</th>
                                <th scope=\"col\">Actions</th>
                        </thead>
                        <tbody >  
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 38, $this->source); })()), "sortieItems", [], "any", false, false, false, 38));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["list"]) {
            // line 39
            echo "\t\t\t\t\t\t\t<tr class=\"tr-item\" id =\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "medicament", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "w-auto"]]);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "quantite", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "w-50", "disabled" => false]]);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "service", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => ""]]);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["list"], "demandeur", [], "any", false, false, false, 45), 'widget', ["attr" => ["disabled" => false, "class" => "w-50"]]);
            echo "</td>

\t\t\t\t\t\t\t\t<td class=\"d-flex align-middle justify-content-around removals \">
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"remove-item\" class=\" btn btn-default \" title=\"Delete element\"><span class=\"fa fa-trash\"></span></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            <tr class=\"td_cache\" style=\"display:none;\">
                                <td class=\"d-flex align-middle justify-content-around \">
                                <!--     <a href=\"#\" id=\"add-new-item\" class=\" btn btn-sm btn-outline-dark\" title=\"Duplicate element\"><span class=\"fa fa-plus\"></span></a> -->
                                    <a href=\"#\" id=\"remove-item\" class=\" btn btn-sm btn-outline-dark\" title=\"Delete element\"><span class=\"fa fa-trash\"></span></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
                <div class=\"card-footer\">
                   ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 64, $this->source); })()), "_token", [], "any", false, false, false, 64), 'widget');
        echo "
                    <button type=\"submit\" id=\"save-bdc\" class=\"btn btn-success\">Valider</button>
                    <button type=\"reset\" class=\"btn btn-default float-right\">Cancel</button>
                </div>                
\t\t</div>
\t";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_removals"]) || array_key_exists("form_removals", $context) ? $context["form_removals"] : (function () { throw new RuntimeError('Variable "form_removals" does not exist.', 69, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mouvement_stock/sorties/removalForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 69,  226 => 64,  213 => 53,  191 => 45,  187 => 44,  183 => 43,  179 => 42,  175 => 41,  171 => 40,  166 => 39,  149 => 38,  139 => 30,  135 => 28,  133 => 27,  128 => 25,  122 => 22,  118 => 21,  114 => 20,  110 => 19,  99 => 11,  92 => 7,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Sortie de medicaments{% endblock %}

{%  block body %}

\t<h1>Sortie de medicaments</h1>
\t{{ form_start(form_removals) }}
\t\t<div class=\"card card-primary card-outline\"> 
             
                <div class=\"card-header text-right \">
\t\t\t\t{{ form_row(form_removals.reference) }}
                \t
                </div>
                <div class=\"card-tools text-right border-bottom\">
                    <button id=\"add-new-item-to-sortie\" class=\"btn btn-sm rounded-0 rounded-top btn-outline-dark mx-2\">Nouvelle Sortie</button>         
                </div>
                <div class=\"card-body table-responsive \">
                    <table id=\"sorties\" class=\" table bg-light-edit table-sm centered text-nowrap \"
                        data-prototype-dci=\"{{  form_widget(form_removals.sortieItems.vars.prototype.medicament)|e }}\"
                        data-prototype-qtt=\"{{  form_widget(form_removals.sortieItems.vars.prototype.quantite)|e }}\"
                        data-prototype-service=\"{{  form_widget(form_removals.sortieItems.vars.prototype.service)|e }}\"
                       data-prototype-demandeur=\"{{  form_widget(form_removals.sortieItems.vars.prototype.demandeur)|e }}\"
                        
                      
                       data-index=\"{{ form_removals.sortieItems|length }}\">
                        <thead class=\"thead-dark\">
                        {% if form_removals.sortieItems|length > 0 %}
                                <th scope=\"col\" ></th>
                        {% endif %}
                                <th scope=\"col\" >#</th>
                                <th scope=\"col\">Designation</th>
                                <th scope=\"col\">Quantité</th>
                                <th scope=\"col\">Service</th>
                                <th scope=\"col\">Demandeur</th>
                                <th scope=\"col\">Actions</th>
                        </thead>
                        <tbody >  
                            {% for key,list in form_removals.sortieItems %}
\t\t\t\t\t\t\t<tr class=\"tr-item\" id =\"{{ key }}\">
\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" value=\"{{ loop.index }}\"></td>
\t\t\t\t\t\t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t\t\t\t<td>{{ form_widget(list.medicament,{'attr': {'class': 'w-auto'}}) }}</td>
\t\t\t\t\t\t\t\t<td>{{ form_widget(list.quantite,{'attr': {'class': 'w-50','disabled': false}} ) }}</td>
\t\t\t\t\t\t\t\t<td>{{ form_widget(list.service,{'attr': {'class': ''}} ) }}</td>
\t\t\t\t\t\t\t\t<td>{{ form_widget(list.demandeur,{'attr': {'disabled': false,'class': 'w-50'}}) }}</td>

\t\t\t\t\t\t\t\t<td class=\"d-flex align-middle justify-content-around removals \">
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"remove-item\" class=\" btn btn-default \" title=\"Delete element\"><span class=\"fa fa-trash\"></span></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
                            {%  endfor %}
                            <tr class=\"td_cache\" style=\"display:none;\">
                                <td class=\"d-flex align-middle justify-content-around \">
                                <!--     <a href=\"#\" id=\"add-new-item\" class=\" btn btn-sm btn-outline-dark\" title=\"Duplicate element\"><span class=\"fa fa-plus\"></span></a> -->
                                    <a href=\"#\" id=\"remove-item\" class=\" btn btn-sm btn-outline-dark\" title=\"Delete element\"><span class=\"fa fa-trash\"></span></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
                <div class=\"card-footer\">
                   {{ form_widget(form_removals._token) }}
                    <button type=\"submit\" id=\"save-bdc\" class=\"btn btn-success\">Valider</button>
                    <button type=\"reset\" class=\"btn btn-default float-right\">Cancel</button>
                </div>                
\t\t</div>
\t{{ form_end(form_removals,{'render_rest': false}) }}

{% endblock %}", "mouvement_stock/sorties/removalForm.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\mouvement_stock\\sorties\\removalForm.html.twig");
    }
}
