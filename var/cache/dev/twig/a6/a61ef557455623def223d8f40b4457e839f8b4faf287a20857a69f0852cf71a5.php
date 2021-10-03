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

/* fournisseur/index.html.twig */
class __TwigTemplate_6b50988f81dba34237f0859f1d75a5f1eb5d44ab171e9bce1559e0a018a7580f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/index.html.twig", 1);
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

        echo "Administration Fournisseurs";
        
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
<hr>
<br>

<div class=\"SpinnerLoader\">
\t<img src=\"/../../img/SpinnerLoaderr.gif\" class=\"img-responsive\" alt=\"\">
</div>
<!--  Modal to Showing item of provider   -->
<div class=\"modal  fade\" id=\"provider\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"provider-label\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered\">

\t</div>
</div>
<!--  end Modal to Showing provider   -->
<div class=\"row\">
\t<div class=\"col-12\">
\t\t<h4 class=\"text-centered\">
\t\t\tListe des Fournisseurs.Nous pouvons voir toutes les informations les concernant
\t\t</h4>
\t\t<div class=\"col-12\">
\t\t\t<div class=\"card card-primary card-outline\">
\t\t\t\t<div class=\"card-tools py-2 bg-light\">
\t\t\t\t\t";
        // line 33
        echo "\t\t\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("provider_add");
        echo "\" class=\"btn btn-success float-right\">Ajouter Fournisseur</a>

\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool float-right\" data-card-widget=\"collapse\">
\t\t\t\t\t\t<i class=\"fas fa-minus  \"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-tools -->

\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t<div class=\"mailbox-controls\">
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" table-responsive mailbox-messages\">
\t\t\t\t\t\t<table class=\"table table-sm table-hover table-bordered table-striped \" id=\"table-provider\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" style\"padding :1px;\">#</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">codeFourn</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Fournisseur</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Société</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Tel</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Mail</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" >Adresse</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" style\"padding :4px;\">Actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provider_list"]) || array_key_exists("provider_list", $context) ? $context["provider_list"] : (function () { throw new RuntimeError('Variable "provider_list" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 62
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"check1\"></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "codeFourn", [], "any", false, false, false, 69), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t<td> ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "nomFourn", [], "any", false, false, false, 70), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t<td> ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "company", [], "any", false, false, false, 71), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t<td> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "telFourn", [], "any", false, false, false, 72), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t<td> ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "mailFourn", [], "any", false, false, false, 73), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t<td class=\"text-truncate text-break\"> ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "adresseFourn", [], "any", false, false, false, 74), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t\t\t\t<a id=\"btn-edit-privider\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("provider_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-edit \"></i> </a>
\t\t\t\t\t\t\t\t\t\t<a id=\"btn-remove-privider\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("provider_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" class=\"btn btn-xs  btn-danger\"><i class=\"fa fa-trash mx-1\"></i></a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<!-- /.table -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.mail-box-messages -->
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t\t<div class=\"card-footer p-0\">

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 81,  189 => 77,  185 => 76,  180 => 74,  176 => 73,  172 => 72,  168 => 71,  164 => 70,  160 => 69,  153 => 65,  148 => 62,  144 => 61,  112 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration Fournisseurs{% endblock %}

{% block body %}

<hr>
<br>

<div class=\"SpinnerLoader\">
\t<img src=\"/../../img/SpinnerLoaderr.gif\" class=\"img-responsive\" alt=\"\">
</div>
<!--  Modal to Showing item of provider   -->
<div class=\"modal  fade\" id=\"provider\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"provider-label\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered\">

\t</div>
</div>
<!--  end Modal to Showing provider   -->
<div class=\"row\">
\t<div class=\"col-12\">
\t\t<h4 class=\"text-centered\">
\t\t\tListe des Fournisseurs.Nous pouvons voir toutes les informations les concernant
\t\t</h4>
\t\t<div class=\"col-12\">
\t\t\t<div class=\"card card-primary card-outline\">
\t\t\t\t<div class=\"card-tools py-2 bg-light\">
\t\t\t\t\t{# <button type=\"button\" class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"\" id=\"btn-remove-provider\">
\t\t\t\t\t\t<i class=\"fas fa-ban mr-2\"></i>Supprimer Fournisseur
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#provider-item\" id=\"btn-add-provider\">Ajouter Fournisseur</button>
\t\t\t\t\t<button class=\"btn btn-outline-info btn_view_facture\" data-toggle=\"modal\" data-target=\"\" id=\"\">Afficher</button> #}
\t\t\t\t\t<a href=\"{{path('provider_add')}}\" class=\"btn btn-success float-right\">Ajouter Fournisseur</a>

\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool float-right\" data-card-widget=\"collapse\">
\t\t\t\t\t\t<i class=\"fas fa-minus  \"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-tools -->

\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t<div class=\"mailbox-controls\">
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" table-responsive mailbox-messages\">
\t\t\t\t\t\t<table class=\"table table-sm table-hover table-bordered table-striped \" id=\"table-provider\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" style\"padding :1px;\">#</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">codeFourn</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Fournisseur</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Société</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Tel</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Mail</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" >Adresse</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\" style\"padding :4px;\">Actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for list in provider_list %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"{{list.id}}\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"check1\"></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> {{list.codeFourn}} </td>
\t\t\t\t\t\t\t\t\t<td> {{list.nomFourn}} </td>
\t\t\t\t\t\t\t\t\t<td> {{list.company}} </td>
\t\t\t\t\t\t\t\t\t<td> {{list.telFourn}} </td>
\t\t\t\t\t\t\t\t\t<td> {{list.mailFourn}} </td>
\t\t\t\t\t\t\t\t\t<td class=\"text-truncate text-break\"> {{list.adresseFourn }} </td>
\t\t\t\t\t\t\t\t\t<td> 
\t\t\t\t\t\t\t\t\t\t<a id=\"btn-edit-privider\" href=\"{{path('provider_edit', {id: list.id})}}\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-edit \"></i> </a>
\t\t\t\t\t\t\t\t\t\t<a id=\"btn-remove-privider\" href=\"{{path('provider_remove',{ id: list.id})}}\" class=\"btn btn-xs  btn-danger\"><i class=\"fa fa-trash mx-1\"></i></a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<!-- /.table -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.mail-box-messages -->
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t\t<div class=\"card-footer p-0\">

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</div>
\t</div>
</div>
{% endblock %}", "fournisseur/index.html.twig", "C:\\xampp\\htdocs\\CYM\\templates\\fournisseur\\index.html.twig");
    }
}
