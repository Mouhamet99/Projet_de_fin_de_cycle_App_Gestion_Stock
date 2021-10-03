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

/* facture/index.html.twig */
class __TwigTemplate_100d1fdb1da24e7eaae16f5a1d00bc49fbee1f1a4d8823356275d12df20f17dc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/index.html.twig", 1);
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

        echo "Factures";
        
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
  <!--  Modal to Showing item of bondecommande   -->
  <div class=\"modal  fade\" id=\"bon-facture\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"list-item-medic-label\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered\">
     
    </div>
  </div>
    <!--  end Modal to Showing bonDeCommande   -->
 
<hr>
<br> 
<div class=\"row\">
    <div class=\"col-11 col-push-1\">
    <h4 class=\"text-centered\">
       Table des Factures.Nous pouvons voir toutes les informations les concernant
    </h4>
     <div class=\"col-12\">
          <div class=\"card card-primary card-outline\">
              <div class=\"card-tools py-2 bg-light\">  

               
                  <button class=\"btn btn-outline-secondary\" id=\"print-bdl\" >
                    <i class=\"fas fa-print mx-2\"></i>Imprimer
                  </button>
                  <button  class=\"btn btn-warning btn_view_facture\" data-toggle=\"modal\" data-target=\"\"   id=\"\">
                    <i class=\"fas fa-eye mx-2\"></i>Visualiser
                  </button>
                  <button  type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#bon-facture\" id=\"btn-remove-bdl\">
                     <i class=\"fas fa-plus mx-2\"></i>Nouvelle Facture
                  </button>
                  <button type=\"button\" class=\"btn btn-tool float-right\" data-card-widget=\"collapse\">
                      <i class=\"fas fa-minus  \"></i>
                  </button>   
              </div>
              <!-- /.card-tools -->
         
            <div class=\"card-body p-0\">
              <div class=\" table-responsive mailbox-messages\">
                <table class=\"table table-sm table-hover table-bordered table-striped \" id=\"table-bdl\">
                  <thead>
                    <tr>
                      \t<th scope=\"col\" style\"padding :1px;\">#</th>
                        <th scope=\"col\">Facture</th>
                        <th scope=\"col\">Montant</th>
                        <th scope=\"col\">Remise (%)</th>
                        <th scope=\"col\">Payement</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\" style=\"padding: 4px;\">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facture_list"]) || array_key_exists("facture_list", $context) ? $context["facture_list"] : (function () { throw new RuntimeError('Variable "facture_list" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 58
            echo "                      <tr>
                        <td>
                          <div class=\"icheck-primary\">
                            <input type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\" >
                            <label for=\"check1\"></label>
                          </div>
                        </td>
                        <td>  ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "facture", [], "any", false, false, false, 65), "html", null, true);
            echo " </td>
                        <td>  ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "netAPayer", [], "any", false, false, false, 66), "html", null, true);
            echo " </td>
                        <td>  ";
            // line 67
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["list"], "remise", [], "any", false, false, false, 67) * 100), "html", null, true);
            echo " </td>
                        <td>  ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "modeDePayement", [], "any", false, false, false, 68), "html", null, true);
            echo " </td>
                        <td>  ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "createdAt", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true);
            echo " </td>                        
                        <td> 

                          <a id=\"btn-print-bdl\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_print");
            echo "\" target =\"_blank\" class=\"btn btn-sm btn-secondary\" alt=\"imprimer\"><i class=\"fas fa-print\"></i></a>
                          <a id=\"btn-show-bdl\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_show", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\" alt=\"afficher\"><i class=\"fas fa-eye \"></i></a>
             
                        </td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class=\"card-footer p-0\">
           
            </div>
          </div>
          <!-- /.card -->
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 78,  183 => 73,  179 => 72,  173 => 69,  169 => 68,  165 => 67,  161 => 66,  157 => 65,  150 => 61,  145 => 58,  141 => 57,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Factures{% endblock %}

{% block body %}
 
  <!--  Modal to Showing item of bondecommande   -->
  <div class=\"modal  fade\" id=\"bon-facture\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"list-item-medic-label\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered\">
     
    </div>
  </div>
    <!--  end Modal to Showing bonDeCommande   -->
 
<hr>
<br> 
<div class=\"row\">
    <div class=\"col-11 col-push-1\">
    <h4 class=\"text-centered\">
       Table des Factures.Nous pouvons voir toutes les informations les concernant
    </h4>
     <div class=\"col-12\">
          <div class=\"card card-primary card-outline\">
              <div class=\"card-tools py-2 bg-light\">  

               
                  <button class=\"btn btn-outline-secondary\" id=\"print-bdl\" >
                    <i class=\"fas fa-print mx-2\"></i>Imprimer
                  </button>
                  <button  class=\"btn btn-warning btn_view_facture\" data-toggle=\"modal\" data-target=\"\"   id=\"\">
                    <i class=\"fas fa-eye mx-2\"></i>Visualiser
                  </button>
                  <button  type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#bon-facture\" id=\"btn-remove-bdl\">
                     <i class=\"fas fa-plus mx-2\"></i>Nouvelle Facture
                  </button>
                  <button type=\"button\" class=\"btn btn-tool float-right\" data-card-widget=\"collapse\">
                      <i class=\"fas fa-minus  \"></i>
                  </button>   
              </div>
              <!-- /.card-tools -->
         
            <div class=\"card-body p-0\">
              <div class=\" table-responsive mailbox-messages\">
                <table class=\"table table-sm table-hover table-bordered table-striped \" id=\"table-bdl\">
                  <thead>
                    <tr>
                      \t<th scope=\"col\" style\"padding :1px;\">#</th>
                        <th scope=\"col\">Facture</th>
                        <th scope=\"col\">Montant</th>
                        <th scope=\"col\">Remise (%)</th>
                        <th scope=\"col\">Payement</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\" style=\"padding: 4px;\">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for list in facture_list %}
                      <tr>
                        <td>
                          <div class=\"icheck-primary\">
                            <input type=\"checkbox\" value=\"{{list.id}}\" >
                            <label for=\"check1\"></label>
                          </div>
                        </td>
                        <td>  {{list.facture}} </td>
                        <td>  {{list.netAPayer}} </td>
                        <td>  {{list.remise * 100}} </td>
                        <td>  {{list.modeDePayement}} </td>
                        <td>  {{list.createdAt | date('d/m/Y')}} </td>                        
                        <td> 

                          <a id=\"btn-print-bdl\" href=\"{{path('facture_print')}}\" target =\"_blank\" class=\"btn btn-sm btn-secondary\" alt=\"imprimer\"><i class=\"fas fa-print\"></i></a>
                          <a id=\"btn-show-bdl\" href=\"{{path('facture_show',{id: list.id})}}\" class=\"btn btn-sm btn-warning\" alt=\"afficher\"><i class=\"fas fa-eye \"></i></a>
             
                        </td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class=\"card-footer p-0\">
           
            </div>
          </div>
          <!-- /.card -->
        </div>
    </div>
</div>
{% endblock %}

", "facture/index.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\facture\\index.html.twig");
    }
}
