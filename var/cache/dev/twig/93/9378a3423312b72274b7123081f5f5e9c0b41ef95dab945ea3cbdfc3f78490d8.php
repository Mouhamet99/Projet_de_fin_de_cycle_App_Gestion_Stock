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

/* bon/bdcRender.html.twig */
class __TwigTemplate_e74950edc3c7b22f6f1472b93ea94c24716cecc147e5937bba32a107f48fa495 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bon/bdcRender.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bon/bdcRender.html.twig"));

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
                         <p class=\"font-weight-bold text-sm-left\">Founisseur: </p>
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })()), "fournisseurBdc", [], "any", false, false, false, 13), "company", [], "any", false, false, false, 13), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                     
                      
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\"> Nom Founisseur: </p>
                        
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 24, $this->source); })()), "fournisseurBdc", [], "any", false, false, false, 24), "nomFourn", [], "any", false, false, false, 24), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\"> Mail: </p>
                         
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 33, $this->source); })()), "fournisseurBdc", [], "any", false, false, false, 33), "mailFourn", [], "any", false, false, false, 33), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class=\"col-6 push-col-1\">
                    <div class=\"card-body\">
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">Bon de commande: </p>
                     
                        </div>
                        <div class=\"col-sm-7\">
                       <p class=\"text-sm-left\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 47, $this->source); })()), "numero", [], "any", false, false, false, 47), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                    
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">adreese: </p>
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\"> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 56, $this->source); })()), "fournisseurBdc", [], "any", false, false, false, 56), "adresseFourn", [], "any", false, false, false, 56), "html", null, true);
            echo "</p> 
                        </div>
                      </div>
                    </div>
                              
                  </div>
                </div>
                <h1>";
            // line 63
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 63, $this->source); })()), "medicItems", [], "any", false, false, false, 63)), "html", null, true);
            echo " Medicaments</h1>
                <div class=\"card-body table-responsive \">

                  <table id=\"facture\" class=\" table table centered text-nowrap\" >
                    <thead class=\".thead-dark\">
                         <th scope=\"col\" style\"padding :1px;\">Designation</th>
                    <th scope=\"col\">PU</th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\" style\"padding :4px;\">Montant</th>
                  </tr>
                    </thead>
                    <tbody >    
                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 75, $this->source); })()), "medicItems", [], "any", false, false, false, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 76
                echo "                      <tr>
                        <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "ItemMedicament", [], "any", false, false, false, 77), "dci", [], "any", false, false, false, 77), "html", null, true);
                echo "</td>
                        <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>
                        <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 79), "html", null, true);
                echo "</td>
                        <td>";
                // line 80
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 80) * twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 80)), "html", null, true);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                    </tbody>
                  </table>
                </div>  
              </div>
         </div>
        ";
        } else {
            // line 89
            echo "          <div class=\"modal-body\">
            <h1 class=\"title\">Veillez choisir un bon de commande</h1>
          </div>
          
        ";
        }
        // line 94
        echo "          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            <button type=\"button\" class=\"btn btn-primary float-left\" id=\" print \" onclick='printJS({
\t\t\t\t\t\t\t\tprintable: \"bdc-modal\",
\t\t\t\t\t\t\t\ttype: \"html\",
\t\t\t\t\t\t\t\theader:
\t\t\t\t\t\t\t\t\t\"<div class=\\\"logo\\\"><h1>Clinique Yaye Marie</h1><img src=\\\"https://placeimg.com/100/100/any\\\" alt=\\\"image dillustration du logo de lentreprise\\\"></div>\",
\t\t\t\t\t\t\t});'>Imprimer</button>
          </div>
      </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bon/bdcRender.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 94,  176 => 89,  168 => 83,  159 => 80,  155 => 79,  151 => 78,  147 => 77,  144 => 76,  140 => 75,  125 => 63,  115 => 56,  103 => 47,  86 => 33,  74 => 24,  60 => 13,  48 => 3,  46 => 2,  43 => 1,);
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
                         <p class=\"font-weight-bold text-sm-left\">Founisseur: </p>
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">{{ items.fournisseurBdc.company   }}</p> 
                        </div>
                      </div>
                     
                      
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\"> Nom Founisseur: </p>
                        
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">{{ items.fournisseurBdc.nomFourn }}</p> 
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\"> Mail: </p>
                         
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">{{ items.fournisseurBdc.mailFourn  }}</p> 
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class=\"col-6 push-col-1\">
                    <div class=\"card-body\">
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">Bon de commande: </p>
                     
                        </div>
                        <div class=\"col-sm-7\">
                       <p class=\"text-sm-left\">{{ items.numero   }}</p> 
                        </div>
                      </div>
                    
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\">adreese: </p>
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\"> {{items.fournisseurBdc.adresseFourn  }}</p> 
                        </div>
                      </div>
                    </div>
                              
                  </div>
                </div>
                <h1>{{ items.medicItems |length }} Medicaments</h1>
                <div class=\"card-body table-responsive \">

                  <table id=\"facture\" class=\" table table centered text-nowrap\" >
                    <thead class=\".thead-dark\">
                         <th scope=\"col\" style\"padding :1px;\">Designation</th>
                    <th scope=\"col\">PU</th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\" style\"padding :4px;\">Montant</th>
                  </tr>
                    </thead>
                    <tbody >    
                    {% for item in items.medicItems %}
                      <tr>
                        <td>{{ item.ItemMedicament.dci}}</td>
                        <td>{{ item.quantite }}</td>
                        <td>{{  item.prixUnitaire}}</td>
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
\t\t\t\t\t\t\t\tprintable: \"bdc-modal\",
\t\t\t\t\t\t\t\ttype: \"html\",
\t\t\t\t\t\t\t\theader:
\t\t\t\t\t\t\t\t\t\"<div class=\\\"logo\\\"><h1>Clinique Yaye Marie</h1><img src=\\\"https://placeimg.com/100/100/any\\\" alt=\\\"image dillustration du logo de lentreprise\\\"></div>\",
\t\t\t\t\t\t\t});'>Imprimer</button>
          </div>
      </div>", "bon/bdcRender.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\bon\\bdcRender.html.twig");
    }
}
