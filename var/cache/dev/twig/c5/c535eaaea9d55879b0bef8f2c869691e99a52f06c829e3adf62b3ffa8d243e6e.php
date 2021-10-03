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

/* fournisseur/providerDetailRender.html.twig */
class __TwigTemplate_7ab62e7a87792c663d3b5b05631bc421a3bee797cb02b596c850a0915e060c07 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/providerDetailRender.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/providerDetailRender.html.twig"));

        // line 150
        echo " #}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/providerDetailRender.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 150,);
    }

    public function getSourceContext()
    {
        return new Source("{#   <div class=\"modal-content \" >
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
                       <p class=\"text-sm-left\">{{ items.nomFournisseur }}</p> 
                        </div>
                      </div>
                      <div class=\"form-group row\">
                        <div class=\"col col-sm-auto\">
                         <p class=\"font-weight-bold text-sm-left\"> Mail: </p>
                         
                        </div>
                        <div class=\"col col-sm-auto\">
                       <p class=\"text-sm-left\">{{ items.mailFournisseur   }}</p> 
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
                       <p class=\"text-sm-left\"> {{items.adresseFournisseur  }}</p> 
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
      </div>
     {#        <div class=\"form-controls\">
        {{ form_start(providerForm) }}
          <div class=\"form-error\">
            {{ form_errors(providerForm) }}
          </div>
          <div class=\"form-group px-3 \">
            {{ form_label(providerForm.codeFourn) }}    
            {{ form_widget(providerForm.codeFourn,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3 \">
            {{ form_label(providerForm.nomFourn) }}    
            {{ form_widget(providerForm.nomFourn,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3\">
            {{ form_label(providerForm.company) }}    
            {{ form_widget(providerForm.company,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3\">
            {{ form_label(providerForm.telFourn) }}    
            {{ form_widget(providerForm.telFourn,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3\">
            {{ form_label(providerForm.mailFourn) }}    
            {{ form_widget(providerForm.mailFourn,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3\">
            {{ form_label(providerForm.adresseFourn) }}    
            {{ form_widget(providerForm.adresseFourn,{'attr' : { 'class' :'form-control border-width-2 is-warning'}}) }}
          </div>
          <div class=\"form-group px-3\">
            {{ form_widget(providerForm._token) }} 
           
            {% if editMode %}
            <button type=\"submit\" class=\"btn btn-success\">
            Enregistrer les modifications
            </button>
            {% else %}
            <button type=\"submit\" class=\"btn btn-warning\">
            Ajouter fournisseur
            </button>
            {% endif %}
          </div>
        
           
          {{ form_end(providerForm,{'render_rest' :false}) }}
     
      </div>   #} #}", "fournisseur/providerDetailRender.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\fournisseur\\providerDetailRender.html.twig");
    }
}
