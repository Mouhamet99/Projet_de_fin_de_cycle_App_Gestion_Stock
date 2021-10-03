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

/* facture/bdlRender.html.twig */
class __TwigTemplate_70de66eb32f4c400dbe6d9daa62968e63bdad16f49fb1bc139affb2a0e5cebcf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/bdlRender.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/bdlRender.html.twig"));

        // line 1
        echo "  <div class=\"modal-content \" >
        ";
        // line 2
        if ((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "          <div class=\"modal-body\" id =\"bdc-modal\">
              <div class=\"card card-primary \"> 
                <div class=\"row\">
                  <div class=\"col-6\">
                    <div class=\"card-body\">
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">N° Facture </p>
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })()), "facture", [], "any", false, false, false, 13), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">  Founisseur Associé</p>
                        
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 22, $this->source); })()), "BdlMedicItems", [], "any", false, false, false, 22), 0, [], "any", false, false, false, 22), "medicItemBdc", [], "any", false, false, false, 22), "company", [], "any", false, false, false, 22), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\"> Etablie Le: </p>
                         
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 31, $this->source); })()), "createdAt", [], "any", false, false, false, 31), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-6 push-col-1\">
                    <div class=\"card-body\">
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">Montant</p>
                     
                        </div>
                        <div class=\"col-sm-7\">
                       <p class=\"text-sm-left\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 44, $this->source); })()), "netApayer", [], "any", false, false, false, 44), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                    
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">Remise:  </p>
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\"> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 53, $this->source); })()), "remise", [], "any", false, false, false, 53), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">Mode de Payement:  </p>
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\"> ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 61, $this->source); })()), "modeDePayement", [], "any", false, false, false, 61), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                    </div>
                              
                  </div>
                </div>
                <h1>";
            // line 68
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 68, $this->source); })()), "bdlMedicItems", [], "any", false, false, false, 68)), "html", null, true);
            echo " Medicaments</h1>
                <div class=\"card-body table-responsive \">

                  <table id=\"facture\" class=\" table table centered text-nowrap\" >
                    <thead class=\".thead-dark\">
                         <th scope=\"col\" style\"padding :1px;\">Designation</th>
                    <th scope=\"col\">PU</th>
                    <th scope=\"col\">PV</th>
                    <th scope=\"col\">Qté commandée</th>
                    <th scope=\"col\">Quantité reçue</th>
                    <th scope=\"col\" style=\"padding: 4px;\">Montant</th>
                  </tr>
                    </thead>
                    <tbody >    
                    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 82, $this->source); })()), "medicItems", [], "any", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 83
                echo "                      <tr>
                        <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "ItemMedicament", [], "any", false, false, false, 84), "dci", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>
                        <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 85), "html", null, true);
                echo "</td>
                        <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "recu", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>
                        <td>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 87), "html", null, true);
                echo "</td>
                        <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prixAchat", [], "any", false, false, false, 88), "html", null, true);
                echo "</td>
                        <td>";
                // line 89
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 89) * twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 89)), "html", null, true);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    </tbody>
                  </table>
                </div>  
              </div>
         </div>
        ";
        } else {
            // line 98
            echo "          <div class=\"modal-body\">
            <h1 class=\"title\">Veillez choisir un bon de commande</h1>
          </div>
          
        ";
        }
        // line 103
        echo "          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            <button type=\"button\" class=\"btn btn-primary float-left\" id=\" print \" onclick='printJS({
                printable: \"bdc-modal\",
                type: \"html\",
                header:
                  \"<div class=\\\"logo\\\"><h1>Clinique Yaye Marie</h1><img src=\\\"https://placeimg.com/100/100/any\\\" alt=\\\"image dillustration du logo de lentreprise\\\"></div>\",
              });'>Imprimer</button>
          </div>
      </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "facture/bdlRender.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 103,  194 => 98,  186 => 92,  177 => 89,  173 => 88,  169 => 87,  165 => 86,  161 => 85,  157 => 84,  154 => 83,  150 => 82,  133 => 68,  123 => 61,  112 => 53,  100 => 44,  84 => 31,  72 => 22,  60 => 13,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <div class=\"modal-content \" >
        {% if items %}
          <div class=\"modal-body\" id =\"bdc-modal\">
              <div class=\"card card-primary \"> 
                <div class=\"row\">
                  <div class=\"col-6\">
                    <div class=\"card-body\">
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">N° Facture </p>
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">{{ items.facture   }}</p> 
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">  Founisseur Associé</p>
                        
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">{{ items.BdlMedicItems.0.medicItemBdc.company }}</p> 
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\"> Etablie Le: </p>
                         
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">{{ items.createdAt   }}</p> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-6 push-col-1\">
                    <div class=\"card-body\">
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">Montant</p>
                     
                        </div>
                        <div class=\"col-sm-7\">
                       <p class=\"text-sm-left\">{{ items.netApayer }}</p> 
                        </div>
                      </div>
                    
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">Remise:  </p>
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\"> {{items.remise  }}</p> 
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">Mode de Payement:  </p>
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\"> {{items.modeDePayement  }}</p> 
                        </div>
                      </div>
                    </div>
                              
                  </div>
                </div>
                <h1>{{ items.bdlMedicItems |length }} Medicaments</h1>
                <div class=\"card-body table-responsive \">

                  <table id=\"facture\" class=\" table table centered text-nowrap\" >
                    <thead class=\".thead-dark\">
                         <th scope=\"col\" style\"padding :1px;\">Designation</th>
                    <th scope=\"col\">PU</th>
                    <th scope=\"col\">PV</th>
                    <th scope=\"col\">Qté commandée</th>
                    <th scope=\"col\">Quantité reçue</th>
                    <th scope=\"col\" style=\"padding: 4px;\">Montant</th>
                  </tr>
                    </thead>
                    <tbody >    
                    {% for item in items.medicItems %}
                      <tr>
                        <td>{{ item.ItemMedicament.dci}}</td>
                        <td>{{ item.quantite }}</td>
                        <td>{{ item.recu }}</td>
                        <td>{{  item.prixUnitaire}}</td>
                        <td>{{  item.prixAchat}}</td>
                        <td>{{  item.prixUnitaire*item.quantite}}</td>
                      </tr>
                    {% endfor %}
                    </tbody>
                  </table>
                </div>  
              </div>
         </div>
        {% else  %}
          <div class=\"modal-body\">
            <h1 class=\"title\">Veillez choisir un bon de commande</h1>
          </div>
          
        {% endif  %}
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            <button type=\"button\" class=\"btn btn-primary float-left\" id=\" print \" onclick='printJS({
                printable: \"bdc-modal\",
                type: \"html\",
                header:
                  \"<div class=\\\"logo\\\"><h1>Clinique Yaye Marie</h1><img src=\\\"https://placeimg.com/100/100/any\\\" alt=\\\"image dillustration du logo de lentreprise\\\"></div>\",
              });'>Imprimer</button>
          </div>
      </div>", "facture/bdlRender.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\facture\\bdlRender.html.twig");
    }
}
