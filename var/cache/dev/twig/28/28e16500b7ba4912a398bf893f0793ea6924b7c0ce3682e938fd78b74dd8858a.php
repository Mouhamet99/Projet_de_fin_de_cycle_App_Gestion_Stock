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

/* autorisation/index.html.twig */
class __TwigTemplate_807af42c7c7b99027984661f81c1b603688179ec12d2a07dcc5a5721824fc8af extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autorisation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autorisation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "autorisation/index.html.twig", 1);
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

        echo " Autorisation de commande";
        
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
          <h1>Ce bon de commande ne peut etre supprimé</h1>
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
          <button  class=\"btn btn-success \"><i class=\"far fa-check-double mr-2\"></i></i>Autoriser Commande</button>
          <button  class=\"btn btn-danger \"><i class=\"fas fa-ban mr-2 \"></i>Rejeter Commande</button>
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
                  <th scope=\"col\" style=\"padding :1px;\">#</th>
                  <th scope=\"col\">Bdc</th>
                  <th scope=\"col\">Fournisseur</th>
                  <th scope=\"col\">mail</th>
                  <th scope=\"col\">Date</th>
                  <th scope=\"col\">Etat</th>
                  <th scope=\"col\" style=\"padding :4px;\">Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bdc_list"]) || array_key_exists("bdc_list", $context) ? $context["bdc_list"] : (function () { throw new RuntimeError('Variable "bdc_list" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
            // line 60
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 60), "En attente"))) {
                // line 61
                echo "\t\t                <tr>
\t\t                  <td>
\t\t                    <div class=\"icheck-primary\">
\t\t                      <input type=\"checkbox\" value=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\" id=\"\">
\t\t                      <label for=\"check1\"></label>
\t\t                    </div>
\t\t                  </td>
\t\t                  <td> ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bon"], "numero", [], "any", false, false, false, 68), "html", null, true);
                echo " </td>
\t\t                  <td> ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bon"], "fournisseurBdc", [], "any", false, false, false, 69), "company", [], "any", false, false, false, 69), "html", null, true);
                echo " </td>
\t\t                  <td> ";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bon"], "fournisseurBdc", [], "any", false, false, false, 70), "mailFourn", [], "any", false, false, false, 70), "html", null, true);
                echo " </td>
\t\t                  <td> ";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bon"], "createdAt", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
                echo " </td>
\t\t                  <td class =\"etat\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
\t\t                  <td>
\t\t                  \t<a id=\"btn-show-bdc\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bon_show", ["id" => twig_get_attribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning\" alt=\"afficher\"><i class=\"fas fa-eye \"></i></a>
\t\t                    <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bon_allow", ["id" => twig_get_attribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success\" alt=\"supprimer\"><i class=\"fas fa-check-double\"></i></a>
\t\t                    <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bon_reject", ["id" => twig_get_attribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\" alt=\"Rejeter Bon de commande\"><i class=\"fas fa-ban\"></i></a>
\t\t                  </td>
\t\t                </tr>
                    ";
            }
            // line 80
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                ";
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["bdc_list"]) || array_key_exists("bdc_list", $context) ? $context["bdc_list"] : (function () { throw new RuntimeError('Variable "bdc_list" does not exist.', 81, $this->source); })())), 0))) {
            // line 82
            echo "                \t\t<h1 class=\"text-center\">Aucune commande en attente d'autorisation</h1>
                ";
        }
        // line 84
        echo "
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "autorisation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 84,  208 => 82,  205 => 81,  199 => 80,  192 => 76,  188 => 75,  184 => 74,  179 => 72,  175 => 71,  171 => 70,  167 => 69,  163 => 68,  156 => 64,  151 => 61,  148 => 60,  144 => 59,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Autorisation de commande{% endblock %}
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
          <h1>Ce bon de commande ne peut etre supprimé</h1>
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
          <button  class=\"btn btn-success \"><i class=\"far fa-check-double mr-2\"></i></i>Autoriser Commande</button>
          <button  class=\"btn btn-danger \"><i class=\"fas fa-ban mr-2 \"></i>Rejeter Commande</button>
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
                  <th scope=\"col\" style=\"padding :1px;\">#</th>
                  <th scope=\"col\">Bdc</th>
                  <th scope=\"col\">Fournisseur</th>
                  <th scope=\"col\">mail</th>
                  <th scope=\"col\">Date</th>
                  <th scope=\"col\">Etat</th>
                  <th scope=\"col\" style=\"padding :4px;\">Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for bon in bdc_list %}
                    {% if bon.etat == 'En attente' %}
\t\t                <tr>
\t\t                  <td>
\t\t                    <div class=\"icheck-primary\">
\t\t                      <input type=\"checkbox\" value=\"{{bon.id}}\" id=\"\">
\t\t                      <label for=\"check1\"></label>
\t\t                    </div>
\t\t                  </td>
\t\t                  <td> {{bon.numero}} </td>
\t\t                  <td> {{bon.fournisseurBdc.company}} </td>
\t\t                  <td> {{bon.fournisseurBdc.mailFourn}} </td>
\t\t                  <td> {{bon.createdAt | date('d/m/Y')}} </td>
\t\t                  <td class =\"etat\">{{bon.etat}}</td>
\t\t                  <td>
\t\t                  \t<a id=\"btn-show-bdc\" href=\"{{path('bon_show',{id: bon.id})}}\" class=\"btn btn-sm btn-warning\" alt=\"afficher\"><i class=\"fas fa-eye \"></i></a>
\t\t                    <a href=\"{{path('bon_allow',{id: bon.id})}}\" class=\"btn btn-sm btn-success\" alt=\"supprimer\"><i class=\"fas fa-check-double\"></i></a>
\t\t                    <a href=\"{{path('bon_reject',{id: bon.id})}}\" class=\"btn btn-sm btn-danger\" alt=\"Rejeter Bon de commande\"><i class=\"fas fa-ban\"></i></a>
\t\t                  </td>
\t\t                </tr>
                    {% endif %}
                {% endfor %}
                {% if bdc_list|length == 0 %}
                \t\t<h1 class=\"text-center\">Aucune commande en attente d'autorisation</h1>
                {% endif %}

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
{% endblock %}", "autorisation/index.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\autorisation\\index.html.twig");
    }
}
