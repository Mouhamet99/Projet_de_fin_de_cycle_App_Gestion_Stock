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

/* bon/index.html.twig */
class __TwigTemplate_6db9438947d23ed1dc73d8129483f1e327161259f50d3dfc1a98288b6ba7d2d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bon/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bon/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bon/index.html.twig", 1);
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

        echo "Bon de commande";
        
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
<!--  end Modal to Show item of bonDeCommande   -->
<!--   Modal to Showing notification   -->
<div class=\"modal fade\" id=\"factureAlert\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"factureError\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
            <h1>Cette action ne peut se faire.Verfiez que le bon est bien autorisé ou qu'il n'est pas joint à aucune facture</h1>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        </div>
      </div>
    </div>
  </div>
<!--  end Modal to Showing bonDeCommande   -->

<hr>
<br>
<div class=\"row\">
  <div class=\"col-11 col-push-1\">
    <div class=\"col-12\">
      <div class=\"card card-primary card-outline\">
        <div class=\"card-tools py-2 bg-light text-right\">
          <button  class=\"btn btn-primary  ml-5\" id=\"bdc-join-\"><i class=\"fas fa-link mr-2\"></i>Etablir Facture</button>
          <button class=\"btn btn-danger\"><i class=\"fas fa-ban mr-2\"></i>Annuler BDC</button>
          <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bon_add");
        echo "\" class=\"btn btn-success  displayLoader text-dcoration-none text-white\"><i class=\"fas fa-plus mr-2\"></i>Nouveau bdc</a>
        </div>
        <!-- /.card-tools -->

        <div class=\"card-body p-0\">
          <div class=\"mailbox-controls\">
            <!-- /.float-right -->
          </div>
          <div class=\" table-responsive mailbox-messages\">
            <table class=\"table table-sm table-hover table-bordered table-striped \" id=\"table-bdc\">
              <thead>
                <tr>
                  <th scope=\"col\" style\"padding :1px;\">#</th>
                  <th scope=\"col\">Bdc</th>
                  <th scope=\"col\">Fournisseur</th>
                  <th scope=\"col\">mail</th>
                  <th scope=\"col\">Date</th>
                  <th scope=\"col\">Etat</th>
                  <th scope=\"col\" style\"padding :4px;\">Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bdc_list"]) || array_key_exists("bdc_list", $context) ? $context["bdc_list"] : (function () { throw new RuntimeError('Variable "bdc_list" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
            // line 61
            echo "                  <tr>
                    <td>
                      <div class=\"icheck-primary\">
                        <input type=\"checkbox\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" id=\"\">
                        <label for=\"check1\"></label>
                      </div>
                    </td>
                    <td> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bon"], "numero", [], "any", false, false, false, 68), "html", null, true);
            echo " </td>
                    <td> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bon"], "fournisseurBdc", [], "any", false, false, false, 69), "company", [], "any", false, false, false, 69), "html", null, true);
            echo " </td>
                    <td> ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bon"], "fournisseurBdc", [], "any", false, false, false, 70), "mailFourn", [], "any", false, false, false, 70), "html", null, true);
            echo " </td>
                    <td> ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bon"], "createdAt", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
            echo " </td>
                    <td class =\"etat\"> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 72), "html", null, true);
            echo "
                      ";
            // line 73
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 73), "Terminée"))) {
                // line 74
                echo "                      <a href=\"#\"><i class=\"fas fa-star text-dark text-warning\"></i></a>
                      ";
            }
            // line 76
            echo "                    </td>
                      ";
            // line 77
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 77), "En attente")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 77), "Non Autorisé")))) {
                // line 78
                echo "                        <td>
                          <a id=\"btn-show-bdc\" href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bon_show", ["id" => twig_get_attribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning\" alt=\"afficher\"><i class=\"fas fa-eye \"></i></a>
                          <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bon_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger displayLoader\" alt=\"supprimer\"><i class=\"fas fa-ban\"></i></a>
                          <button id=\"btn-not-join-bdc\" class=\"btn btn-sm btn-primary\" data-toggle=\"modal\" data-target=\"#factureAlert\" ><i class=\"fas fa-link\"></i></button>


                          
                        </td>
                      ";
            } else {
                // line 87
                echo "                        <td>
                        <a id=\"btn-show-bdc\" href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bon_show", ["id" => twig_get_attribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning\" alt=\"afficher\"><i class=\"fas fa-eye \"></i></a>
                        ";
                // line 89
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 89), "Terminée"))) {
                    // line 90
                    echo "                          <a id=\"btn-not-remove-bdc\" href=\"#\" class=\"btn btn-sm btn-danger\" alt=\"supprimer\"><i class=\"fas fa-ban\"></i></a>
                          <button id=\"btn-not-join-bdc\" class=\"btn btn-sm btn-primary\" data-toggle=\"modal\" data-target=\"#factureAlert\"><i class=\"fas fa-link\"></i></button>
                       
                        ";
                } else {
                    // line 94
                    echo "                          <button class=\"btn btn-sm btn-danger\" data-toggle=\"modal\" data-target=\"#factureAlert\" ><i class=\"fas fa-ban\"></i></button>
                          <a id=\"btn-join-bdc\" href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bon_join", ["id" => twig_get_attribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-primary displayLoader\" alt=\"joindre une facture\"><i class=\"fas fa-link\"></i></a>
                        ";
                }
                // line 97
                echo "                        </td>
                      ";
            }
            // line 99
            echo "                  </tr>
                  ";
            // line 100
            if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["bdc_list"]) || array_key_exists("bdc_list", $context) ? $context["bdc_list"] : (function () { throw new RuntimeError('Variable "bdc_list" does not exist.', 100, $this->source); })())), 0))) {
                // line 101
                echo "                    <h1>Aucun bon de commande établi</h1>
                  ";
            }
            // line 103
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "              </tbody>
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
        return "bon/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 104,  247 => 103,  243 => 101,  241 => 100,  238 => 99,  234 => 97,  229 => 95,  226 => 94,  220 => 90,  218 => 89,  214 => 88,  211 => 87,  201 => 80,  197 => 79,  194 => 78,  192 => 77,  189 => 76,  185 => 74,  183 => 73,  179 => 72,  175 => 71,  171 => 70,  167 => 69,  163 => 68,  156 => 64,  151 => 61,  147 => 60,  122 => 38,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bon de commande{% endblock %}

{% block body %}

<!--  Modal to Showing item of bondecommande   -->
<div class=\"modal  fade\" id=\"bon-facture\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"list-item-medic-label\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered\">

  </div>
</div>
<!--  end Modal to Show item of bonDeCommande   -->
<!--   Modal to Showing notification   -->
<div class=\"modal fade\" id=\"factureAlert\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"factureError\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
            <h1>Cette action ne peut se faire.Verfiez que le bon est bien autorisé ou qu'il n'est pas joint à aucune facture</h1>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        </div>
      </div>
    </div>
  </div>
<!--  end Modal to Showing bonDeCommande   -->

<hr>
<br>
<div class=\"row\">
  <div class=\"col-11 col-push-1\">
    <div class=\"col-12\">
      <div class=\"card card-primary card-outline\">
        <div class=\"card-tools py-2 bg-light text-right\">
          <button  class=\"btn btn-primary  ml-5\" id=\"bdc-join-\"><i class=\"fas fa-link mr-2\"></i>Etablir Facture</button>
          <button class=\"btn btn-danger\"><i class=\"fas fa-ban mr-2\"></i>Annuler BDC</button>
          <a href=\"{{path('bon_add')}}\" class=\"btn btn-success  displayLoader text-dcoration-none text-white\"><i class=\"fas fa-plus mr-2\"></i>Nouveau bdc</a>
        </div>
        <!-- /.card-tools -->

        <div class=\"card-body p-0\">
          <div class=\"mailbox-controls\">
            <!-- /.float-right -->
          </div>
          <div class=\" table-responsive mailbox-messages\">
            <table class=\"table table-sm table-hover table-bordered table-striped \" id=\"table-bdc\">
              <thead>
                <tr>
                  <th scope=\"col\" style\"padding :1px;\">#</th>
                  <th scope=\"col\">Bdc</th>
                  <th scope=\"col\">Fournisseur</th>
                  <th scope=\"col\">mail</th>
                  <th scope=\"col\">Date</th>
                  <th scope=\"col\">Etat</th>
                  <th scope=\"col\" style\"padding :4px;\">Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for bon in bdc_list %}
                  <tr>
                    <td>
                      <div class=\"icheck-primary\">
                        <input type=\"checkbox\" value=\"{{bon.id}}\" id=\"\">
                        <label for=\"check1\"></label>
                      </div>
                    </td>
                    <td> {{bon.numero}} </td>
                    <td> {{bon.fournisseurBdc.company}} </td>
                    <td> {{bon.fournisseurBdc.mailFourn}} </td>
                    <td> {{bon.createdAt | date('d/m/Y')}} </td>
                    <td class =\"etat\"> {{bon.etat}}
                      {% if bon.etat == 'Terminée' %}
                      <a href=\"#\"><i class=\"fas fa-star text-dark text-warning\"></i></a>
                      {% endif %}
                    </td>
                      {% if bon.etat == 'En attente' or bon.etat == 'Non Autorisé'%}
                        <td>
                          <a id=\"btn-show-bdc\" href=\"{{path('bon_show',{id: bon.id})}}\" class=\"btn btn-sm btn-warning\" alt=\"afficher\"><i class=\"fas fa-eye \"></i></a>
                          <a href=\"{{path('bon_remove',{id: bon.id})}}\" class=\"btn btn-sm btn-danger displayLoader\" alt=\"supprimer\"><i class=\"fas fa-ban\"></i></a>
                          <button id=\"btn-not-join-bdc\" class=\"btn btn-sm btn-primary\" data-toggle=\"modal\" data-target=\"#factureAlert\" ><i class=\"fas fa-link\"></i></button>


                          
                        </td>
                      {% else %}
                        <td>
                        <a id=\"btn-show-bdc\" href=\"{{path('bon_show',{id: bon.id})}}\" class=\"btn btn-sm btn-warning\" alt=\"afficher\"><i class=\"fas fa-eye \"></i></a>
                        {% if (bon.etat) == 'Terminée' %}
                          <a id=\"btn-not-remove-bdc\" href=\"#\" class=\"btn btn-sm btn-danger\" alt=\"supprimer\"><i class=\"fas fa-ban\"></i></a>
                          <button id=\"btn-not-join-bdc\" class=\"btn btn-sm btn-primary\" data-toggle=\"modal\" data-target=\"#factureAlert\"><i class=\"fas fa-link\"></i></button>
                       
                        {% else %}
                          <button class=\"btn btn-sm btn-danger\" data-toggle=\"modal\" data-target=\"#factureAlert\" ><i class=\"fas fa-ban\"></i></button>
                          <a id=\"btn-join-bdc\" href=\"{{path('bon_join',{id: bon.id})}}\" class=\"btn btn-sm btn-primary displayLoader\" alt=\"joindre une facture\"><i class=\"fas fa-link\"></i></a>
                        {% endif %}
                        </td>
                      {% endif %}
                  </tr>
                  {% if bdc_list|length == 0 %}
                    <h1>Aucun bon de commande établi</h1>
                  {% endif%}
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
{% endblock %}", "bon/index.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\bon\\index.html.twig");
    }
}
