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

/* stock/index.html.twig */
class __TwigTemplate_2fc15165a3f9a9af78af4bfd34de8f28890188eb7ed4d365befac19cdfb03184 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/index.html.twig", 1);
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

        echo "Page principale!";
        
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
        echo "\t\t<!--  Modal for editing  -->
\t<div class=\"modal fade\" id=\"staticBackdropLive\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"staticBackdropLiveLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable \">
\t\t\t<div class=\"modal-content\" id=\"modal_edit_content\">
\t\t\t\t";
        // line 10
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "\t\t\t\t\t\t";
            echo (isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new RuntimeError('Variable "formedit" does not exist.', 11, $this->source); })());
            echo "
\t\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<h1 class=\"title\">Veillez choisir un medicament</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t\t<!--  end Modal for editing  -->
\t\t<!--  Modal for adding  -->
\t<div class=\"modal fade\" id=\"staticBackdropLive2\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"staticBackdropLiveLabel2\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-scrollable modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t";
        // line 28
        echo (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 28, $this->source); })());
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<!--  end Modal for adding  -->
\t
<div class=\"row\">
\t<div class=\"col-md-3 col-sm-6 col-12\">
\t\t<div class=\"small-box bg-danger shadow\">
\t\t    <div class=\"inner\">
\t\t        <h2>
\t\t            <span class=\"info-box-number\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["critique"]) || array_key_exists("critique", $context) ? $context["critique"] : (function () { throw new RuntimeError('Variable "critique" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["medicaments"]) || array_key_exists("medicaments", $context) ? $context["medicaments"] : (function () { throw new RuntimeError('Variable "medicaments" does not exist.', 39, $this->source); })())), "html", null, true);
        echo " Soit ";
        echo twig_escape_filter($this->env, twig_round((((isset($context["critique"]) || array_key_exists("critique", $context) ? $context["critique"] : (function () { throw new RuntimeError('Variable "critique" does not exist.', 39, $this->source); })()) * 100) / twig_length_filter($this->env, (isset($context["medicaments"]) || array_key_exists("medicaments", $context) ? $context["medicaments"] : (function () { throw new RuntimeError('Variable "medicaments" does not exist.', 39, $this->source); })()))), 1, "floor"), "html", null, true);
        echo "%</span>
\t\t        </h2>
\t\t        <p>Article Critique</p>
\t\t    </div>
\t\t    <div class=\"icon\">
\t\t        <i class=\"fas fa-signal\"></i>
\t\t    </div>
\t\t</div>
\t</div>
    <!-- /.info-box -->
\t<div class=\"col-md-3 col-sm-6 col-12\">
\t\t<div class=\"small-box bg-primary shadow\">
\t\t    <div class=\"inner\"> 
\t\t        <h2>";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 52, $this->source); })()), 0, "", "."), "html", null, true);
        echo "<sup style=\"font-size: 20px\">FCFA</sup></h2>
\t\t        <p>Valeur du stock</p>
\t\t    </div>
\t\t    <div class=\"icon\">
\t\t        <i class=\"fas fa-signal\"></i>
\t\t    </div>
\t\t</div>
\t</div>
\t<div class=\"col-md-3 col-sm-6 col-12\">
\t\t<div class=\"small-box bg-warning shadow\">
\t\t    <div class=\"inner\">
\t\t        <h3>";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["volume"]) || array_key_exists("volume", $context) ? $context["volume"] : (function () { throw new RuntimeError('Variable "volume" does not exist.', 63, $this->source); })()), 0, "", "."), "html", null, true);
        echo "</h3>
\t\t        <p>Volume du stock</p>
\t\t    </div>
\t\t    <div class=\"icon\">
\t\t        <i class=\"fas fa-thermometer-half\"></i>
\t\t    </div>
\t\t</div>
\t</div>
\t
\t<div class=\"col-lg-3 col-6\">
\t    <!-- small card -->
\t    <div class=\"small-box bg-success shadow\">
\t        <div class=\"inner\">
\t            <h3>";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["en_commande"]) || array_key_exists("en_commande", $context) ? $context["en_commande"] : (function () { throw new RuntimeError('Variable "en_commande" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "</h3>
\t            <p>Articles en commande</p>
\t        </div>
\t        <div class=\"icon\">
\t            <i class=\"fas fa-charging-station\"></i>
\t        </div>
\t       
\t    </div>
\t</div>
</div>
<div class=\"medic-table\">
\t<div class=\"col-12 \">
\t\t<div class=\"card\">
\t\t  <div class=\"card-header\">
\t\t\t\t<h3 class=\"card-title\">Liste des medicaments</h3>
\t\t\t\t<div class=\"card-tools float-right\">
\t\t\t\t\t<button  class=\"btn btn-outline-warning btn_edit\" data-toggle=\"modal\" data-target=\"#staticBackdropLive\"   id=\"btn_edit\">
\t\t\t\t\t\t<i class=\"fas fa-edit \"></i>modifier
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_export");
        echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t<i class=\"fas fa-print mr-2\"></i>Exporter
\t\t\t\t\t</a>
\t\t\t\t\t<button  type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#staticBackdropLive2\" id=\"addRecord\"><i class=\"fas fa-plus mr-2\"></i>Nouveau Medicament</button>
\t\t \t\t\t <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t         \t\t <i class=\"fas fa-minus\"></i>
\t\t    \t    </button>
\t\t   \t\t</div>
\t\t  </div>
\t\t  <!-- /.card-header -->
\t\t  <div class=\"card-body table-responsive p-0\" style=\"max-height: 700px;\">
\t\t    <table class=\" table table-head-fixed text-nowrap table-bordered display\" id=\"table_id\">
\t\t      <thead>
\t\t       <tr>
\t\t\t\t\t<th scope=\"col\" style=\"padding :1px;\">#</th>
\t\t\t\t\t<th scope=\"col\">id</th>
\t\t\t\t\t<th scope=\"col\">Dci</th>
\t\t\t\t\t";
        // line 113
        echo "\t\t\t\t\t<th scope=\"col\">Dosage</th>
\t\t\t\t\t<th scope=\"col\">PA</th>
\t\t\t\t\t";
        // line 116
        echo "\t\t\t\t\t";
        // line 117
        echo "\t\t\t\t\t<th scope=\"col\">Stock</th>
\t\t\t\t\t<th scope=\"col\">Avoir</th>
\t\t\t\t\t<th scope=\"col\">Forme</th>
\t\t\t\t\t";
        // line 121
        echo "\t\t\t\t\t";
        // line 122
        echo "\t\t\t\t\t<th scope=\"col\">Min</th>
\t\t\t\t\t<th scope=\"col\">Max</th>
\t\t\t\t\t<th scope=\"col\">peremption</th>
\t\t\t\t\t<th scope=\"col\">Etat du stock</th>
\t\t\t\t\t<th scope=\"col\" style=\"padding :4px;\">Actions</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medicaments"]) || array_key_exists("medicaments", $context) ? $context["medicaments"] : (function () { throw new RuntimeError('Variable "medicaments" does not exist.', 130, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["medic"]) {
            // line 131
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\"><input type=\"checkbox\" value=";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "id", [], "any", false, false, false, 132), "html", null, true);
            echo " ></th>
\t\t\t\t\t\t<th scope=\"row\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 133), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "dci", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 136
            echo "\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "dosage", [], "any", false, false, false, 136), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "pa", [], "any", false, false, false, 137), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 139
            echo "\t\t\t\t\t\t";
            // line 140
            echo "\t\t\t\t\t\t";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["medic"], "stock", [], "any", false, false, false, 140), twig_get_attribute($this->env, $this->source, $context["medic"], "min", [], "any", false, false, false, 140)))) {
                // line 141
                echo "\t\t\t\t\t\t\t<td class=\"text-red\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "stock", [], "any", false, false, false, 141), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
            } else {
                // line 143
                echo "\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "stock", [], "any", false, false, false, 143), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "avoir", [], "any", false, false, false, 145), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "forme", [], "any", false, false, false, 146), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 148
            echo "\t\t\t\t\t\t";
            // line 149
            echo "\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "min", [], "any", false, false, false, 149), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "max", [], "any", false, false, false, 150), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 151
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "peremption", [], "any", false, false, false, 151), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medic"], "etat", [], "any", false, false, false, 152), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a id=\"btn_edit_med\" href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["medic"], "id", [], "any", false, false, false, 154)]), "html", null, true);
            echo "\" class=\"mx-1\"><i class=\"fa fa-edit text-yellow\"></i></a>
\t\t\t\t\t\t\t<a id=\"btn_archive_med\" href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_archive", ["id" => twig_get_attribute($this->env, $this->source, $context["medic"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            echo "\" class=\"mx-1\"><i class=\"fas fa-archive mx-2\"></i></a>
\t\t\t\t\t\t\t";
            // line 156
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 157
                echo "\t\t\t\t\t\t\t<a id=\"btn_remove_med\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["medic"], "id", [], "any", false, false, false, 157)]), "html", null, true);
                echo "\" class=\"mx-1\"><i class=\"fas fa-trash text-red\"></i></a> 
\t\t\t\t\t\t\t";
            }
            // line 159
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 161
            echo "\t\t\t\t\t</tr>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "\t\t    \t  </tbody>
\t\t    </table> 
\t\t  
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t\t<!-- /.card medicaments -->
\t    <!--  card des fourniseeurs -->
\t\t";
        // line 223
        echo "\t    <!-- /.row -->
\t    <!-- end card des fournisseurs -->
\t</div>
    <!-- end table des medicament -->

<div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stock/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 223,  371 => 163,  356 => 161,  353 => 159,  347 => 157,  345 => 156,  341 => 155,  337 => 154,  332 => 152,  328 => 151,  324 => 150,  319 => 149,  317 => 148,  313 => 146,  308 => 145,  302 => 143,  296 => 141,  293 => 140,  291 => 139,  287 => 137,  282 => 136,  278 => 134,  274 => 133,  270 => 132,  267 => 131,  250 => 130,  240 => 122,  238 => 121,  233 => 117,  231 => 116,  227 => 113,  207 => 95,  185 => 76,  169 => 63,  155 => 52,  135 => 39,  121 => 28,  111 => 20,  102 => 13,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page principale!{% endblock %}

{% block body %}
\t\t<!--  Modal for editing  -->
\t<div class=\"modal fade\" id=\"staticBackdropLive\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"staticBackdropLiveLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable \">
\t\t\t<div class=\"modal-content\" id=\"modal_edit_content\">
\t\t\t\t{% if id %}
\t\t\t\t\t\t{{ formedit | raw}}
\t\t\t\t{% else  %}
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<h1 class=\"title\">Veillez choisir un medicament</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
\t\t\t\t</div>
\t\t\t\t{% endif  %}
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<!--  end Modal for editing  -->
\t\t<!--  Modal for adding  -->
\t<div class=\"modal fade\" id=\"staticBackdropLive2\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"staticBackdropLiveLabel2\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-scrollable modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t{{ formAdd | raw }}
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<!--  end Modal for adding  -->
\t
<div class=\"row\">
\t<div class=\"col-md-3 col-sm-6 col-12\">
\t\t<div class=\"small-box bg-danger shadow\">
\t\t    <div class=\"inner\">
\t\t        <h2>
\t\t            <span class=\"info-box-number\">{{ critique}}/{{medicaments|length}} Soit {{((critique*100)/medicaments|length)|round(1,'floor')}}%</span>
\t\t        </h2>
\t\t        <p>Article Critique</p>
\t\t    </div>
\t\t    <div class=\"icon\">
\t\t        <i class=\"fas fa-signal\"></i>
\t\t    </div>
\t\t</div>
\t</div>
    <!-- /.info-box -->
\t<div class=\"col-md-3 col-sm-6 col-12\">
\t\t<div class=\"small-box bg-primary shadow\">
\t\t    <div class=\"inner\"> 
\t\t        <h2>{{valeur|number_format (0, '', '.')}}<sup style=\"font-size: 20px\">FCFA</sup></h2>
\t\t        <p>Valeur du stock</p>
\t\t    </div>
\t\t    <div class=\"icon\">
\t\t        <i class=\"fas fa-signal\"></i>
\t\t    </div>
\t\t</div>
\t</div>
\t<div class=\"col-md-3 col-sm-6 col-12\">
\t\t<div class=\"small-box bg-warning shadow\">
\t\t    <div class=\"inner\">
\t\t        <h3>{{volume|number_format(0, '', '.')}}</h3>
\t\t        <p>Volume du stock</p>
\t\t    </div>
\t\t    <div class=\"icon\">
\t\t        <i class=\"fas fa-thermometer-half\"></i>
\t\t    </div>
\t\t</div>
\t</div>
\t
\t<div class=\"col-lg-3 col-6\">
\t    <!-- small card -->
\t    <div class=\"small-box bg-success shadow\">
\t        <div class=\"inner\">
\t            <h3>{{en_commande}}</h3>
\t            <p>Articles en commande</p>
\t        </div>
\t        <div class=\"icon\">
\t            <i class=\"fas fa-charging-station\"></i>
\t        </div>
\t       
\t    </div>
\t</div>
</div>
<div class=\"medic-table\">
\t<div class=\"col-12 \">
\t\t<div class=\"card\">
\t\t  <div class=\"card-header\">
\t\t\t\t<h3 class=\"card-title\">Liste des medicaments</h3>
\t\t\t\t<div class=\"card-tools float-right\">
\t\t\t\t\t<button  class=\"btn btn-outline-warning btn_edit\" data-toggle=\"modal\" data-target=\"#staticBackdropLive\"   id=\"btn_edit\">
\t\t\t\t\t\t<i class=\"fas fa-edit \"></i>modifier
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"{{path('stock_export')}}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t<i class=\"fas fa-print mr-2\"></i>Exporter
\t\t\t\t\t</a>
\t\t\t\t\t<button  type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#staticBackdropLive2\" id=\"addRecord\"><i class=\"fas fa-plus mr-2\"></i>Nouveau Medicament</button>
\t\t \t\t\t <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t         \t\t <i class=\"fas fa-minus\"></i>
\t\t    \t    </button>
\t\t   \t\t</div>
\t\t  </div>
\t\t  <!-- /.card-header -->
\t\t  <div class=\"card-body table-responsive p-0\" style=\"max-height: 700px;\">
\t\t    <table class=\" table table-head-fixed text-nowrap table-bordered display\" id=\"table_id\">
\t\t      <thead>
\t\t       <tr>
\t\t\t\t\t<th scope=\"col\" style=\"padding :1px;\">#</th>
\t\t\t\t\t<th scope=\"col\">id</th>
\t\t\t\t\t<th scope=\"col\">Dci</th>
\t\t\t\t\t{# <th scope=\"col\">Code</th> #}
\t\t\t\t\t<th scope=\"col\">Dosage</th>
\t\t\t\t\t<th scope=\"col\">PA</th>
\t\t\t\t\t{# <th scope=\"col\">PV</th> #}
\t\t\t\t\t{# <th scope=\"col\">Categorie</th> #}
\t\t\t\t\t<th scope=\"col\">Stock</th>
\t\t\t\t\t<th scope=\"col\">Avoir</th>
\t\t\t\t\t<th scope=\"col\">Forme</th>
\t\t\t\t\t{# <th scope=\"col\">Rupture</th> #}
\t\t\t\t\t{# <th scope=\"col\">T_Ruptures</th> #}
\t\t\t\t\t<th scope=\"col\">Min</th>
\t\t\t\t\t<th scope=\"col\">Max</th>
\t\t\t\t\t<th scope=\"col\">peremption</th>
\t\t\t\t\t<th scope=\"col\">Etat du stock</th>
\t\t\t\t\t<th scope=\"col\" style=\"padding :4px;\">Actions</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t {% for medic in medicaments %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\"><input type=\"checkbox\" value={{medic.id}} ></th>
\t\t\t\t\t\t<th scope=\"row\">{{ loop.index}}</th>
\t\t\t\t\t\t<td>{{medic.dci}}</td>
\t\t\t\t\t\t{# <td>{{medic.qrcode}}</td> #}
\t\t\t\t\t\t<td>{{medic.dosage}}</td>
\t\t\t\t\t\t<td>{{medic.pa}}</td>
\t\t\t\t\t\t{# <td>{{medic.pv}}</td> #}
\t\t\t\t\t\t{# <td>{{medic.categorie}}</td> #}
\t\t\t\t\t\t{% if medic.stock < medic.min %}
\t\t\t\t\t\t\t<td class=\"text-red\">{{medic.stock}}</td>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<td>{{medic.stock}}</td>
\t\t\t\t\t\t{% endif%}
\t\t\t\t\t\t<td>{{medic.avoir}}</td>
\t\t\t\t\t\t<td>{{medic.forme}}</td>
\t\t\t\t\t\t{# <td>{{medic.jouRupture}}</td> #}
\t\t\t\t\t\t{# <td>{{medic.jourRuptureTotal}}</td> #}
\t\t\t\t\t\t<td>{{medic.min}}</td>
\t\t\t\t\t\t<td>{{medic.max}}</td>
\t\t\t\t\t\t<td>{{medic.peremption |date ('d/m/Y')}}</td>
\t\t\t\t\t\t<td>{{medic.etat}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a id=\"btn_edit_med\" href=\"{{ path('stock_edit',{id :medic.id})}}\" class=\"mx-1\"><i class=\"fa fa-edit text-yellow\"></i></a>
\t\t\t\t\t\t\t<a id=\"btn_archive_med\" href=\"{{ path('stock_archive',{id :medic.id})}}\" class=\"mx-1\"><i class=\"fas fa-archive mx-2\"></i></a>
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<a id=\"btn_remove_med\" href=\"{{ path('stock_remove',{id :medic.id})}}\" class=\"mx-1\"><i class=\"fas fa-trash text-red\"></i></a> 
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{# <td>{{medic.epuisementstock |date ('d/m/Y')}}</td> #}
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t    \t  </tbody>
\t\t    </table> 
\t\t  
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t\t<!-- /.card medicaments -->
\t    <!--  card des fourniseeurs -->
\t\t{# <div class=\"row\">
\t\t\t<div class=\"p-6 \">
\t\t\t\t<div class=\"card \">\t
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h3 class=\"card-title\">Founisseurs</h3>
\t\t\t\t\t<div class=\"card-tools float-right\">
\t\t\t\t\t \t<button type=\"button\" class=\"btn btn-tool sidebar-collapse\" data-card-widget=\"collapse\">
\t\t\t\t \t\t <i class=\"fas fa-minus\"></i>
\t\t\t\t    \t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t  <div class=\"card-body table-responsive p-0\" style=\"max-height: 400px;\">
\t\t\t\t    <table id=\"table_privider\" class=\"table table-bordered table-striped\">
\t\t\t\t      <thead>
\t\t\t\t      <tr>
\t\t\t\t\t\t<th></th>  
\t\t\t\t\t\t<th>#</th>  
\t\t\t\t\t\t<th>fournisseur</th>   
\t\t\t\t\t\t<th>Socité</th>   
\t\t\t\t\t\t<th>mailFourn</th>     
\t\t\t\t\t\t<th>adresse</th>      
\t\t\t\t\t\t<th>Actions</th>      
\t\t\t\t\t\t    
\t\t\t\t\t\t</tr>
\t\t\t\t      </thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t   
\t\t\t\t      </tbody>
\t\t\t\t\t  \t{% for f in fournisseurs %}
\t\t\t\t\t\t\t<tr>\t
\t\t\t\t\t\t\t<th scope=\"col\"><input type=\"checkbox\" value={{f.id}} ></th>
\t\t\t\t\t\t\t\t<td>{{loop.index + 1}}</td>
\t\t\t\t\t\t\t\t<td>{{f.nomFourn}}</td>
\t\t\t\t\t\t\t\t<td>{{f.company}}</td>
\t\t\t\t\t\t\t\t<td>{{f.mailFourn}}</td>
\t\t\t\t\t\t\t\t<td>{{f.adresseFourn}}</td> 
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a id =\"btn_edit_four\" href=\"\" id=\"{{f.id}}\" class=\"mx-1\"><i class=\"fa fa-edit text-yellow\"></i></a>
\t\t\t\t\t\t\t\t\t<a  id=\"btn_view_four\" class=\"mx'1\"><i class=\"fa fa-eye text-teal\"></i></a>
\t\t\t\t\t\t\t\t\t<a id =\"btn_remove_four\" href=\"\" id=\"{{f.id}}\" class=\"mx-1\"><i class=\"fa fa-trash text-red\"></i></a>
\t\t\t\t\t\t\t\t </td> 
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor  %}
\t\t\t\t    </table>
\t\t\t\t  </div>
\t\t\t\t  <!-- /.card-body -->
\t\t\t\t</div>
\t\t\t\t<!-- /.card -->
\t\t\t</div>
\t\t\t<!-- /.col -->
\t\t</div> #}
\t    <!-- /.row -->
\t    <!-- end card des fournisseurs -->
\t</div>
    <!-- end table des medicament -->

<div>



{% endblock %}
{#
\tNice Users interface
<div class=\"col-md-4\">
  <!-- Widget: user widget style 1 -->
  <div class=\"card card-widget widget-user shadow\">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class=\"widget-user-header bg-info\">
      <h3 class=\"widget-user-username\">Alexander Pierce</h3>
      <h5 class=\"widget-user-desc\">Founder &amp; CEO</h5>
    </div>
    <div class=\"widget-user-image\">
      <img class=\"img-circle elevation-2\" src=\"../dist/img/user1-128x128.jpg\" alt=\"User Avatar\">
    </div>
    <div class=\"card-footer\">
      <div class=\"row\">
        <div class=\"col-sm-4 border-right\">
          <div class=\"description-block\">
            <h5 class=\"description-header\">3,200</h5>
            <span class=\"description-text\">SALES</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class=\"col-sm-4 border-right\">
          <div class=\"description-block\">
            <h5 class=\"description-header\">13,000</h5>
            <span class=\"description-text\">FOLLOWERS</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class=\"col-sm-4\">
          <div class=\"description-block\">
            <h5 class=\"description-header\">35</h5>
            <span class=\"description-text\">PRODUCTS</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- /.widget-user -->
</div>
#} \t", "stock/index.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\stock\\index.html.twig");
    }
}
