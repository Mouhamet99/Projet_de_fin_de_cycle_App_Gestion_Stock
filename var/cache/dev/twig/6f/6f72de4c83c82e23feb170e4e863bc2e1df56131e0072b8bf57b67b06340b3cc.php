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

/* dash_board/index.html.twig */
class __TwigTemplate_9499cf4585fd57694e30bf023e0b190af8b893abb85b65a208df1b7731594924 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash_board/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash_board/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dash_board/index.html.twig", 1);
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

        echo "Tableau de bord";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

";
        // line 57
        echo "<!-- 
<div class=\"resume\">
\t<details>Tableau de bord des commandes effectives sur le mois et leur </details> 
\t<details>Tableau de bord des factures effectives sur le mois et leur budget</details>
</div>
 -->
<div class=\"row\">
\t<div class=\"mt-4 pt-3 col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<!--EVOLUTION RUPTURES  -->
\t\t<div class=\"card \">
\t\t \t<div class=\"card-header\">
\t\t    \t<h3 class=\"card-title\">Consommation Moyenne de medicaments par jour</h3>
\t\t    </div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"chart\">
\t\t\t\t";
        // line 72
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["ConsMoyParJour"]) || array_key_exists("ConsMoyParJour", $context) ? $context["ConsMoyParJour"] : (function () { throw new RuntimeError('Variable "ConsMoyParJour" does not exist.', 72, $this->source); })()));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<div class=\"card ";
        // line 79
        echo "\">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\">Variation des entrées et sorties</h3>
\t\t  </div>
\t\t  <div class=\"card-body\">
\t\t    <div class=\"chart\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t    ";
        // line 85
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["EntreeSortie"]) || array_key_exists("EntreeSortie", $context) ? $context["EntreeSortie"] : (function () { throw new RuntimeError('Variable "EntreeSortie" does not exist.', 85, $this->source); })()));
        echo "
\t\t    </div>
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>

\t\t<!-- /.card -->

\t\t<!-- DONUT CHART -->
\t\t<!-- GRAPHE ENTREE/SORTIE -->
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<div class=\"card \">
\t\t\t  <div class=\"card-header\">
\t\t\t    <h3 class=\"card-title\">Medicaments les plus actifs</h3>
\t\t\t    <div class=\"card-tools\">
\t\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t        <i class=\"fas fa-minus\"></i>
\t\t\t      </button>
\t\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t        <i class=\"fas fa-times\"></i>
\t\t\t      </button>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"card-body\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
 \t\t\t\t ";
        // line 110
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["PlusActif"]) || array_key_exists("PlusActif", $context) ? $context["PlusActif"] : (function () { throw new RuntimeError('Variable "PlusActif" does not exist.', 110, $this->source); })()));
        echo "\t\t\t
\t\t\t  </div>
\t\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>

\t\t<!-- /.card -->

\t<!-- /.col (LEFT) -->
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<!-- PIE CHART -->
\t\t<!-- REPARTITION UTILISATION D'UN MEDICAMENT -->
\t\t<div class=\"card \">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\"> Consommation par catégorie</h3>

\t\t    <div class=\"card-tools\">
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t        <i class=\"fas fa-minus\"></i>
\t\t      </button>
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t        <i class=\"fas fa-times\"></i>
\t\t      </button>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"card-body\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t\t";
        // line 136
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["ParCategorie"]) || array_key_exists("ParCategorie", $context) ? $context["ParCategorie"] : (function () { throw new RuntimeError('Variable "ParCategorie" does not exist.', 136, $this->source); })()));
        echo "\t\t\t

\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>

\t\t<!-- /.card -->
\t\t<!-- LINE CHART -->
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<div class=\"card \">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\">Consommation par service</h3>

\t\t    <div class=\"card-tools\">
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t        <i class=\"fas fa-minus\"></i>
\t\t      </button>
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t        <i class=\"fas fa-times\"></i>
\t\t      </button>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"card-body\">
\t\t    <div class=\"chart\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t    \t";
        // line 161
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["ParService"]) || array_key_exists("ParService", $context) ? $context["ParService"] : (function () { throw new RuntimeError('Variable "ParService" does not exist.', 161, $this->source); })()));
        echo "
\t\t    </div>
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<div class=\"card \">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\">Depense par service</h3>

\t\t    <div class=\"card-tools\">
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t        <i class=\"fas fa-minus\"></i>
\t\t      </button>
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t        <i class=\"fas fa-times\"></i>
\t\t      </button>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"card-body\">
\t\t    <div class=\"chart\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t    \t";
        // line 183
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["DepenseParService"]) || array_key_exists("DepenseParService", $context) ? $context["DepenseParService"] : (function () { throw new RuntimeError('Variable "DepenseParService" does not exist.', 183, $this->source); })()));
        echo "
\t\t    </div>
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>
\t\t<!-- /.card -->
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<div class=\"card \">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\">Depense par catégorie de médicament</h3>

\t\t    <div class=\"card-tools\">
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t        <i class=\"fas fa-minus\"></i>
\t\t      </button>
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t        <i class=\"fas fa-times\"></i>
\t\t      </button>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"card-body\">
\t\t    <div class=\"chart\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t    \t";
        // line 206
        echo $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart($this->env, (isset($context["PlusActifParCat"]) || array_key_exists("PlusActifParCat", $context) ? $context["PlusActifParCat"] : (function () { throw new RuntimeError('Variable "PlusActifParCat" does not exist.', 206, $this->source); })()));
        echo "
\t\t    </div>
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>
\t\t<!-- /.card -->

</div>
<div class=\"row\">
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<!-- GRAPHES DES SORTIES RECENTES -->
\t\t<div class=\"card \">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\">SORTIES RECENTES</h3>

\t\t    <div class=\"card-tools\">
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t        <i class=\"fas fa-minus\"></i>
\t\t      </button>
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t        <i class=\"fas fa-times\"></i>
\t\t      </button>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"card-body\">
\t\t    <div class=\"chart\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t     
\t\t    </div>
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t\t<!-- /.card -->
\t</div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dash_board/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 206,  240 => 183,  215 => 161,  187 => 136,  158 => 110,  130 => 85,  122 => 79,  112 => 72,  95 => 57,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

{# <div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    Tableau de Bord
    <ul>
        <li>Your controller at <code><a href=\"{{ 'C:/xampp/htdocs/CYM/src/Controller/DashBoardController.php'|file_link(0) }}\">src/Controller/DashBoardController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ 'C:/xampp/htdocs/CYM/templates/dash_board/index.html.twig'|file_link(0) }}\">templates/dash_board/index.html.twig</a></code></li>
    </ul>
\t<ul>Tableau de bord des medicaments 
\t\t<li>nombre de medicaments consommés mensuellement financierement et en terme de quantités</li>
\t\t<li> medicament permimés </li>
\t\t<li>medicament deteriorés </li>
\t</ul>
\t10 Medicaments les plus actives(utilisés)
\t<ul>
\t\t<li>en termes de quantité</li>
\t\t<li>en terme de valeur</li>
\t</ul>
\tgraphe des sorties (des 7derniers jours /en temps reel) quotidiennens
\t<ul>
\t\t<li>nbre de medicamnents sortie par jour</li>
\t\t<li>medicamnents sorties par jour en termes de valeur</li>
\t</ul>
\tgraphe de l'evolution des  ruptures quotidiens sur le mois 
\t<ul>
\t\t<li>en terme de quantité</li>
\t</ul>
\tutilisation d'un medicament p/r aux differents services(Pie) dans le mois
\t<ul>
\t\t<li>en terme de quantite</li>
\t</ul>
\trepatition de l'utilisation des medicament dans les # services dans le mois
\t<ul>
\t\t<li>en terme financiere</li>
\t\t<li>en terme de quantite</li>
\t</ul>
\tRepartition de la Consommation moyenne de chacune des services 
\t<ul>
\t\t<li>en terme financiere</li>
\t</ul>
\tTableau de bord des entrees comparées aux sorties dans le mois  
\t<ul>
\t\t<li>evolution des entrees par jour(courbes ou diagrammes en barres)</li>
\t\t<li>evolution des sorties par jour</li>
\t</ul>
</div> #}
<!-- 
<div class=\"resume\">
\t<details>Tableau de bord des commandes effectives sur le mois et leur </details> 
\t<details>Tableau de bord des factures effectives sur le mois et leur budget</details>
</div>
 -->
<div class=\"row\">
\t<div class=\"mt-4 pt-3 col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<!--EVOLUTION RUPTURES  -->
\t\t<div class=\"card \">
\t\t \t<div class=\"card-header\">
\t\t    \t<h3 class=\"card-title\">Consommation Moyenne de medicaments par jour</h3>
\t\t    </div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"chart\">
\t\t\t\t{{ render_chart(ConsMoyParJour) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<div class=\"card {#card-primary#}\">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\">Variation des entrées et sorties</h3>
\t\t  </div>
\t\t  <div class=\"card-body\">
\t\t    <div class=\"chart\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t    {{ render_chart(EntreeSortie) }}
\t\t    </div>
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>

\t\t<!-- /.card -->

\t\t<!-- DONUT CHART -->
\t\t<!-- GRAPHE ENTREE/SORTIE -->
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<div class=\"card \">
\t\t\t  <div class=\"card-header\">
\t\t\t    <h3 class=\"card-title\">Medicaments les plus actifs</h3>
\t\t\t    <div class=\"card-tools\">
\t\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t        <i class=\"fas fa-minus\"></i>
\t\t\t      </button>
\t\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t        <i class=\"fas fa-times\"></i>
\t\t\t      </button>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"card-body\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
 \t\t\t\t {{ render_chart(PlusActif) }}\t\t\t
\t\t\t  </div>
\t\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>

\t\t<!-- /.card -->

\t<!-- /.col (LEFT) -->
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<!-- PIE CHART -->
\t\t<!-- REPARTITION UTILISATION D'UN MEDICAMENT -->
\t\t<div class=\"card \">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\"> Consommation par catégorie</h3>

\t\t    <div class=\"card-tools\">
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t        <i class=\"fas fa-minus\"></i>
\t\t      </button>
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t        <i class=\"fas fa-times\"></i>
\t\t      </button>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"card-body\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t\t{{ render_chart(ParCategorie) }}\t\t\t

\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>

\t\t<!-- /.card -->
\t\t<!-- LINE CHART -->
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<div class=\"card \">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\">Consommation par service</h3>

\t\t    <div class=\"card-tools\">
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t        <i class=\"fas fa-minus\"></i>
\t\t      </button>
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t        <i class=\"fas fa-times\"></i>
\t\t      </button>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"card-body\">
\t\t    <div class=\"chart\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t    \t{{ render_chart(ParService) }}
\t\t    </div>
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<div class=\"card \">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\">Depense par service</h3>

\t\t    <div class=\"card-tools\">
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t        <i class=\"fas fa-minus\"></i>
\t\t      </button>
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t        <i class=\"fas fa-times\"></i>
\t\t      </button>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"card-body\">
\t\t    <div class=\"chart\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t    \t{{ render_chart(DepenseParService) }}
\t\t    </div>
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>
\t\t<!-- /.card -->
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<div class=\"card \">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\">Depense par catégorie de médicament</h3>

\t\t    <div class=\"card-tools\">
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t        <i class=\"fas fa-minus\"></i>
\t\t      </button>
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t        <i class=\"fas fa-times\"></i>
\t\t      </button>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"card-body\">
\t\t    <div class=\"chart\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t    \t{{ render_chart(PlusActifParCat) }}
\t\t    </div>
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t</div>
\t\t<!-- /.card -->

</div>
<div class=\"row\">
\t<div class=\"col-xs-12 col-sm-12 col-md-10 offset-md-1 mb-5\">
\t\t<!-- GRAPHES DES SORTIES RECENTES -->
\t\t<div class=\"card \">
\t\t  <div class=\"card-header\">
\t\t    <h3 class=\"card-title\">SORTIES RECENTES</h3>

\t\t    <div class=\"card-tools\">
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t        <i class=\"fas fa-minus\"></i>
\t\t      </button>
\t\t      <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t        <i class=\"fas fa-times\"></i>
\t\t      </button>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"card-body\">
\t\t    <div class=\"chart\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
\t\t     
\t\t    </div>
\t\t  </div>
\t\t  <!-- /.card-body -->
\t\t</div>
\t\t<!-- /.card -->
\t</div>
</div>


{% endblock %}
", "dash_board/index.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\dash_board\\index.html.twig");
    }
}
